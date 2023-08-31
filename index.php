<?php get_header();?>
<div class="w-full bg-tdark text-white pb-32">
    <p class="text-center py-16 text-xl uppercase">
        <span class="font-light">2023 cohort</span>
        <br/>
        <span class="font-semibold text-tyellow">Water and drought</span>
    </p>
    <?php
        $i = 0;
        $end_post_index = $wp_query->post_count-1;
        if (have_posts()): while (have_posts()): the_post();
        if ($i == 0):
    ?>
        <a href="<?php the_permalink()?>">
            <?php echo get_the_post_thumbnail( null, "full", array("class" => "max-w-3xl w-full block mx-auto mb-16 aspect-[3/2] object-cover") )?>
            <div class="max-w-2xl mx-auto text-center px-4">
                <h2 class="text-4xl md:text-5xl !leading-[1.15] font-bold my-8"><?php if (get_post_meta(get_the_ID(), "is_media_story", true)) echo "<i class='fa-solid fa-circle-play'></i> ";?><?php the_title(); ?></h2>
                <p class="opacity-50 sm:text-xl my-8"><?php echo get_the_excerpt(); ?></p>
                <div class="flex items-center justify-center gap-8 my-8 whitespace-nowrap flex-wrap">
                    <span class="font-bold opacity-50 uppercase">
                        <?php
                        $authors = get_coauthors();
                        foreach($authors as $key=>$author) {
                            echo $author->get("display_name");
                            if ($key != (count($authors) - 1)) {echo ", ";}
                        }
                        ?>
                    </span>
                    <?php
                    // $published_url = get_post_meta(get_the_ID(), "published_url", true);
                    // $publication_name = get_post_meta(get_the_ID(), "publication_name", true);
                    $publication_logo = get_post_meta(get_the_ID(), "publication_logo", true);
                    if ($publication_logo):
                        $publication_logo_url = wp_get_attachment_url($publication_logo);
                    ?>
                        <div class="flex items-center">
                            <span class="text-sm mr-2 opacity-50">Published with</span>
                            <img src="<?php echo $publication_logo_url ?>" class="h-6 sm:h-8 inline-block" alt=""/>
                        </div>
                    <?php endif;?>
                </div>
            </div>
        </a>
    <?php endif; ?>
    <?php if ($i >= 1 & $i < 4): ?>
        <?php if ($i == 1): ?>
            <div class="lg:flex gap-8 max-w-6xl mx-auto px-4 mt-32">
        <?php endif; ?>
                <a href="<?php the_permalink()?>" class="flex gap-4 lg:block lg:w-1/3 mb-8">
                    <div class="w-24 sm:w-40 lg:w-full flex-shrink-0">
                        <?php echo get_the_post_thumbnail( null, "full", array("class" => "w-full block mb-6 aspect-[3/2] object-cover") )?>
                    </div>
                    <div class="">
                        <h2 class="font-bold text-2xl !leading-[1.15] mb-2 sm:mb-4 lg:mb-6"><?php if (get_post_meta(get_the_ID(), "is_media_story", true)) echo "<i class='fa-solid fa-circle-play'></i> ";?><?php the_title() ?></h2>
                        <p class="opacity-50 mb-4 lg:mb-6"><?php echo get_the_excerpt(); ?></p>
                        <div class="mb-4 lg:mb-6">
                            <span class="font-bold uppercase">
                                <?php
                                $authors = get_coauthors();
                                foreach($authors as $key=>$author) {
                                    echo $author->get("display_name");
                                    if ($key != (count($authors) - 1)) {echo ", ";}
                                }
                                ?>
                            </span>
                        </div>
                        <?php get_template_part("template_parts/published-in"); ?>
                    </div>
                </a>
        <?php if ($i == 3 || ($i == $end_post_index)): ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>
    <?php if ($i >= 4 & $i <= 7): ?>
        <?php if ($i == 4): ?>
            <div class="max-w-6xl mx-auto px-4 md:px-0 mt-32" id="home-masonry-1">
        <?php endif; ?>
            <?php get_template_part("template_parts/four-post"); ?>
            <?php if ($i == 4 && $i != $end_post_index): ?>
                <!-- <div class="hidden md:block w-[calc(50%-32px)] h-16"></div> -->
            <?php endif; ?>
        <?php if ($i == 7 || $i == $end_post_index): ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>
    <?php if ($i > 7): ?>
        <?php if ($i == 8): ?>
            <div class="max-w-6xl mx-auto px-4 md:px-0 mt-32" id="home-masonry-2">
        <?php endif; ?>
        <?php get_template_part("template_parts/four-post"); ?>
        <?php if ($i == $end_post_index): ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>
    <?php if ($i == 3 || ((($i >= 1 & $i <= 3) || $end_post_index < 1) & $i == $end_post_index)): ?>
        <div class="max-w-6xl mx-auto px-4">
            <div class="bg-tyellow h-[6px] w-12 mt-32 mb-8"></div>
            <p class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl !leading-snug mb-12">
                <span class="font-black text-tyellow">JCal empowers California students to tell the stories of their communities</span><span class="opacity-50"> by immersing them in the state’s news ecosystem through an all-inclusive, free summer program.</span>
                <br/><br/>
                <span class="opacity-50">This year’s theme was </span><span class="font-bold">Water and Drought.</span>
            </p>
            <a href="<?php echo home_url("/about");?>" class="bg-tyellow px-3 sm:text-xl py-2 uppercase font-black text-tdark inline-block">More about JCal</a>
        </div>
    <?php endif; ?>
    <?php if ($i == 7 || ((($i >= 4 & $i <= 7) || $end_post_index < 4) & $i == $wp_query->post_count-1)): ?>
        <div class="max-w-6xl mx-auto px-4">
                <div class="bg-tred h-[6px] w-12 mt-32 mb-8"></div>
                <p class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl !leading-snug mb-12">
                    <span class="font-black text-tred">Veteran journalists from the Los Angeles Times, Bloomberg and CalMatters</span><span class="opacity-50"> edited stories and mentored JCal reporters at a one-week camp at CalMatters’ Sacramento newsroom.</span>
                </p>
                <a href="<?php echo home_url("/people");?>" class="bg-tred px-3 sm:text-xl py-2 uppercase font-black inline-block">Meet the People of JCal</a>
            </div>
    <?php endif; ?>
    <?php $i++; endwhile; endif; ?>
</div>
<?php get_footer();?>
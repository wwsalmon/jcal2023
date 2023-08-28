<?php get_header();?>
<div class="w-full bg-tdark text-white">
    <p class="text-center py-16 text-xl uppercase">
        <span class="font-light">2023 cohort</span>
        <br/>
        <span class="font-semibold text-tyellow">Water and drought</span>
    </p>
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <a href="<?php the_permalink()?>">
            <?php echo get_the_post_thumbnail( null, "full", array("class" => "max-w-3xl w-full block mx-auto mb-16") )?>
            <div class="max-w-2xl mx-auto text-center px-4">
                <h2 class="text-4xl md:text-5xl !leading-[1.15] font-bold my-8"><?php the_title(); ?></h2>
                <p class="opacity-50 sm:text-xl my-8"><?php echo get_the_excerpt(); ?></p>
                <div class="flex items-center justify-center gap-8 my-8 whitespace-nowrap flex-wrap">
                    <?php
                    $authors = get_coauthors();
                    foreach($authors as $author):
                    ?>
                        <span class="font-bold opacity-50 uppercase"><?php echo $author->get("display_name"); ?></span>
                    <?php
                    endforeach;
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
    <?php endwhile; endif; ?>
    <div class="max-w-6xl mx-auto px-4">
        <div class="bg-tyellow h-[6px] w-12 mt-16 mb-8"></div>
        <p class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl !leading-snug mb-12">
            <span class="font-black text-tyellow">JCal empowers California students to tell the stories of their communities</span><span class="opacity-50"> by immersing them in the state’s news ecosystem through an all-inclusive, free summer program.</span>
            <br/><br/>
            <span class="opacity-50">This year’s theme was </span><span class="font-bold">Water and Drought.</span>
        </p>
        <a href="" class="bg-tyellow px-3 sm:text-xl py-2 uppercase font-black text-tdark inline-block">More about JCal</a>
    </div>
    <div class="max-w-6xl mx-auto px-4">
        <div class="bg-tred h-[6px] w-12 mt-16 mb-8"></div>
        <p class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl !leading-snug mb-12">
            <span class="font-black text-tred">Veteran journalists from the Los Angeles Times, Bloomberg and CalMatters</span><span class="opacity-50"> edited stories and mentored JCal reporters at a one-week camp at CalMatters’ Sacramento newsroom.</span>
        </p>
        <a href="" class="bg-tred px-3 sm:text-xl py-2 uppercase font-black inline-block">Meet the People of JCal</a>
    </div>
</div>
<?php get_footer();?>
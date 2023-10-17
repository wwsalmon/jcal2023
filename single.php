<?php get_header();
?>
<?php
    while (have_posts()) :
        the_post();
        $published_url = get_post_meta(get_the_ID(), "published_url", true);
        $publication_name = get_post_meta(get_the_ID(), "publication_name", true);
        $publication_logo = get_post_meta(get_the_ID(), "publication_logo", true);
        if ($publication_logo):
            $publication_logo_url = wp_get_attachment_url($publication_logo);
        else:
            $publication_logo_url = false;
        endif;
        ?>
            <div class="max-w-4xl mx-auto px-4">
                <div class="w-full max-w-2xl mx-auto py-20 bg-[radial-gradient(closest-side,_var(--tw-gradient-stops))] from-tyellow to-transparent text-center">
                    <p class="sm:text-xl uppercase !leading-[1.15]">
                        <span class="font-light">2023 cohort</span>
                        <br/>
                        <a href="<?php echo home_url("/"); ?>" class="underline font-medium">Water and drought</a>
                    </p>
                </div>
                <?php if (!empty($publication_name) & !empty($publication_logo_url)): ?>
                    <div class="flex items-center mt-8">
                        <span class="text-sm sm:text-base font-bold uppercase mr-2 text-tgray">Published with</span>
                        <img src="<?php echo $publication_logo_url ?>" class="h-6 sm:h-8 inline-block" alt=""/>
                    </div>
                <?php endif; ?>
                <h1 class="text-4xl sm:text-6xl font-black !leading-[1.15] mt-8"><?php the_title() ?></h1>
                <p class="text-xl sm:text-2xl text-tgray leading-normal mt-8"><?php echo get_the_excerpt() ?></p>
                <div class="mt-8">
                    <span class="font-bold text-tblue uppercase">
                        <?php
                        $authors = get_coauthors();
                        foreach($authors as $key=>$author) {
                            echo $author->get("display_name");
                            if ($key != (count($authors) - 1)) {echo ", ";}
                        }
                        ?>
                    </span>
                    <p class="text-tgray"><?php echo the_date("F j, Y"); ?></p>
                </div>
                <?php echo get_the_post_thumbnail( null, "full", array("class" => "w-full block mt-8")); ?>
            </div>
            <p class="text-center text-sm mt-2 text-tgray"><?php echo get_the_post_thumbnail_caption() ?></p>
            <?php if ($publication_name && $published_url): ?>
                <div class="max-w-2xl mx-auto px-4 my-16">
                    <div class="p-5 bg-[#EEEEEE]">
                        <p class="text-lg font-bold text-tblue uppercase mb-2">About this story</p>
                        <p>This story was produced by a reporter in the 2023 cohort of the AAJA/Calmatters JCal program and originally <a href="<?php echo $published_url?>" class="underline text-tblue">published in <?php echo $publication_name; ?>.</a></p>
                    </div>
                </div>
            <?php endif; ?>
            <div class="content content-drop max-w-2xl mx-auto px-4">
                <?php the_content(); ?>
            </div>
            <div class="max-w-4xl mx-auto px-4">
                <div class="bg-tblue h-[6px] w-12 mt-24 mb-8"></div>
                <h2 class="text-tblue text-4xl font-black uppercase">About the author<?php if (count($authors) > 1): echo "s"; endif; ?></h2>
                <div class="content">
                    <?php foreach($authors as $author): $bio = $author->get("description");?>
                        <p><?php echo $bio; ?></p>
                    <?php endforeach; ?>
                </div>
                <div class="bg-tdark h-[6px] w-12 mt-24 mb-8"></div>
                <h2 class="text-tdark text-4xl font-black uppercase">Read more</h2>
                <div class="md:flex gap-8 my-16">
                    <?php
                    $related_posts = get_posts(array("orderby" => "rand", "posts_per_page" => "3"));

                    foreach ($related_posts as $related_post):
                    ?>
                        <a href="<?php echo get_the_permalink( $related_post->ID )?>" class="md:w-1/3 flex-shrink-0 flex md:block mb-12 sm:mb-0">
                            <div class="w-24 sm:w-40 md:w-full flex-shrink-0 mr-4 sm:mr-0 mb-4">
                                <?php echo get_the_post_thumbnail( $related_post->ID, "full", array("class" => "w-full block aspect-[3/2] object-cover=") )?>                            
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-4"><?php if (get_post_meta($related_post->ID, "is_media_story", true)) echo "<i class='fa-solid fa-circle-play'></i> ";?><?php echo get_the_title($related_post->ID); ?></h3>
                                <div><span class="font-bold uppercase text-tgray">
                                    <?php
                                    $authors = get_coauthors($related_post->ID);
                                    foreach($authors as $key=>$author) {
                                        echo $author->get("display_name");
                                        if ($key != (count($authors) - 1)) {echo ", ";}
                                    }
                                    ?>
                                </span></div>
                                <?php
                                $publication_logo = get_post_meta($related_post->ID, "publication_logo", true);

                                if ($publication_logo):
                                    $publication_logo_url = wp_get_attachment_url($publication_logo);
                                    if ($publication_logo_url):
                                ?>
                                    <div class="mt-4 pt-4 border-t flex items-center gap-4">
                                        <span class="text-tgray text-sm">Published with</span>
                                        <img src="<?php echo $publication_logo_url ?>" alt="" class="h-6"/>
                                    </div>
                                <?php endif; endif; ?>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
<?php endwhile; get_footer(); ?>
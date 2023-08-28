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
        ?>
            <div class="max-w-4xl mx-auto px-4">
                <div class="w-full max-w-2xl mx-auto py-20 bg-[radial-gradient(closest-side,_var(--tw-gradient-stops))] from-tyellow to-transparent text-center">
                    <p class="sm:text-xl uppercase !leading-[1.15]">
                        <span class="font-light">2023 cohort</span>
                        <br/>
                        <a href="<?php echo home_url("/"); ?>" class="underline font-medium">Water and drought</a>
                    </p>
                </div>
                <div class="flex items-center mt-8">
                    <span class="text-sm sm:text-base font-bold uppercase mr-2 text-tgray">Published with</span>
                    <img src="<?php echo $publication_logo_url ?>" class="h-6 sm:h-8 inline-block" alt=""/>
                </div>
                <h1 class="text-4xl sm:text-6xl font-black !leading-[1.15] mt-8"><?php the_title() ?></h1>
                <p class="text-xl sm:text-2xl text-tgray leading-normal mt-8"><?php echo get_the_excerpt() ?></p>
                <div class="mt-8">
                    <?php
                            $authors = get_coauthors();
                            foreach($authors as $author):
                            ?>
                                <span class="font-bold text-tblue uppercase"><?php echo $author->get("display_name"); ?></span>
                            <?php endforeach; ?>
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
                <h2 class="text-tblue text-4xl font-black uppercase">About the author</h2>
                <div class="content">
                    <?php foreach($authors as $author): $bio = $author->get("description");?>
                        <p><?php echo $bio; ?></p>
                    <?php endforeach; ?>
                </div>
                <div class="bg-tdark h-[6px] w-12 mt-24 mb-8"></div>
                <h2 class="text-tdark text-4xl font-black uppercase">Read more</h2>
            </div>
        <?php endif;?>
<?php endwhile; get_footer(); ?>
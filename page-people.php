<?php get_header(); while (have_posts()) : the_post(); ?>
    <div class="max-w-4xl mx-auto px-4">
        <h1 class="text-4xl sm:text-5xl text-tblue uppercase font-black pt-24">People</h1>
        <p class="text-xl sm:text-3xl text-tgray mt-8 !leading-snug"><?php echo get_the_excerpt(); ?></p>
        <?php echo get_the_post_thumbnail( null, "full", array("class" => "w-full block mt-8")); ?>
        <div class="flex">
            <p class="text-tgray text-right mt-8 ml-auto w-64"><?php echo get_the_post_thumbnail_caption() ?></p>
        </div>
    </div>
<?php endwhile; get_footer(); ?>
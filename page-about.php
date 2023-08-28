<?php get_header();
while (have_posts()) :
    the_post();
?>
    <?php echo get_the_post_thumbnail( null, "full", array("class" => "w-full block")); ?>
    <div class="max-w-2xl mx-auto px-4 sm:-mt-24 -mt-20">
        <h1 class="uppercase font-black text-white text-4xl sm:text-6xl text-center leading-none">About JCal</h1>
        <div class="bg-tblue py-6 sm:py-12 px-4 sm:px-8 rounded-lg text-2xl sm:text-4xl text-center text-white mb-8 relative !leading-snug sm:-mt-[15px] -mt-[9px]">
            <span><?php the_excerpt(); ?></span>
        </div>
        <div class="content content-about">
            <?php the_content(); ?>
        </div>
    </div>
<?php
endwhile;
get_footer(); ?>
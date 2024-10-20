<?php get_header(); while (have_posts()) : the_post(); ?>
    <div class="max-w-4xl mx-auto px-4 relative">
        <h1 class="text-4xl sm:text-5xl text-tblue uppercase font-black pt-24">People</h1>
        <p class="text-xl sm:text-3xl text-tgray mt-8 !leading-snug"><?php echo get_the_excerpt(); ?></p>
        <?php echo get_the_post_thumbnail( null, "full", array("class" => "w-full block mt-8")); ?>
        <div class="flex">
            <p class="text-tgray text-right mt-8 ml-auto w-64"><?php echo get_the_post_thumbnail_caption() ?></p>
        </div>
        <div class="sm:ml-8 mt-6 sm:-mt-64 z-5 relative sm:w-[calc(100%-256px-32px-32px)]">
            <div class="bg-tblue p-4 text-white content">   
                <span><?php echo get_theme_mod("jcal-people-1") ?></span>
            </div>
            <div class="border-[12px] w-0 border-l-tblue border-t-tblue border-r-transparent border-b-transparent"></div>
            <div class="mt-4 text-sm text-tgray">
                <span class="uppercase font-bold"><?php echo get_theme_mod("jcal-people-2", "Clarissa Wing") ?></span><br/><span><?php echo get_theme_mod("jcal-people-3", "San Mateo County") ?></span>
            </div>
        </div>
    </div>
    <?php
    $active_year = get_theme_mod("jcal-home-1-4");
    get_template_part( "template_parts/people-years", null, array("active_year" => $active_year));
    ?>
    <div class="max-w-3xl mx-auto px-4 pb-24">
        <?php the_content() ?>
    </div>
<?php endwhile; get_footer(); ?>
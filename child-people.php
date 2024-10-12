<?php get_header(); while (have_posts()) : the_post(); ?>
    <div class="max-w-3xl mx-auto px-4 pt-20">
        <a href="<?php echo get_page_link(get_page_by_path("people"));?>" class="uppercase font-black pb-4 block">< Back to people</a>
        <h1 class="text-4xl sm:text-5xl font-black">People: <?php the_title()?></h1>
    </div>
    <?php
    $active_year = get_the_title();
    get_template_part( "template_parts/people-years", null, array("active_year" => $active_year));
    ?>
    <div class="max-w-3xl mx-auto px-4 pb-24">
        <?php the_content() ?>
    </div>
<?php endwhile; get_footer(); ?>
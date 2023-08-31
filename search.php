<?php get_header(); ?>
<div class="max-w-4xl mx-auto px-4 py-16">
    <h1 class="text-4xl font-bold mb-8">Search site</h1>
    <?php get_search_form(); ?>
    <hr class="my-8">
    <h2 class="mb-8"><?php echo $wp_query->post_count?> match<?php if ($wp_query->post_count != 1) echo "es"; ?></h2>
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="flex mb-8">
            <div class="w-24 sm:w-40 flex-shrink-0 mr-8">
                <?php echo get_the_post_thumbnail( null, "full", array("class" => "w-full aspect-[3/2] object-cover") ); ?>
            </div>
            <div>
                <h3 class="text-2xl font-bold mb-4"><?php the_title(); ?></h3>
                <p class="mb-4"><?php the_excerpt(); ?></p>
                <p class="opacity-50">
                <?php
                    $authors = get_coauthors();
                    foreach($authors as $key=>$author) {
                        echo $author->get("display_name");
                        if ($key != (count($authors) - 1)) {echo ", ";}
                    }
                    ?>
                </p>
            </div>
        </a>
    <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>
<a href="<?php the_permalink()?>" class="w-[calc(100%-32px)] -ml-4 md:ml-0 md:w-[calc(50%-32px)] flex md:block gap-4 md:[&:nth-child(2)]:pt-16">
    <div class="w-24 sm:w-40 md:w-full flex-shrink-0">
        <?php echo get_the_post_thumbnail( null, "full", array("class" => "w-full block mb-4 md:mb-8 aspect-[3/2] object-cover") )?>
    </div>
    <div class="">
        <h2 class="font-bold text-2xl md:text-3xl !leading-[1.15] mb-2 md:mb-8"><?php the_title() ?></h2>
        <p class="opacity-50 mb-4 md:mb-8 md:text-xl !leading-normal"><?php echo get_the_excerpt(); ?></p>
        <div class="mb-2 md:mb-8">
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
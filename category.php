<?php get_header();
$cat = get_queried_object();
$cat_program = "";
$cat_name = $cat->name;
$cat_explode = explode(":", $cat_name);
if (count($cat_explode) > 1) {
    $cat_program = $cat_explode[0];
    $cat_name = $cat_explode[1];
} else {
    $cat_name = $cat->name;
}
?>
<div class="text-center max-w-4xl px-4 mx-auto py-24 mt-8 bg-[radial-gradient(closest-side,_var(--tw-gradient-stops))] from-tyellow to-transparent mb-16">
    <div class="uppercase font-black text-xl">
        <span class="text-tblue">Student Work</span> / <span><?php echo $cat_program ?></span>
    </div>
    <h1 class="font-black text-5xl md:text-6xl mt-4"><?php echo $cat_name ?></h1>
</div>
<div class="max-w-7xl mx-auto px-4 flex pb-32">
    <div class="w-48 mr-8 flex-shrink-0 hidden lg:block">
        <div class="bg-tblue h-[6px] w-12 mb-8"></div>
        <div class="uppercase font-black mb-8"><span>Cohorts</span></div>
        <?php
        $categories = get_sorted_categories();
        foreach($categories as $category): if ($category->name !== "Uncategorized"):
            $cat_name = $category->name;
            $cat_explode = explode(":", $cat_name);
            if (count($cat_explode) > 1) {
                $cat_year = substr($cat_explode[0], 0, 4);
                $cat_name = $cat_explode[1];
            }
            ?>
            <a href="<?php echo get_category_link($category) ?>" class="text-tgray hover:text-tblue mb-8 block text-lg leading-tight">
                <?php echo $cat_year;?><br/>
                <span class="font-semibold"><?php echo $cat_name;?></span>
            </a>
            <?php
            endif;
        endforeach;
        ?>
    </div>
    <div id="category-masonry" class="w-full">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <?php get_template_part("template_parts/four-post"); ?>
        <?php endwhile; endif; ?>
    </div>
</div>
<?php get_footer();?>
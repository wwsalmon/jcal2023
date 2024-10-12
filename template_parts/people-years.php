<?php
$active_year = $args["active_year"];
$people_page = get_page_by_path("people");
$people_children = get_pages('sort_column=menu_order&title_li=&child_of=' . $people_page->ID . '&echo=0');
$curr_year = get_theme_mod("jcal-home-1-4");
?>
<div class="w-full bg-tlightyellow mt-20 overflow-x-auto">
    <div class="max-w-3xl mx-auto px-4 uppercase font-bold text-sm sm:text-base flex items-center h-12">
        <span class="mr-4 flex-shrink-0">By Cohort</span>
        <a class="h-full flex jcal-arrow <?php if ($active_year == $curr_year) {echo "jcal-arrow-active";} ?>" href="<?php echo get_page_link($people_page);?>">
            <div class="jcal-arrow-before"></div>
            <div class="jcal-arrow-middle flex items-center px-4"><span><?php echo $curr_year; ?></span></div>
            <div class="jcal-arrow-after jcal-arrow-active"></div>
        </a>
        <?php foreach ($people_children as $child_page): ?>
        <a class="h-full flex jcal-arrow <?php if ($active_year == $child_page->post_title) {echo "jcal-arrow-active";} ?>" href="<?php echo get_page_link($child_page) ?>">
            <div class="jcal-arrow-before"></div>
            <div class="jcal-arrow-middle flex items-center px-4"><span><?php echo $child_page->post_title; ?></span></div>
            <div class="jcal-arrow-after"></div>
        </a>
        <?php endforeach; ?>
    </div>
</div>
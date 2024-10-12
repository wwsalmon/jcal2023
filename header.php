<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, target-densityDpi=device-dpi' name='viewport'/>
    <title><?php echo wp_get_document_title(); ?></title>
<?php
date_default_timezone_set("America/New_York");
wp_head();
global $template;
$template_name = basename($template);
$is_home = ($template_name === "index.php");
?>
</head>
<body>
    <div class="h-20 w-full sticky top-0 <?php if ($is_home) echo "bg-tdark text-white"; else echo "bg-white";?> z-20">
        <div class="flex items-center w-full h-full border-t-8 box-border border-tyellow px-4">
            <p class="hidden sm:block"><span class="hidden lg:inline">A partnership between </span><a href="http://aaja.org/" class="<?php if ($is_home) echo "text-tyellow"; else echo "text-tblue" ?>">AAJA</a><span class="hidden lg:inline"> and </span><span class="inline lg:hidden"> / </span><a href="https://calmatters.org/youthjournalism/" class="<?php if ($is_home) echo "text-tyellow"; else echo "text-tblue" ?>">CalMatters</a></p>
            <div class="ml-auto md:flex items-center gap-6 hidden">
                <a href="<?php echo home_url("/?s="); ?>"><i class="fa-solid fa-magnifying-glass"></i></a>
                <div class="font-semibold relative jcal-dropdown">
                    <span>Stories <i class="fa-solid fa-caret-down ml-1 opacity-50"></i></span>
                    <div class="hidden absolute right-0 pt-4 text-black z-30 jcal-dropdown-menu">
                        <?php
                        $categories = get_sorted_categories();
                        foreach($categories as $category): if ($category->name !== "Uncategorized"):
                        
                            $cat_name = $category->name;
                            $cat_explode = explode(":", $cat_name);
                            if (count($cat_explode) > 1) {
                                $cat_year = substr($cat_explode[0], 0, 4);
                                $cat_name = $cat_year . ": " . $cat_explode[1];
                            }
                            ?>
                            <a href="<?php echo get_category_link($category) ?>" class="px-4 py-2 block bg-white hover:bg-gray-100 whitespace-nowrap"><?php echo $cat_name;?></a>
                        <?php endif; endforeach; ?>
                    </div>
                </div>
                <a href="<?php echo home_url("/people"); ?>" class="font-semibold">People</a>
                <a href="<?php echo home_url("/about"); ?>" class="font-black uppercase px-2 py-1 bg-tyellow text-tdark">About<span class="hidden lg:inline"> JCal</span></a>
            </div>
            <button class="md:hidden ml-auto" id="sidebar-open"><i class="fa-solid fa-bars"></i></button>
        </div>
        <a class="absolute left-1/2 top-0 bg-white h-20 w-40 rounded-b-full text-tdark transform -translate-x-1/2 flex items-center justify-center shadow-lg" href="<?php echo get_home_url("/"); ?>">
            <img src="<?php echo get_template_directory_uri() . "/img/logo.svg" ?>" alt="" class="w-[92px] -mt-3">
        </a>
    </div>
    <div class="fixed w-64 h-full top-0 right-0 z-30 bg-white md:hidden py-8 px-4 -mr-64 transition-all text-right border-l overflow-y-auto" id="sidebar">
        <button id="sidebar-close"><i class="fa-solid fa-xmark"></i></button>
        <p class="my-16">JCal is a partnership between <a href="http://aaja.org/" class="text-tblue">AAJA</a> and <a href="https://calmatters.org/youthjournalism/" class="text-tblue">CalMatters</a></p>
        <div class="my-16 font-semibold">
            <?php
            $categories = get_categories();
            foreach($categories as $category): if ($category->name !== "Uncategorized"):
            
                $cat_name = $category->name;
                $cat_explode = explode(":", $cat_name);
                if (count($cat_explode) > 1) {
                    $cat_year = substr($cat_explode[0], 0, 4);
                    $cat_name = $cat_year . ": " . $cat_explode[1];
                }
                ?>
                <a href="<?php echo get_category_link($category) ?>" class="block mb-6"><?php echo $cat_name;?></a>
            <?php endif; endforeach; ?>
            <a href="<?php echo home_url("/people"); ?>" class="block mb-6">People</a>
            <a href="<?php echo home_url("/?s="); ?>" class="block mb-6">Search</a>
            <a href="<?php echo home_url("/about"); ?>" class="inline-block font-black uppercase px-2 py-1 bg-tyellow text-tdark">About JCal</span></a>
        </div>
    </div>
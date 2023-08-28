<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, target-densityDpi=device-dpi' name='viewport'/>
    <title><?php echo wp_get_document_title(); ?></title>
<?php
date_default_timezone_set("America/New_York");
wp_head();
?>
</head>
<body>
    <div class="h-20 w-full sticky top-0 bg-tdark text-white z-10">
        <div class="flex items-center w-full h-full border-t-8 box-border border-tyellow px-4">
            <p class="hidden sm:block"><span class="hidden lg:inline">A partnership between </span><a href="http://aaja.org/" class="text-tyellow">AAJA</a><span class="hidden lg:inline"> and </span><span class="inline lg:hidden"> / </span><a href="https://calmatters.org/youthjournalism/" class="text-tyellow">CalMatters</a></p>
            <div class="ml-auto md:flex items-center gap-6 hidden">
                <a href="<?php echo home_url("/search"); ?>"><i class="fa-solid fa-magnifying-glass"></i></a>
                <a href="<?php echo home_url("/"); ?>" class="font-semibold">Stories</a>
                <a href="<?php echo home_url("/people"); ?>" class="font-semibold">People</a>
                <a href="<?php echo home_url("/about"); ?>" class="font-black uppercase px-2 py-1 bg-tyellow text-tdark">About<span class="hidden lg:inline"> JCal</span></a>
            </div>
            <button class="md:hidden ml-auto"><i class="fa-solid fa-bars"></i></button>
        </div>
        <a class="absolute left-1/2 top-0 bg-white h-20 w-40 rounded-b-full text-tdark transform -translate-x-1/2 flex items-center justify-center" href="<?php echo get_home_url("/"); ?>">
            <img src="<?php echo get_template_directory_uri() . "/img/logo.svg" ?>" alt="" class="w-[92px] -mt-3">
        </a>
    </div>
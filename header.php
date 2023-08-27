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
            <p>A partnership between <a href="" class="text-tyellow">AAJA</a> and <a href="" class="text-tyellow">CalMatters</a></p>
            <div class="ml-auto flex items-center gap-6">
                <i class="fa-solid fa-magnifying-glass"></i>
                <a href="" class="font-semibold">Stories</a>
                <a href="" class="font-semibold">People</a>
                <a href="" class="font-black uppercase px-2 py-1 bg-tyellow text-tdark">About JCal</a>
            </div>
        </div>
        <div class="absolute left-1/2 top-0 bg-white h-20 w-40 rounded-b-full text-tdark transform -translate-x-1/2 flex items-center justify-center">
            <img src="<?php echo get_template_directory_uri() . "/img/logo.svg" ?>" alt="" class="w-[92px] -mt-3">
        </div>
    </div>
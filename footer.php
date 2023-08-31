    <?php
    global $template;
    $template_name = basename($template);
    $is_home = ($template_name === "index.php");
    ?>
    <div class="w-full text-white border-b-8 border-tyellow" style="background: radial-gradient(200vh 100% at bottom, #2C5F93 100%, <?php if ($is_home) echo "#111"; else echo "white" ?> 100%)">
        <div class="max-w-4xl mx-auto px-4">
            <img src="<?php echo get_template_directory_uri() . "/img/logo-white.svg";?>" alt="" class="w-32 mx-auto block py-12"/>
            <div class="sm:flex gap-8">
                <div class="sm:w-1/2 text-lg">
                    <p>JCal is a free program that immerses California high school students into the state’s news ecosystem. It is a collaboration between the <a href="https://aaja.org" class="underline">Asian American Journalists Association</a> and <a href="https://calmatters.org" class="underline">CalMatters</a>.</p>
                </div>
                <div class="sm:w-1/2 text-lg sm:flex flex-col items-end mt-6 sm:mt-0">
                    <p>Contact us at <a href="mailto:michael@calmatters.org" class="underline">michael@calmatters.org</a> or <a href="mailto:support@aaja.org" class="underline">support@aaja.org</a>.</p>
                    <a class="py-1 px-2 bg-tyellow font-black text-tdark uppercase sm:mt-auto mt-6 inline-block" href="">Subscribe to aaja’s newsletter</a>
                </div>
            </div>
            <div class="sm:flex items-center my-6">
                <div class="flex items-center gap-4">
                    <img src="<?php echo get_template_directory_uri() . "/img/calmatters-badge.png" ?>" class="h-16" alt=""/>
                    <a href="https://calmatters.org">calmatters.org</a>
                    <a href="https://twitter.com/CalMatters"><i class="fa-brands fa-twitter"></i></a>
                    <a href="https://www.instagram.com/calmatters/"><i class="fa-brands fa-instagram"></i></a>
                </div>
                <div class="flex items-center gap-4 mt-4 sm:mt-0 ml-auto">
                    <img src="<?php echo get_template_directory_uri() . "/img/aaja-badge.png"?>" class="h-16 sm:order-4" alt=""/>
                    <a href="https://aaja.org">aaja.org</a>
                    <a href="https://twitter.com/aaja"><i class="fa-brands fa-twitter"></i></a>
                    <a href="https://www.instagram.com/aajaofficial/"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
            <div class="flex items-center font-bold gap-8 py-5 border-t border-[#6187AD] mt-5">
                <a href="<?php echo home_url("/"); ?>">Stories</a>
                <a href="<?php echo home_url("/people"); ?>">People</a>
                <a href="<?php echo home_url("/about"); ?>">About</a>
            </div>
        </div>
    </div>
</body>
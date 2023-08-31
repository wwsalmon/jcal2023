<?php get_header();
while (have_posts()) :
    the_post();
?>
    <div class="w-full relative">
        <div class="w-full relative bg-tblue">
            <div class="w-full pt-8 xl:pt-32 flex items-center gap-8 px-4 md:px-8 absolute top-0 left-0 z-10">
                <div class="hidden md:block md:w-1/3 mb-8">
                    <div class="bg-white p-4 text-tgray">   
                        <span><strong>Interviewing an Assemblymember was a major confidence booster for me.</strong> Learning that many lawmakers are willing to talk to journalists and community members about prominent issues was fulfilling. I will cherish the connections I made while at JCal, and continue utilizing my newfound skills as I take on college journalism.</span>
                    </div>
                    <div class="border-[12px] w-0 border-l-white border-t-white border-r-transparent border-b-transparent"></div>
                    <div class="mt-4 text-sm text-white">
                        <span class="uppercase font-bold">Clarissa Wing</span><br/><span>San Mateo County</span>
                    </div>
                </div>
                <div class="md:w-1/3 mb-8">
                    <div class="bg-tyellow p-4 text-tgray">   
                        <span><strong>JCal gave me the encouragement I needed to believe I have a career in journalism.</strong> After participating in this camp, not only do I know more about the life of a journalist, but also I know the severity of the water issues in California ... This program lets students from all across California experience hands-on journalism in a safe, fun and inspiring way.</span>
                    </div>
                    <div class="border-[12px] w-0 border-l-tyellow border-t-tyellow border-r-transparent border-b-transparent"></div>
                    <div class="mt-4 text-sm text-white">
                        <span class="uppercase font-bold">Maia Isabella Alvarez</span><br/><span>Los Angeles County</span>
                    </div>
                </div>
                <div class="hidden md:block md:w-1/3 mb-8">
                    <div class="bg-white p-4 text-tgray">   
                        <span><strong>JCal has been a life-changing opportunity for me and my journalism career.</strong> At JCal, I built connections with incredibly compassionate and driven people from all backgrounds–whether student, mentor or newsroom leader. I learned and most importantly, I felt listened to.</span>
                    </div>
                    <div class="border-[12px] w-0 border-l-white border-t-white border-r-transparent border-b-transparent"></div>
                    <div class="mt-4 text-sm text-white">
                        <span class="uppercase font-bold">SARAH YEE</span><br/><span>Placer County</span>
                    </div>
                </div>
            </div>
            <div class="w-full pt-60 sm:pt-32 md:pt-72 abt-880:pt-48 lg:pt-0">
                <div class="w-full relative">
                    <div class="bg-gradient-to-b from-tblue to-transparent h-2/3 absolute top-0 left-0 w-full"></div>
                    <?php echo get_the_post_thumbnail( null, "full", array("class" => "w-full block aspect-square sm:aspect-auto object-cover")); ?>      
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-2xl mx-auto px-4 sm:-mt-24 -mt-20">
        <h1 class="uppercase font-black text-white text-4xl sm:text-6xl text-center leading-none relative">About JCal</h1>
        <div class="bg-tblue py-6 sm:py-12 px-4 sm:px-8 rounded-lg text-2xl sm:text-4xl text-center text-white mb-8 relative !leading-snug sm:-mt-[15px] -mt-[9px]">
            <span><?php the_excerpt(); ?></span>
        </div>
        <div class="content content-about">
            <?php the_content(); ?>
        </div>
    </div>
<?php
endwhile;
get_footer(); ?>
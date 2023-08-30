<?php get_header(); while (have_posts()) : the_post(); ?>
    <div class="max-w-4xl mx-auto px-4 relative">
        <h1 class="text-4xl sm:text-5xl text-tblue uppercase font-black pt-24">People</h1>
        <p class="text-xl sm:text-3xl text-tgray mt-8 !leading-snug"><?php echo get_the_excerpt(); ?></p>
        <?php echo get_the_post_thumbnail( null, "full", array("class" => "w-full block mt-8")); ?>
        <div class="flex">
            <p class="text-tgray text-right mt-8 ml-auto w-64"><?php echo get_the_post_thumbnail_caption() ?></p>
        </div>
        <div class="sm:ml-8 mt-6 sm:-mt-64 z-5 relative sm:w-[calc(100%-256px-32px-32px)]">
            <div class="bg-tblue p-4 text-white content">   
                <span><strong>I really enjoyed the networking event.</strong> It made me realize that they are not people we as youth should be intimidated by– professional journalists want to support other youth and they are open to telling their story. I appreciated their encouragement, guidance, and openness.</span>
            </div>
            <div class="border-[12px] w-0 border-l-tblue border-t-tblue border-r-transparent border-b-transparent"></div>
            <div class="mt-4 text-sm text-tgray">
                <span class="uppercase font-bold">Clarissa Wang</span><br/><span>Notre Dame High School Belmont</span>
            </div>
        </div>
    </div>
    <div class="max-w-3xl mx-auto px-4 pb-24">
        <?php the_content() ?>
    </div>
<?php endwhile; get_footer(); ?>
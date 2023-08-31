<?php get_header();?>
<div class="w-full bg-tdark text-white pb-32">
    <p class="text-center py-16 text-xl uppercase">
        <span class="font-light">2023 cohort</span>
        <br/>
        <span class="font-semibold text-tyellow">Water and drought</span>
    </p>
    <?php
        $i = 0;
        $end_post_index = $wp_query->post_count-1;
        if (have_posts()): while (have_posts()): the_post();
        if ($i == 0):
    ?>
        <a href="<?php the_permalink()?>">
            <?php echo get_the_post_thumbnail( null, "full", array("class" => "max-w-3xl w-full block mx-auto mb-16 aspect-[3/2] object-cover") )?>
            <div class="max-w-2xl mx-auto text-center px-4">
                <h2 class="text-4xl md:text-5xl !leading-[1.15] font-bold my-8"><?php the_title(); ?></h2>
                <p class="opacity-50 sm:text-xl my-8"><?php echo get_the_excerpt(); ?></p>
                <div class="flex items-center justify-center gap-8 my-8 whitespace-nowrap flex-wrap">
                    <span class="font-bold opacity-50 uppercase">
                        <?php
                        $authors = get_coauthors();
                        foreach($authors as $key=>$author) {
                            echo $author->get("display_name");
                            if ($key != (count($authors) - 1)) {echo ", ";}
                        }
                        ?>
                    </span>
                    <?php
                    // $published_url = get_post_meta(get_the_ID(), "published_url", true);
                    // $publication_name = get_post_meta(get_the_ID(), "publication_name", true);
                    $publication_logo = get_post_meta(get_the_ID(), "publication_logo", true);
                    if ($publication_logo):
                        $publication_logo_url = wp_get_attachment_url($publication_logo);
                    ?>
                        <div class="flex items-center">
                            <span class="text-sm mr-2 opacity-50">Published with</span>
                            <img src="<?php echo $publication_logo_url ?>" class="h-6 sm:h-8 inline-block" alt=""/>
                        </div>
                    <?php endif;?>
                </div>
            </div>
        </a>
    <?php endif; ?>
    <?php if ($i >= 1 & $i < 4): ?>
        <?php if ($i == 1): ?>
            <div class="lg:flex gap-8 max-w-6xl mx-auto px-4 mt-32">
        <?php endif; ?>
                <a href="<?php the_permalink()?>" class="flex gap-4 lg:block lg:w-1/3 mb-8">
                    <div class="w-24 sm:w-40 lg:w-full flex-shrink-0">
                        <?php echo get_the_post_thumbnail( null, "full", array("class" => "w-full block mb-6 aspect-[3/2] object-cover") )?>
                    </div>
                    <div class="">
                        <h2 class="font-bold text-2xl !leading-[1.15] mb-2 sm:mb-4 lg:mb-6"><?php the_title() ?></h2>
                        <p class="opacity-50 mb-4 lg:mb-6"><?php echo get_the_excerpt(); ?></p>
                        <div class="mb-4 lg:mb-6">
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
        <?php if ($i == 3 || ($i == $end_post_index)): ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>
    <?php if ($i >= 4 & $i <= 7): ?>
        <?php if ($i == 4): ?>
            <div class="max-w-6xl mx-auto px-4 md:px-0 mt-32" id="home-masonry-1">
        <?php endif; ?>
            <?php get_template_part("template_parts/four-post"); ?>
            <?php if ($i == 4 && $i != $end_post_index): ?>
                <!-- <div class="hidden md:block w-[calc(50%-32px)] h-16"></div> -->
            <?php endif; ?>
        <?php if ($i == 7 || $i == $end_post_index): ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>
    <?php if ($i > 7): ?>
        <?php if ($i == 8): ?>
            <div class="max-w-6xl mx-auto px-4 md:px-0 mt-32" id="home-masonry-2">
        <?php endif; ?>
        <?php get_template_part("template_parts/four-post"); ?>
        <?php if ($i == $end_post_index): ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>
    <?php if ($i == 3 || ((($i >= 1 & $i <= 3) || $end_post_index < 1) & $i == $end_post_index)): ?>
        <div class="max-w-6xl mx-auto px-4">
            <div class="bg-tyellow h-[6px] w-12 mt-32 mb-8"></div>
            <p class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl !leading-snug mb-12">
                <span class="font-black text-tyellow">JCal empowers California students to tell the stories of their communities</span><span class="opacity-50"> by immersing them in the state’s news ecosystem through an all-inclusive, free summer program.</span>
                <br/><br/>
                <span class="opacity-50">This year’s theme was </span><span class="font-bold">Water and Drought.</span>
            </p>
            <a href="<?php echo home_url("/about");?>" class="bg-tyellow px-3 sm:text-xl py-2 uppercase font-black text-tdark inline-block">More about JCal</a>
        </div>
    <?php endif; ?>
    <?php if ($i == 7 || ((($i >= 4 & $i <= 7) || $end_post_index < 4) & $i == $wp_query->post_count-1)): ?>
        <div class="max-w-6xl mx-auto px-4">
                <div class="bg-tred h-[6px] w-12 mt-32 mb-8"></div>
                <p class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl !leading-snug mb-12">
                    <span class="font-black text-tred">Veteran journalists from the Los Angeles Times, Bloomberg and CalMatters</span><span class="opacity-50"> edited stories and mentored JCal reporters at a one-week camp at CalMatters’ Sacramento newsroom.</span>
                </p>
                <a href="<?php echo home_url("/people");?>" class="bg-tred px-3 sm:text-xl py-2 uppercase font-black inline-block">Meet the People of JCal</a>
            </div>
    <?php endif; ?>
    <?php $i++; endwhile; endif; ?>
</div>
<script>
window.onload = () => {
    // https://github.com/e-oj/Magic-Grid
    !function(t,e){"object"==typeof exports&&"undefined"!=typeof module?module.exports=e():"function"==typeof define&&define.amd?define(e):t.MagicGrid=e()}(this,function(){"use strict";var t=function(t){if(!t)throw new Error("No config object has been provided.");"boolean"!=typeof t.useTransform&&(t.useTransform=!0),"number"!=typeof t.gutter&&(t.gutter=25),t.container||e("container"),t.items||t.static||e("items or static")},e=function(t){throw new Error("Missing property '"+t+"' in MagicGrid config")},i=function(t){var e=t[0];for(var i of t)i.height<e.height&&(e=i);return e},n=function(e){t(e),e.container instanceof HTMLElement?(this.container=e.container,this.containerClass=e.container.className):(this.containerClass=e.container,this.container=document.querySelector(e.container)),this.items=this.container.children,this.static=e.static||!1,this.size=e.items,this.gutter=e.gutter,this.maxColumns=e.maxColumns||!1,this.useMin=e.useMin||!1,this.useTransform=e.useTransform,this.animate=e.animate||!1,this.started=!1,this.init()};return n.prototype.init=function(){if(this.ready()&&!this.started){this.container.style.position="relative";for(var t=0;t<this.items.length;t++){var e=this.items[t].style;e.position="absolute",this.animate&&(e.transition=(this.useTransform?"transform":"top, left")+" 0.2s ease")}this.started=!0}},n.prototype.colWidth=function(){return this.items[0].getBoundingClientRect().width+this.gutter},n.prototype.setup=function(){var t=this.container.getBoundingClientRect().width,e=this.colWidth(),i=Math.floor(t/e)||1,n=[];this.maxColumns&&i>this.maxColumns&&(i=this.maxColumns);for(var s=0;s<i;s++)n[s]={height:0,index:s};return{cols:n,wSpace:t-i*e+this.gutter}},n.prototype.nextCol=function(t,e){return this.useMin?i(t):t[e%t.length]},n.prototype.positionItems=function(){var t=this.setup(),e=t.cols,i=t.wSpace,n=0,s=this.colWidth();i=Math.floor(i/2);for(var o=0;o<this.items.length;o++){var r=this.nextCol(e,o),a=this.items[o],h=r.height?this.gutter:0,c=r.index*s+i+"px",u=r.height+h+"px";this.useTransform?a.style.transform="translate("+c+", "+u+")":(a.style.top=u,a.style.left=c),r.height+=a.getBoundingClientRect().height+h,r.height>n&&(n=r.height)}this.container.style.height=n+"px"},n.prototype.ready=function(){return!!this.static||this.items.length>=this.size},n.prototype.getReady=function(){var t=this,e=setInterval(function(){t.container=document.querySelector(t.containerClass),t.items=t.container.children,t.ready()&&(clearInterval(e),t.init(),t.listen())},100)},n.prototype.listen=function(){var t=this;if(this.ready()){var e;window.addEventListener("resize",function(){e||(e=setTimeout(function(){t.positionItems(),e=null},200))}),this.positionItems()}else this.getReady()},n});

    const hm1 = document.getElementById("home-masonry-1");
    const hm2 = document.getElementById("home-masonry-2");

    if (hm1) {
        let mg1 = new MagicGrid({container: "#home-masonry-1", static: true, gutter: 32});
        mg1.listen();
    }
    
    if (hm2) {
        let mg2 = new MagicGrid({container: "#home-masonry-2", static: true, gutter: 32});
        mg2.listen();
    }
}
</script>
<?php get_footer();?>
window.onload = () => {
    // sidebar
    const sidebar = document.getElementById("sidebar");
    const sidebarOpen = document.getElementById("sidebar-open");
    const sidebarClose = document.getElementById("sidebar-close");
    sidebarOpen.onclick = () => sidebar.classList.remove("-mr-64");
    sidebarClose.onclick = () => sidebar.classList.add("-mr-64");

    // profiles
    const allProfiles = document.querySelectorAll(".jcal-profile-block-bio-selector");

    allProfiles.forEach(jCalProfile => {
        const expandButton = jCalProfile.querySelector(".bio-expand-toggle-button");
        const bioEl = jCalProfile.querySelector(".jcal-profile-block-bio");

        expandButton.onclick = () => {
            bioEl.classList.toggle("line-clamp-4");
            if (expandButton.textContent === "Full bio") expandButton.textContent = "Hide bio";
            else expandButton.textContent = "Full bio";
        }
    });

    // masonry
    // https://github.com/e-oj/Magic-Grid
    !function(t,e){"object"==typeof exports&&"undefined"!=typeof module?module.exports=e():"function"==typeof define&&define.amd?define(e):t.MagicGrid=e()}(this,function(){"use strict";var t=function(t){if(!t)throw new Error("No config object has been provided.");"boolean"!=typeof t.useTransform&&(t.useTransform=!0),"number"!=typeof t.gutter&&(t.gutter=25),t.container||e("container"),t.items||t.static||e("items or static")},e=function(t){throw new Error("Missing property '"+t+"' in MagicGrid config")},i=function(t){var e=t[0];for(var i of t)i.height<e.height&&(e=i);return e},n=function(e){t(e),e.container instanceof HTMLElement?(this.container=e.container,this.containerClass=e.container.className):(this.containerClass=e.container,this.container=document.querySelector(e.container)),this.items=this.container.children,this.static=e.static||!1,this.size=e.items,this.gutter=e.gutter,this.maxColumns=e.maxColumns||!1,this.useMin=e.useMin||!1,this.useTransform=e.useTransform,this.animate=e.animate||!1,this.started=!1,this.init()};return n.prototype.init=function(){if(this.ready()&&!this.started){this.container.style.position="relative";for(var t=0;t<this.items.length;t++){var e=this.items[t].style;e.position="absolute",this.animate&&(e.transition=(this.useTransform?"transform":"top, left")+" 0.2s ease")}this.started=!0}},n.prototype.colWidth=function(){return this.items[0].getBoundingClientRect().width+this.gutter},n.prototype.setup=function(){var t=this.container.getBoundingClientRect().width,e=this.colWidth(),i=Math.floor(t/e)||1,n=[];this.maxColumns&&i>this.maxColumns&&(i=this.maxColumns);for(var s=0;s<i;s++)n[s]={height:0,index:s};return{cols:n,wSpace:t-i*e+this.gutter}},n.prototype.nextCol=function(t,e){return this.useMin?i(t):t[e%t.length]},n.prototype.positionItems=function(){var t=this.setup(),e=t.cols,i=t.wSpace,n=0,s=this.colWidth();i=Math.floor(i/2);for(var o=0;o<this.items.length;o++){var r=this.nextCol(e,o),a=this.items[o],h=r.height?this.gutter:0,c=r.index*s+i+"px",u=r.height+h+"px";this.useTransform?a.style.transform="translate("+c+", "+u+")":(a.style.top=u,a.style.left=c),r.height+=a.getBoundingClientRect().height+h,r.height>n&&(n=r.height)}this.container.style.height=n+"px"},n.prototype.ready=function(){return!!this.static||this.items.length>=this.size},n.prototype.getReady=function(){var t=this,e=setInterval(function(){t.container=document.querySelector(t.containerClass),t.items=t.container.children,t.ready()&&(clearInterval(e),t.init(),t.listen())},100)},n.prototype.listen=function(){var t=this;if(this.ready()){var e;window.addEventListener("resize",function(){e||(e=setTimeout(function(){t.positionItems(),e=null},200))}),this.positionItems()}else this.getReady()},n});

    const hm1 = document.getElementById("home-masonry-1");
    const hm2 = document.getElementById("home-masonry-2");
    const cm = document.getElementById("category-masonry");

    if (hm1) {
        let mg1 = new MagicGrid({container: "#home-masonry-1", static: true, gutter: 32});
        mg1.listen();
    }
    
    if (hm2) {
        let mg2 = new MagicGrid({container: "#home-masonry-2", static: true, gutter: 32});
        mg2.listen();
    }
    
    if (cm) {
        let mg3 = new MagicGrid({container: "#category-masonry", static: true, gutter: 32});
        mg3.listen();
    }
}
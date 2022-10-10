jQuery(document).ready(function(){if($('.cd-stretchy-nav').length>0){var stretchyNavs=$('.cd-stretchy-nav');stretchyNavs.each(function(){var stretchyNav=$(this),stretchyNavTrigger=stretchyNav.find('.cd-nav-trigger');stretchyNavTrigger.on('click',function(event){event.preventDefault();stretchyNav.toggleClass('nav-is-visible');});});$(document).on('click',function(event){(!$(event.target).is('.cd-nav-trigger')&&!$(event.target).is('.cd-nav-trigger span'))&&stretchyNavs.removeClass('nav-is-visible');});}});
//main nav
var mobileNav = $('.js-main-nav');
if( mobileNav.length > 0 ) {
    var nav = mobileNav.find('.js-nav'),
        navTrigger = mobileNav.find('.js-trigger'),
        mainHeader = $('.js-main-header');

    navTrigger.on('click', function(event){
        event.preventDefault();
        nav.toggleClass('is-visible');
        mainHeader.toggleClass('main-header--nav-visible');
    });
}
function clampBuilder(minWidthPx, maxWidthPx, minFontSize, maxFontSize) {
    const root = document.querySelector("html");
    const pixelsPerRem = Number(getComputedStyle(root).fontSize.slice(0, -2));

    const minWidth = minWidthPx / pixelsPerRem;
    const maxWidth = maxWidthPx / pixelsPerRem;

    const slope = (maxFontSize - minFontSize) / (maxWidth - minWidth);
    const yAxisIntersection = -minWidth * slope + minFontSize;

    return `clamp(${minFontSize}rem, ${yAxisIntersection}rem + ${
        slope * 100
    }vw, ${maxFontSize}rem)`;
}
function calculateCh(element, fontSize) {
    const zero = document.createElement("span");
    zero.innerText = "0";
    zero.style.position = "absolute";
    zero.style.fontSize = fontSize;

    element.appendChild(zero);
    const chPixels = zero.getBoundingClientRect().width;
    element.removeChild(zero);

    return chPixels;
}
document.querySelectorAll("h1").forEach((p) => {
    p.style.fontSize = clampBuilder(320, 960, 2, 5);
    /**p.style.width = `${(320 / calculateCh(p, "2rem")) * 0.9}ch`;**/
});
document.querySelectorAll("h2").forEach((p) => {
    p.style.fontSize = clampBuilder(320, 960, 1, 3);
    /**p.style.width = `${(320 / calculateCh(p, "2rem")) * 0.9}ch`;**/
});
document.querySelectorAll(".p").forEach((p) => {
    p.style.fontSize = clampBuilder(320, 960, 1, 3);
    /**p.style.width = `${(320 / calculateCh(p, "1rem")) * 0.9}ch`;**/
});
document.querySelectorAll(".lead").forEach((p) => {
    p.style.fontSize = clampBuilder(320, 960, 1, 3.2);
    /**p.style.width = `${(320 / calculateCh(p, "1rem")) * 0.9}ch`;**/
});
document.querySelectorAll("small").forEach((p) => {
    p.style.fontSize = clampBuilder(320, 960, 1, 1);
    /**p.style.width = `${(320 / calculateCh(p, "2rem")) * 0.9}ch`;**/
});

function onScroll(event){
    var scrollPos = $(document).scrollTop();
    $('ul.sidenav li a').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));;

        console.log(refElement);

        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('ul.sidenav li').removeClass("active");
            currLink.addClass("active");
        }
        else{
            currLink.removeClass("active");
        }
    });
}

function writeAnchor(name){
    document.write('#'+name);
}
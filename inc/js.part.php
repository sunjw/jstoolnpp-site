<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
//<![CDATA[
function getScrollTop() {
    return (window.pageYOffset ||
        document.body.scrollTop ||
        document.documentElement.scrollTop);
}

function smoothScrollTo(topWhere) {
    $("html, body").animate({
        scrollTop: topWhere
    }, 333);
}

var headerLogo = 0;

function onPageScroll() {
    var scrollTopPos = getScrollTop();

    if (scrollTopPos < 48) {
        headerLogo.removeClass("logoShow");
    } else {
        headerLogo.addClass("logoShow");
    }
}

$(function () {
    headerLogo = $("#navWrapper #navLeft #logo");

    $("#navWrapper a").click(function () {
        var anchorName = $.attr(this, "href").substr(1);
        if (anchorName == "top") {
            smoothScrollTo(0);
        } else {
            var scrollToAnchor = $("[name=\"" + anchorName + "\"]").offset().top;
            scrollToAnchor -= 64;
            smoothScrollTo(scrollToAnchor);
        }
        return false;
    });

    var jqWindow = $(window);
    jqWindow.scroll(function () {
        onPageScroll();
    });
    jqWindow.resize(function () {
        onPageScroll();
    });
    onPageScroll();
});

/*
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-5927560-3']);
_gaq.push(['_trackPageview']);

(function () {
var ga = document.createElement('script');
ga.type = 'text/javascript';
ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(ga, s);
})();
 */

//]]>
</script>

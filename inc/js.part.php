<script type="text/javascript" src="../js/jquery-1.4.4.min.js"></script>
<script type="text/javascript">
//<![CDATA[
function getScrollTop() {
    return (window.pageYOffset ||
        document.body.scrollTop ||
        document.documentElement.scrollTop);
}

var pageWrapper = 0;
var navWrapper = 0;

function onPageScroll() {
    var nonFixedNavHeight = 60;
    var fixedNavHeight = nonFixedNavHeight - 20;
    var scrollTopPos = getScrollTop();

    if (scrollTopPos < 10) {
        pageWrapper.removeClass("fixedHeader");
        navWrapper.css("height", "");
    } else {
        pageWrapper.addClass("fixedHeader");
        var fixHeight = nonFixedNavHeight - scrollTopPos;
        if (fixHeight >= fixedNavHeight) {
            navWrapper.css("height", fixHeight + "px");
        } else {
            navWrapper.css("height", "");
        }
    }
}

$(function () {
    pageWrapper = $(".pageWrapper");
    navWrapper = $("#divHeader #navWrapper");

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

<script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="js/jquery.folding.min.js"></script>
<script type="text/javascript" src="js/jquery.lightbox-0.5.plus.js"></script>
<script type="text/javascript">
//<![CDATA[
function getScrollTop() {
    return (window.pageYOffset ||
        document.body.scrollTop ||
        document.documentElement.scrollTop);
}

var pageWrapper = 0;
var navItem = 0;
var navItemArchor = 0;

function onPageScroll() {
    var scrollTopPos = getScrollTop();

    if (scrollTopPos < 20) {
        var fixHeight = 60 - scrollTopPos;
        navItem.css("height", fixHeight + "px");
    } else {
        navItem.css("height", "40px");
    }
    if (scrollTopPos < 10) {
        var fixMarginTop = 20 - scrollTopPos;
        navItemArchor.css("margin-top", fixMarginTop + "px");
    } else {
        navItemArchor.css("margin-top", "10px");
    }
}

$(function () {
    $('a.lightBox').lightBox({
        autoAdapt: true
    });

    jqFolding.setup({
        listSelector: ".foldingList",
        triggerSelector: ".listHeader",
        containerSelector: ".foldingContainer"
    });
    jqFolding.init();

    pageWrapper = $(".pageWrapper");
    navItem = $("#nav li.menu");
    navItemArchor = $("#nav li.menu a");

    var jqWindow = $(window);
    jqWindow.scroll(function () {
        onPageScroll();
    });
    jqWindow.resize(function () {
        onPageScroll();
    });
    onPageScroll();
});

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

window.___gcfg = {
    lang: 'zh-CN'
};

(function () {
    var po = document.createElement('script');
    po.type = 'text/javascript';
    po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(po, s);
})();
//]]>
</script>
	
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

function onPageScroll() {
    var scrollTopPos = getScrollTop();

    var pageWrapper = $(".pageWrapper");
    var navItem = $("#nav li.menu a");

    if (scrollTopPos < 20) {
        pageWrapper.removeClass("fixedHeader");
    } else {
        pageWrapper.addClass("fixedHeader");
    }
    if (scrollTopPos < 10 || scrollTopPos >= 20) {
        navItem.css("margin-top", "");
    } else {
        var fixMarginTop = 20 + scrollTopPos - 10;
        navItem.css("margin-top", fixMarginTop + "px");
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

    window.onscroll = function () {
        onPageScroll();
    }
    window.onresize = function () {
        onPageScroll();
    }
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
	
<script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="js/jquery.folding.min.js"></script>
<script type="text/javascript" src="js/jquery.menu.min.js"></script>
<script type="text/javascript" src="js/jquery.lightbox-0.5.plus.js"></script>
<script type="text/javascript">
//<![CDATA[
	$(function() {
			$('a.lightBox').lightBox({
				autoAdapt: true
			});
			
			jqFolding.setup({
				listSelector : ".foldingList",
				triggerSelector : ".listHeader",
				containerSelector : ".foldingContainer"
			});
			jqFolding.init();

			jqMenu.setup({
				menuItemsSelector : ".menu",
				menuButtonSelector : ".subToggle",
				subMenuSelector : ".submenu",
				inlineShadow : "transparent",
				hoverOpen : true
			});
			$(jqMenu.init);
	});
	
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-5927560-3']);
	_gaq.push(['_trackPageview']);

	(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
//]]>
</script>
	
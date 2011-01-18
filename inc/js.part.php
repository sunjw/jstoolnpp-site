<script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="js/jquery.folding.min.js"></script>
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
	});
//]]>
</script>
	
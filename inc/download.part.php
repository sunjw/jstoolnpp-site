<?php
$download_array = parse_ini_file("version.ini", true);
?>
<div class="floatLeft splitRight">
	<div class="label">
		Download:
	</div>
	<div class="floatLeft">
		<div class="item floatLeft margin center">
			<a class="dlJSMinNpp dlLink" href="<?php echo $download_array["JSMinNpp"]["url"]; ?>" target="_blank">
				<span class="dlName"><?php echo $download_array["JSMinNpp"]["name"]; ?></span>
				<span class="dlInfo"><?php echo $download_array["JSMinNpp"]["version"]; ?></span>
			</a>
			<a class="dlOthers" href="changelog.php">Changelog</a>&nbsp;-&nbsp;<a class="dlOthers" href="download.php#beta">Beta version</a>&nbsp;-&nbsp;<a class="dlOthers" href="download.php">Other files</a>
		</div>
		<div class="item floatLeft margin center">
			<a class="dlNpp dlLink" href="<?php echo $download_array["NPP"]["url"]; ?>" target="_blank">
				<span class="dlName"><?php echo $download_array["NPP"]["name"]; ?></span>
				<span class="dlInfo"><?php echo $download_array["NPP"]["version"]; ?></span>
			</a>
		</div>
	</div>
	<div class="clear"></div>
</div>
<div class="floatRight">
	<div class="label">
		Donate:
	</div>
	<div>
		<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&amp;business=sunjw8888%40yahoo%2ecom%2ecn&amp;item_name=JSMinNpp%20Project&amp;no_shipping=1&amp;cn=Optional%20comments&amp;tax=0&amp;currency_code=USD&amp;lc=US&amp;amount=1.8&amp;bn=PP%2dDonationsBF&amp;charset=UTF%2d8" target="_blank"><img title="PayPal Donate" src="imgs/paypal-donate.png" alt="PayPal Donate" width="72" height="29" /></a>
	</div>
	<div class="label">
		Host:
	</div>
	<div>
		<a href="http://sourceforge.net/projects/jsminnpp"><img src="http://sflogo.sourceforge.net/sflogo.php?group_id=351223&amp;type=14" width="150" height="40" alt="Get JSMinNpp at SourceForge.net. Fast, secure and Free Open Source software downloads" /></a>
	</div>
</div>
<div class="clear"></div>
<?php
$download_array = parse_ini_file("version.ini", true);
?>
<div class="floatLeft splitRight">
	<div id="divLabel">
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
	<div id="divLabel">
		Donate:
	</div>
	<div>
		<a href="http://sourceforge.net/donate/index.php?group_id=351223"><img src="http://images.sourceforge.net/images/project-support.jpg" width="88" height="32" border="0" alt="Support This Project" /> </a>
	</div>
	<div id="divLabel">
		Host:
	</div>
	<div>
		<a href="http://sourceforge.net/projects/jsminnpp"><img src="http://sflogo.sourceforge.net/sflogo.php?group_id=351223&amp;type=14" width="150" height="40" alt="Get JSMinNpp at SourceForge.net. Fast, secure and Free Open Source software downloads" /></a>
	</div>
</div>
<div class="clear"></div>
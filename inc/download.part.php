<?php
$download_array = parse_ini_file("version.ini", true);
?>
<div class="floatLeft">
    <div class="label">
        Download:
    </div>
    <div class="floatLeft">
        <div class="item floatLeft margin center">
            <a class="dlJSMinNpp dlLink" href="<?php echo $download_array["JSMinNpp"]["url"]; ?>">
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
<div class="clear"></div>
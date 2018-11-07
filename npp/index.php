<?php
include_once "../inc/common.inc.php";

$current_app = "npp";

$checking = false;
$is_lastest = false;

$download_array = parse_ini_file("../inc/version.ini", true);
$cur_version = $download_array["JSMinNpp"]["version"];

$ver = get_query("ver");
if ($ver != "")
    $checking = true;

if ($checking) {
    $ver_array = explode(".", $ver);
    $major_ver = $ver_array[0];
    $minor_ver = $ver_array[1];
    $maintenance_ver = $ver_array[2];
    $build_ver = $ver_array[3];

    $cur_ver_array = explode(".", $cur_version);
    $cur_major_ver = $cur_ver_array[0];
    $cur_minor_ver = $cur_ver_array[1];
    $cur_maintenance_ver = $cur_ver_array[2];
    $cur_build_ver = 0;
    if (count($cur_ver_array) > 3) {
        $cur_build_ver = $cur_ver_array[3];
    }

    if ($major_ver < $cur_major_ver)
        $is_lastest = false;
    else if ($major_ver > $cur_major_ver)
        $is_lastest = true;
    else if ($minor_ver < $cur_minor_ver)
        $is_lastest = false;
    else if ($minor_ver > $cur_minor_ver)
        $is_lastest = true;
    else if (!is_numeric($cur_maintenance_ver))
        $is_lastest = true;
    else if ($maintenance_ver < $cur_maintenance_ver)
        $is_lastest = false;
    else if ($maintenance_ver > $cur_maintenance_ver)
        $is_lastest = true;
    else if (!is_numeric($cur_build_ver))
        $is_lastest = true;
    else if ($build_ver < $cur_build_ver)
        $is_lastest = false;
    else if ($build_ver > $cur_build_ver)
        $is_lastest = true;
    else if ($build_ver == $cur_build_ver)
        $is_lastest = true;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>JSToolNpp - A JavaScript plugin for notepad++</title>
    <?php include "../inc/head.part.php" ?>
</head>
<body>
    <div id="divMainContent" class="<?php echo $current_app; ?>">
        <?php include "../inc/nav.part.php" ?>
        <div class="pageWrapper">
            <div class="divListwHeader">
                <div class="listHeader">
                    <div class="listHeaderTitle"><a name="intro" title="Intro"></a>Intro</div>
                </div>
                <div class="listContainer">
                    <p>A JavaScript plugin for <a href="http://notepad-plus-plus.org/" target="_blank">Notepad++</a>.</p>
                    <ul class="indentList discList">
                        <li><a href="http://www.crockford.com/Javascript/jsmin.html" target="_blank">Douglas Crockford's JSMin</a>  algorithm to minimize JavaScript code.</li>
                        <li>My own algorithm to format JavaScript code.</li>
                        <li>A JSON data viewer. This JSON data viewer can handle >10MB JSON file easily.</li>
                        <li>Support 64bit Notepad++ (from version 1.20.0, ".64.zip" package).</li>
                    </ul>
                    <p>Really helpful to JavaScript coder on Notepad++ and really easy to use it.</p>
                    <p>&nbsp;</p>
                    <p>Made in China.</p>
                    <p>License: <a href="http://www.gnu.org/licenses/gpl-2.0.html" target="_blank">GPL 2.0</a></p>
                    <p>&nbsp;</p>
                    <p>Features:</p>
                    <ul class="indentList discList">
                        <li>JavaScript minify.</li>
                        <li>JavaScript/JSON format.</li>
                        <li>Sort JSON data alphabetically.</li>
                        <li>
                            JSON viwer with:
                            <ul class="indentList circleList">
                                <li>Search</li>
                                <li>Node expand/collapse</li>
                                <li>Node data copy</li>
                            </ul>
                        </li>
                        <li>JSON sort.</li>
                    </ul>
                    <p>&nbsp;</p>
                    <p>What's New in <a class="smoothAnchor" href="#download">1.1810.3</a>:</p>
                    <ul class="indentList discList">
                        <li>Fix "export default" format.</li>
                        <li>Fix '/' in [] within regular expression format.</li>
                        <li>Not to format Unix Shebang at begining of a script.</li>
                        <li>Fix json parser remove escaped ' or " at the end of string.</li>
                        <li>Change version naming to MAJOR.YEAR-MONTH.BUILD.</li>
                    </ul>
                </div>
            </div>
            <div class="divListwHeader">
                <div class="listHeader">
                    <div class="listHeaderTitle"><a name="download" title="Download"></a>Download</div>
<?php
if ($checking) {
    if ($is_lastest)
        echo "<div id=\"checkMsg\" class=\"latest\">🎉 Congratulations! You are using the latest version.</div>";
    else
        echo "<div id=\"checkMsg\" class=\"notLatest\">❌ You are <strong>NOT</strong> using the latest version.</div>";
}
?>
                </div>
                <div class="listContainer">
                    <p>The latest release build:</p>
                    <ul class="indentList discList">
                        <li>
                            <div>
                            <p>Unicode build:</p>
                            <p>32bit - JSToolNPP.<?php echo $cur_version; ?>.uni.32.zip:&nbsp;<a href="https://sourceforge.net/projects/jsminnpp/files/Uni/JSToolNPP.<?php echo $cur_version; ?>.uni.32.zip/download" target="_blank">Download from SourceForget.net</a></p>
                            <p>64bit - JSToolNPP.<?php echo $cur_version; ?>.uni.64.zip:&nbsp;<a href="https://sourceforge.net/projects/jsminnpp/files/Uni/JSToolNPP.<?php echo $cur_version; ?>.uni.64.zip/download" target="_blank">Download from SourceForget.net</a></p>
                            </div>
                        </li>
                        <li>
                            <div>
                            <p>ASCII build (<em>no more updates after 1.20.2</em>):</p>
                            <p>32bit - JSToolNPP.1.20.2.asc.32.zip:&nbsp;<a href="https://sourceforge.net/projects/jsminnpp/files/Asc/JSToolNPP.1.20.2.asc.32.zip/download" target="_blank">Download from SourceForget.net</a></p>
                            <p>64bit - JSToolNPP.1.20.2.asc.64.zip:&nbsp;<a href="https://sourceforge.net/projects/jsminnpp/files/Asc/JSToolNPP.1.20.2.asc.64.zip/download" target="_blank">Download from SourceForget.net</a></p>
                            </div>
                        </li>
                    </ul>
                    <p>&nbsp;</p>
                    <p>Other files:</p>
                    <ul class="indentList discList">
                        <li>
                        README: <a href="https://github.com/sunjw/jstoolnpp/blob/master/README.md" target="_blank">https://github.com/sunjw/jstoolnpp/blob/master/README.md</a>
                        </li>
                        <li>
                        Change log: <a href="https://github.com/sunjw/jstoolnpp/blob/master/CHANGELOG.md" target="_blank">https://github.com/sunjw/jstoolnpp/blob/master/CHANGELOG.md</a>
                        </li>
                        <li>
                        Source code: <a href="https://github.com/sunjw/jstoolnpp" target="_blank">https://github.com/sunjw/jstoolnpp</a>
                        </li>
                        <li>
                        All files: <a href="https://sourceforge.net/projects/jsminnpp/files/" target="_blank">https://sourceforge.net/projects/jsminnpp/files/</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="divListwHeader">
                <div class="listHeader">
                    <div class="listHeaderTitle"><a name="help" title="Help"></a>Help</div>
                </div>
                <div class="listContainer">
                    <p>You can install JSToolNpp through Plugin Manager in Notepad++:</p>
                    <ul class="indentList">
                        <li>1. Run Notepad++.</li>
                        <li>2. Open menu: "Plugins" - "Plugin Manager" - "Show Plugin Manager".</li>
                        <li>3. Under "Available" tab, select "JSTool".</li>
                        <li>4. Click "Install" button. Then Plugin Manager will do downloading and installing automatically.</li>
                    </ul>
                    <p>Or you can <a href="download.php">download JSToolNpp</a> and install it manually. <a href="help.php#Install_manually">See Help...</a></p>
                </div>
            </div>
            <div id="divFooter" class="center">
                <?php include "../inc/footer.part.php" ?>
            </div>
        </div>
    </div>
    <?php include "../inc/js.part.php" ?>
</body>
</html>

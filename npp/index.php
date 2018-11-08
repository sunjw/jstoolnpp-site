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
    $minor_ver = 0;
    if (count($ver_array) > 1) {
        $minor_ver = $ver_array[1];
    }
    $maintenance_ver = 0;
    if (count($ver_array) > 2) {
        $maintenance_ver = $ver_array[2];
    }
    $build_ver = 0;
    if (count($ver_array) > 3) {
        $build_ver = $ver_array[3];
    }

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
    <title>JSToolNpp - A JavaScript tool for Notepad++</title>
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
                    <p>A JavaScript tool for <a href="http://notepad-plus-plus.org/" target="_blank">Notepad++</a>.</p>
                    <ul class="indentList discList">
                        <li><a href="http://www.crockford.com/Javascript/jsmin.html" target="_blank">Douglas Crockford's JSMin</a>  algorithm to minimize JavaScript code.</li>
                        <li>My own algorithm to format JavaScript code.</li>
                        <li>A JSON data viewer. This JSON data viewer can handle >10MB JSON file easily.</li>
                        <li>Support 64bit Notepad++ (from version 1.20.0, ".64.zip" package).</li>
                    </ul>
                    <p>Really helpful to JavaScript coder on Notepad++ and really easy to <a class="smoothAnchor" href="#help">use</a> it.</p>
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
                    <ul class="indentList discList">
                        <li>
                            <div>
                                <p>Install through Plugin Manager</p>
                                <ol class="indentList">
                                    <li>Run Notepad++.</li>
                                    <li>Open menu: "Plugins" - "Plugin Manager" - "Show Plugin Manager". If you can't find "Plugin Manager" in your Notepad++ menu, please go to <a href="https://github.com/bruderstein/nppPluginManager" target="_blank">Notepad++ Plugin Manager</a>, download and install "Plugin Manager" manually.</li>
                                    <li>Under "Available" tab, select "JSTool".</li>
                                    <li>Click "Install" button. Then Plugin Manager will do downloading and installing automatically.</li>
                                </ol>
                            </div>
                        </li>
                    </ul>
                    <p>&nbsp;</p>
                    <ul class="indentList discList">
                        <li>
                            <div>
                                <p>Install manually</p>
                                <ol class="indentList">
                                    <li><a class="smoothAnchor" href="#download">Download JSToolNpp</a>.</li>
                                    <li>Extract JSMinNpp.dll from JSToolNpp.x.y.z.uni.zip (or JSToolNpp.x.y.z.asc.zip) you just downloaded.</li>
                                    <li>Copy JSMinNpp.dll to plugins directory under your Notepad++ installation path, like "C:\Program Files (x86)\Notepad++\plugins\".</li>
                                    <li>Run Notepad++, you will see JSTool in "Plugins" menu.</li>
                                </ol>
                            </div>
                        </li>
                    </ul>
                    <p>&nbsp;</p>
                    <ul class="indentList discList">
                        <li>
                            <div>
                                <p>Uninstall JSToolNpp</p>
                                <p>Uninstall through Plugin Manager:</p>
                                <ol class="indentList">
                                    <li>Run Notepad++.</li>
                                    <li>Open menu: "Plugins" - "Plugin Manager" - "Show Plugin Manager".</li>
                                    <li>Under "Installed" tab, select "JSTool".</li>
                                    <li>Click "Remove" button. Then Plugin Manager will do uninstalling automatically.</li>
                                </ol>
                                <p>&nbsp;</p>
                                <p>Or you can uninstall manually:</p>
                                <ol class="indentList">
                                    <li>Exit any running Notepad++.</li>
                                    <li>Go to plugins directory under your Notepad++ installation path, like "C:\Program Files (x86)\Notepad++\plugins\".</li>
                                    <li>Delete JSMinNpp.dll.</li>
                                </ol>
                            </div>
                        </li>
                    </ul>
                    <p>&nbsp;</p>
                    <ul class="indentList discList">
                        <li>
                            <div>
                                <p>How to use JSToolNpp</p>
                                <p>Minimize source code:</p>
                                <ol class="indentList">
                                    <li>Open you JavaScript source code file in Notepad++.</li>
                                    <li>Open menu: "Plugins" - "JSTool".</li>
                                    <li>If you want to put minimized source code in current file, click "JSMin". Or if you want to put minimized source code in a new file, click "JSMin (New file)".</li>
                                </ol>
                                <p>&nbsp;</p>
                                <p>Format all code in a source code file:</p>
                                <ol class="indentList">
                                    <li>Open you JavaScript source code file in Notepad++.</li>
                                    <li>Press "Ctrl"+"Alt"+"M".</li>
                                    <li>Or open menu: "Plugins" - "JSTool" then click "JSFormat".</li>
                                </ol>
                                <p>&nbsp;</p>
                                <p>Format selected code in a source code file:</p>
                                <ol class="indentList">
                                    <li>Open you JavaScript source code file in Notepad++.</li>
                                    <li>Select source code lines which you want to format.</li>
                                    <li>Press "Ctrl"+"Alt"+"M".</li>
                                    <li>Or open menu: "Plugins" - "JSTool" then click "JSFormat".</li>
                                </ol>
                                <p>&nbsp;</p>
                                <p>JSON Viewer:</p>
                                <ol class="indentList">
                                    <li>Open you JavaScript or JSON source code file in Notepad++.</li>
                                    <li>Press "Ctrl"+"Alt"+"J".</li>
                                    <li>Or open menu: "Plugins" - "JSTool" then click "JSON Viewer".</li>
                                    <li>Or click <img src="../imgs/icon_toolbar.png"/> on toolbar.</li>
                                </ol>
                                <p>&nbsp;</p>
                                <p>JSON Sort:</p>
                                <ol class="indentList">
                                    <li>Open you JSON source code file in Notepad++.</li>
                                    <li>Open menu: "Plugins" - "JSTool".</li>
                                    <li>If you want to put sorted JSON source code in current file, click "JSON Sort". Or if you want to put sorted JSON source code in a new file, click "JSON Sort (New file)".</li>
                                </ol>
                            </div>
                        </li>
                    </ul>
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

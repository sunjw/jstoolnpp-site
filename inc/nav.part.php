<!--<div id="icon">
    <a href="index.php"><img src="../imgs/icon_048.png" alt="icon"/></a>
</div>-->
<div id="headerTitle">
    <div class="headerContent">
        <div id="title">JSTool - A JavaScript tool for <a href="../npp/">Notepad++</a> and <a href="../vsc/">Visual Studio Code</a></div>
    </div>
</div>
<div id="navWrapper">
    <div class="headerContent">
        <div id="navLeft">
            <a href="#top">
                <img id="logo" src="../imgs/icon_048.png"/>
            </a>
        </div>
        <ul id="navRight">
<?php
if ($current_app == "npp") {
?>
            <li>
                <a href="../vsc/">Switch to JSTool for Visual Studio Code</a>
            </li>
<?php
} else if ($current_app == "vsc") {
?>
            <li>
                <a href="../npp/">Switch to JSTool for Notepad++</a>
            </li>
<?php
}
?>
            <li>
                <a href="#download">Download</a>
            </li>
            <li>
                <a href="#help">Help</a>
            </li>
            <li>
                <a href="#overview">Overview</a>
            </li>
        </ul>
        <div class="clear"></div>
    </div>
</div>

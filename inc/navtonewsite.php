<?php
include_once "common.inc.php";

$new_site_location = "Location: ../jstool/";
$redirect_src_here = "jstoolnpp";

$request_path = $_SERVER["PHP_SELF"];
$request_file = basename($request_path);
$ver = get_query("ver");
if ($request_file == "download.php" && $ver != "") {
    $new_site_location = $new_site_location."npp/?redirect_src=".$redirect_src_here."&ver=".$ver;
} else {
    $redirect_src = get_query("redirect_src");
    if ($redirect_src == "") {
        $redirect_src = $redirect_src_here;
    }
    $new_site_location = $new_site_location."?redirect_src=".$redirect_src;
}

header($new_site_location);
exit();

?>

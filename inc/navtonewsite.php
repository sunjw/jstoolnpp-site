<?php
include_once "common.inc.php";

function endsWith($haystack, $needle)
{
    $length = strlen($needle);
    if ($length == 0) {
        return true;
    }

    return (substr($haystack, -$length) === $needle);
}

$new_site_location = "Location: http://www.sunjw.us/jstool/";
$redirect_src_here = "sf.net";

$request_path = $_SERVER["PHP_SELF"];
$request_file = basename($request_path);
$ver = get_query("ver");
if ($request_file == "download.php" && $ver != "") {
    $new_site_location = $new_site_location."npp/?redirect_src=".$redirect_src_here."&ver=".$ver;
} else {
    $redirect_src = get_query("redirect_src");
    if ($redirect_src == "") {
        $redirect_src = $redirect_src_here;
    } else {
        if (endsWith($redirect_src, "/")) {
            $redirect_src = rtrim($redirect_src, "/");
        }
    }
    $new_site_location = $new_site_location."?redirect_src=".$redirect_src;
}

header($new_site_location);
exit();

?>

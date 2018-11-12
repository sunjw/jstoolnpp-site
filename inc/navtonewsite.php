<?php
include_once "common.inc.php";

$new_site_location = "Location: ../jstool/";

$request_path = $_SERVER["PHP_SELF"];
$request_file = basename($request_path);
if ($request_file == "download.php") {
    $ver = get_query("ver");
    if ($ver != "") {
        $new_site_location = $new_site_location."npp/?ver=".$ver;
    }
}

header($new_site_location);
exit();

?>

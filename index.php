<?php
$to_page = "vsc";
header("Location: ".$to_page."/?".$_SERVER['QUERY_STRING']);
exit();
?>
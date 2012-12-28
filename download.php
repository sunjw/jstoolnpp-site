<?php 
include_once "inc/common.inc.php";

$checking = false;

$ver = get_query("ver");
if($ver != "")
	$checking = true;

$ver_array = explode(".", $ver);
$major_ver = $ver_array[0];
$minor_ver = $ver_array[1];
$maintenance_ver = $ver_array[2];
$build_ver = $ver_array[3];

$download_array = parse_ini_file("inc/version.ini", true);
$cur_version = $download_array["JSMinNpp"]["version"];
$cur_ver_array = explode(".", $cur_version);
$cur_major_ver = $cur_ver_array[0];
$cur_minor_ver = $cur_ver_array[1];
$cur_maintenance_ver = $cur_ver_array[2];
$cur_build_ver = $cur_ver_array[3];

$is_lastest = false;
if($major_ver < $cur_major_ver)
	$is_lastest = false;
else if($major_ver > $cur_major_ver)
	$is_lastest = true;
else if($minor_ver < $cur_minor_ver)
	$is_lastest = false;
else if($minor_ver > $cur_minor_ver)
	$is_lastest = true;
else if(!is_numeric($cur_maintenance_ver))
	$is_lastest = true;
else if($maintenance_ver < $cur_maintenance_ver)
	$is_lastest = false;
else if($maintenance_ver > $cur_maintenance_ver)
	$is_lastest = true;
else if(!is_numeric($cur_build_ver))
	$is_lastest = true;
else if($build_ver < $cur_build_ver)
	$is_lastest = false;
else if($build_ver > $cur_build_ver)
	$is_lastest = true;
else if($build_ver = $cur_build_ver)
	$is_lastest = true;
	

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>JSMinNpp - A Javascript plugin for notepad++ - Download</title>
	<?php include "inc/head.part.php" ?>
</head>
<body>
	<div id="divMainContent">
		<div class="pageWrapper">
			<div id="divHeader">
				<?php include "inc/nav.part.php" ?>
			</div>
			<?php 
			if($checking)
			{
			?>
			<div class="divListwHeader foldingList">
				<div class="listHeader">
					<div class="listHeaderLeft"></div>
					<div class="listHeaderMiddle">Check for Update</div>
					<div class="listHeaderRight"></div>
				</div>
				<div class="listContainer foldingContainer">
					<div class="listContainerRight">
						<div class="listContainerMiddle">
							<p>
							<?php 
							if($is_lastest)
								echo "You are using the latest version of JSMinNpp. May be you want to <a href='https://www.paypal.com/cgi-bin/webscr?cmd=_donations&amp;business=sunjw8888%40yahoo%2ecom%2ecn&amp;item_name=JSMinNpp%20Project&amp;no_shipping=1&amp;cn=Optional%20comments&amp;tax=0&amp;currency_code=USD&amp;lc=US&amp;amount=1.8&amp;bn=PP%2dDonationsBF&amp;charset=UTF%2d8' target='_blank'>Donate</a>.";
							else
								echo "You are <strong>NOT</strong> using the latest version of JSMinNpp. Download new version below.";
							?>
							</p>
						</div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="listBottom">
					<div class="listBottomLeft"></div>
					<div class="listBottomMiddle"></div>
					<div class="listBottomRight"></div>
				</div>
			</div>
			<?php } ?>
			<div id="divDownload">
				<?php include "inc/download.part.php" ?>
			</div>
			<div id="divCrumb">
				<p><a href="index.php">JSMinNpp</a>&nbsp;&gt;&gt;&nbsp;Download</p>
			</div>
			<div class="divListwHeader foldingList">
				<div class="listHeader">
					<div class="listHeaderLeft"></div>
					<div class="listHeaderMiddle">Stable Release</div>
					<div class="listHeaderRight"></div>
				</div>
				<div class="listContainer foldingContainer">
					<div class="listContainerRight">
						<div class="listContainerMiddle">
							<ul>
								<li>
								Unicode build: <a href="https://jstoolnpp.googlecode.com/files/JSMinNPP.1.12.uni.zip" target="_blank">JSMinNPP.1.12.uni.zip</a>
								</li>
								<li>
								ASCII build: <a href="https://jstoolnpp.googlecode.com/files/JSMinNPP.1.12.asc.zip" target="_blank">JSMinNPP.1.12.asc.zip</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="listBottom">
					<div class="listBottomLeft"></div>
					<div class="listBottomMiddle"></div>
					<div class="listBottomRight"></div>
				</div>
			</div>
			<div class="divListwHeader foldingList">
				<div class="listHeader">
					<div class="listHeaderLeft"></div>
					<div class="listHeaderMiddle"><a name="beta" title="Beta Version"></a>Beta Version</div>
					<div class="listHeaderRight"></div>
				</div>
				<div class="listContainer foldingContainer">
					<div class="listContainerRight">
						<div class="listContainerMiddle">
							<p>Only unicode build: <a href="http://sourceforge.net/projects/jsminnpp/files/Beta/" target="_blank">JSMinNpp.<?php echo $download_array["JSMinNpp"]["beta"]; ?>.uni.zip</a></p>
							<p>Beta version may have fixed some bugs and may have some new bugs. Try it.</p>
						</div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="listBottom">
					<div class="listBottomLeft"></div>
					<div class="listBottomMiddle"></div>
					<div class="listBottomRight"></div>
				</div>
			</div>
			<div class="divListwHeader foldingList">
				<div class="listHeader">
					<div class="listHeaderLeft"></div>
					<div class="listHeaderMiddle">Other Files</div>
					<div class="listHeaderRight"></div>
				</div>
				<div class="listContainer foldingContainer">
					<div class="listContainerRight">
						<div class="listContainerMiddle">
							<ul>
								<li>
								README: <a href="http://sourceforge.net/projects/jsminnpp/files/README/view" target="_blank">Download</a>
								</li>
								<li>
								Changelog: <a href="changelog.php">View</a>&nbsp;|&nbsp;<a href="http://sourceforge.net/projects/jsminnpp/files/ChangeLog/view" target="_blank">Download</a>
								</li>
								<li>
								Source code: <a href="http://code.google.com/p/jstoolnpp/source/browse/" target="_blank">View</a>&nbsp;|&nbsp;<a href="http://sourceforge.net/projects/jsminnpp/files/Src/" target="_blank">Download</a>
								</li>
								<li>
								All files: <a href="http://sourceforge.net/projects/jsminnpp/files/" target="_blank">View</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="listBottom">
					<div class="listBottomLeft"></div>
					<div class="listBottomMiddle"></div>
					<div class="listBottomRight"></div>
				</div>
			</div>
			<div id="divFooter" class="center">
				<?php include "inc/footer.part.php" ?>
			</div>
		</div>
	</div>
	<?php include "inc/js.part.php" ?>
</body>
</html>

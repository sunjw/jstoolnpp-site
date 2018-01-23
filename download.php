<?php 
include_once "inc/common.inc.php";

$checking = false;
$is_lastest = false;

$download_array = parse_ini_file("inc/version.ini", true);
$cur_version = $download_array["JSMinNpp"]["version"];

$ver = get_query("ver");
if($ver != "")
	$checking = true;

if($checking) {
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
    if(count($cur_ver_array) > 3) {
        $cur_build_ver = $cur_ver_array[3];
    }

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
	else if($build_ver == $cur_build_ver)
		$is_lastest = true;
}
	

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>JSToolNpp - A Javascript plugin for notepad++ - Download</title>
	<?php include "inc/head.part.php" ?>
</head>
<body>
	<div id="divMainContent">
		<div class="pageWrapper">
			<div id="divHeader">
				<?php include "inc/nav.part.php" ?>
			</div>
            <div id="divCrumb">
				<div class="floatLeft"><a href="index.php">JSToolNpp</a>&nbsp;&gt;&gt;&nbsp;Download</div>
                <div class="floatRight"><?php include "inc/ad.part.php" ?></div>
                <div class="clear"></div>
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
								echo "Congratulations! You are using the latest version of JSToolNpp.";
							else
								echo "You are <strong>NOT</strong> using the latest version of JSToolNpp. Download new version below.";
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
			<div class="divListwHeader foldingList">
				<div class="listHeader">
					<div class="listHeaderLeft"></div>
					<div class="listHeaderMiddle">Stable Release</div>
					<div class="listHeaderRight"></div>
				</div>
				<div class="listContainer foldingContainer">
					<div class="listContainerRight">
						<div class="listContainerMiddle">
							<ul class="discList">
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
			<!--<div class="divListwHeader foldingList">
				<div class="listHeader">
					<div class="listHeaderLeft"></div>
					<div class="listHeaderMiddle"><a name="beta" title="Beta Version"></a>Beta Version</div>
					<div class="listHeaderRight"></div>
				</div>
				<div class="listContainer foldingContainer">
					<div class="listContainerRight">
						<div class="listContainerMiddle">
							<p><del>Only unicode build: <a href="http://sourceforge.net/projects/jsminnpp/files/Beta/" target="_blank">JSMinNpp.<?php echo $download_array["JSMinNpp"]["beta"]; ?>.uni.zip</a></del></p>
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
			</div>-->
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
								README: <a href="https://github.com/sunjw/jstoolnpp/blob/master/README" target="_blank">View</a>
								</li>
								<li>
								Changelog: <a href="changelog.php">View</a>
								</li>
								<li>
								Source code: <a href="https://github.com/sunjw/jstoolnpp" target="_blank">View</a>
								</li>
								<li>
								All files: <a href="https://sourceforge.net/projects/jsminnpp/files/" target="_blank">View</a>
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

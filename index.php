<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>JSMinNpp - A javascript plugin for notepad++</title>
	<?php include "inc/head.part.php" ?>
</head>
<body>
	<div id="divMainContent">
		<div class="pageWrapper">
			<div id="divHeader">
				<?php include "inc/nav.part.php" ?>
			</div>
			<div id="divDownload">
				<?php include "inc/download.part.php" ?>
			</div>
			<div id="divCrumb">
				<p><a href="index.php">JSMinNpp</a>&nbsp;&gt;&gt;&nbsp;Home</p>
			</div>
			<div class="divListwHeader foldingList">
				<div class="listHeader">
					<div class="listHeaderLeft"></div>
					<div class="listHeaderMiddle">What is JSMinNpp</div>
					<div class="listHeaderRight"></div>
				</div>
				<div class="listContainer foldingContainer">
					<div class="listContainerRight">
						<div class="listContainerMiddle">
							<p>JSMinNpp is a javascript plugin for <a href="http://notepad-plus-plus.org/" target="_blank">Notepad++</a>.<br/>
							Use <a href="http://www.crockford.com/javascript/jsmin.html" target="_blank">Douglas Crockford's JSMin</a> to minimize javascript code and use my own algorithm to format javascript code.<br/>
							Really helpful to javascript coder on Notepad++ and really easy to use it.</p>
							<p>License: <a href="gpl.php">GPL 2.0</a></p>
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
					<div class="listHeaderMiddle">Screenshots</div>
					<div class="listHeaderRight"></div>
				</div>
				<div class="listContainer foldingContainer">
					<div class="listContainerRight">
						<div id="divScreenshots" class="listContainerMiddle">
							<ul id="ulScreenshots">
								<li><a href="imgs/jsminnpp-menu.png" class="lightBox" title="JSMinNpp Menu">
									<img src="imgs/jsminnpp-menu-tb.png" width="150" height="100" border="0" alt="JSMinNpp Menu" />
									<span>JSMinNpp Menu</span>
								</a></li>
								<li><a href="imgs/jsminnpp-about.png" class="lightBox" title="About Dialog">
									<img src="imgs/jsminnpp-about-tb.png" width="150" height="100" border="0" alt="About Dialog" />
									<span>About Dialog</span>
								</a></li>
								<li><a href="imgs/jsminnpp-pluginmanager.png" class="lightBox" title="JSMinNpp in Plugin Manager">
									<img src="imgs/jsminnpp-pluginmanager-tb.png" width="150" height="100" border="0" alt="JSMinNpp in Plugin Manager" />
									<span>JSMinNpp in Plugin Manager</span>
								</a></li>
							</ul>
							<div id="divMore">
								<a href="screenshots.php">More...</a>
							</div>
							<div class="clear"></div>
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
					<div class="listHeaderMiddle">How to install</div>
					<div class="listHeaderRight"></div>
				</div>
				<div class="listContainer foldingContainer">
					<div class="listContainerRight">
						<div class="listContainerMiddle">
							<p>You can install JSMinNpp through Plugin Manager in Notepad++:</p>
							<ul class="indentList">
								<li>1. Run Notepad++.</li>
								<li>2. Open menu: "Plugins" - "Plugin Manager" - "Show Plugin Manager".</li>
								<li>3. Under "Available" tab, select "JSMin".</li>
								<li>4. Click "Install" button. Then Plugin Manager will do downloading and installing automatically.</li>
							</ul>
							<p>Or you can <a href="http://sourceforge.net/projects/jsminnpp/files/Uni/JSMinNPP.1.6.1.uni.zip/download" target="_blank">download JSMinNpp</a> and install it manually. <a href="help.php#Install_manually">See Help...</a></p>
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
</body>
<?php include "inc/js.part.php" ?>
</html>

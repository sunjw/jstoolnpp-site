<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>JSToolNpp - A Javascript plugin for notepad++</title>
	<?php include "inc/head.part.php" ?>
</head>
<body>
	<div id="divMainContent">
		<div class="pageWrapper">
			<div id="divHeader">
				<?php include "inc/nav.part.php" ?>
			</div>
			<div id="divCrumb">
				<div class="floatLeft"><a href="index.php">JSToolNpp</a>&nbsp;&gt;&gt;&nbsp;Home</div>
                <div class="floatRight"><?php include "inc/ad.part.php" ?></div>
                <div class="clear"></div>
			</div>
			<div class="divListwHeader foldingList">
				<div class="listHeader">
					<div class="listHeaderLeft"></div>
					<div class="listHeaderMiddle">What is JSToolNpp</div>
					<div class="listHeaderRight"></div>
				</div>
				<div class="listContainer foldingContainer">
					<div class="listContainerRight">
						<div class="listContainerMiddle">
							<p>A Javascript plugin for <a href="http://notepad-plus-plus.org/" target="_blank">Notepad++</a>.</p>
							<ul class="indentList circleList">
								<li><a href="http://www.crockford.com/Javascript/jsmin.html" target="_blank">Douglas Crockford's JSMin</a>  algorithm to minimize Javascript code.</li>
								<li>My own algorithm to format Javascript code.</li>
								<li>A JSON data viewer. This JSON data viewer can handle >10MB JSON file easily.</li>
								<li>Support 64bit Notepad++ (from version 1.20.0, ".64.zip" package).</li>
							</ul>
							<p>Really helpful to Javascript coder on Notepad++ and really easy to use it.</p>
                            <p>&nbsp;</p>
							<p>What's New in 1.20.0:</p>
							<ul class="indentList circleList">
								<li>Add 64bit Notepad++ support.</li>
								<li>Add new version check.</li>
								<li>Add context menu in Json Viewer.</li>
								<li>Better ":" format.</li>
								<li>Fix XOR "~" format bug.</li>
								<li>Fix bug in Json Viewer.</li>
								<li>Other tweak.</li>
							</ul>
                            <p>&nbsp;</p>
							<p>Made in China.</p>
							<p>License: <a href="gpl.php">GPL 2.0</a></p>
							<!--<p><g:plusone size="small"></g:plusone></p>-->
							<!--<p><script type="text/javascript" src="http://www.ohloh.net/p/485688/widgets/project_users_logo.js"></script></p>-->
							<!--<p>Something Interesting: <a href="result.php">Peacekeeper Testing Results</a></p>-->
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
					<div class="listHeaderMiddle">History</div>
					<div class="listHeaderRight"></div>
				</div>
				<div class="listContainer foldingContainer">
					<div class="listContainerRight">
						<div class="listContainerMiddle">
                            <p><a class="lastestNews" href="http://www.sunjw.us/jsminnpp/download.php">JSToolNpp 1.20.0 Released</a><span class="newsDate"> - 2016-10-09</span></p>
                            <p><a href="http://www.sunjw.us/jsminnpp/changelog.php">JSToolNpp 1.18.0 Released</a><span class="newsDate"> - 2016-05-21</span></p>
                            <p><a href="http://www.sunjw.us/jsminnpp/changelog.php">JSToolNpp 1.17.2 Released</a><span class="newsDate"> - 2016-01-10</span></p>
                            <p><a href="http://www.sunjw.us/jsminnpp/changelog.php">JSToolNpp 1.16.10 Released</a><span class="newsDate"> - 2015-05-29</span></p>
                            <p><a href="http://www.sunjw.us/jsminnpp/changelog.php">JSToolNpp 1.16.8 Released</a><span class="newsDate"> - 2014-12-07</span></p>
							<p><a href="http://www.sunjw.us/jsminnpp/changelog.php">JSToolNpp 1.16.6 Released</a><span class="newsDate"> - 2014-09-15</span></p>
							<p><a href="http://www.sunjw.us/jsminnpp/changelog.php">JSToolNpp 1.16.5 Released</a><span class="newsDate"> - 2014-03-15</span></p>
							<p><a href="http://www.sunjw.us/jsminnpp/changelog.php">JSToolNpp 1.16 Released</a><span class="newsDate"> - 2013-10-20</span></p>
							<p>&nbsp;</p>
                            <p><a href="http://www.sunjw.us/jsminnpp/changelog.php">More...</a></p>
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
								<li><a href="imgs/jsminnpp-menu.png" class="lightBox" title="JSToolNpp Menu">
									<img src="imgs/jsminnpp-menu-tb.png" width="150" height="100" border="0" alt="JSToolNpp Menu" />
									<span>JSToolNpp Menu</span>
								</a></li>
								<li><a href="imgs/jsminnpp-about.png" class="lightBox" title="About Dialog">
									<img src="imgs/jsminnpp-about-tb.png" width="150" height="100" border="0" alt="About Dialog" />
									<span>About Dialog</span>
								</a></li>
								<li><a href="imgs/jsminnpp-pluginmanager.png" class="lightBox" title="JSToolNpp in Plugin Manager">
									<img src="imgs/jsminnpp-pluginmanager-tb.png" width="150" height="100" border="0" alt="JSToolNpp in Plugin Manager" />
									<span>JSToolNpp in Plugin Manager</span>
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
							<p>You can install JSToolNpp through Plugin Manager in Notepad++:</p>
							<ul class="indentList">
								<li>1. Run Notepad++.</li>
								<li>2. Open menu: "Plugins" - "Plugin Manager" - "Show Plugin Manager".</li>
								<li>3. Under "Available" tab, select "JSTool".</li>
								<li>4. Click "Install" button. Then Plugin Manager will do downloading and installing automatically.</li>
							</ul>
							<p>Or you can <a href="http://sourceforge.net/projects/jsminnpp/files/Uni/JSMinNPP.1.6.1.uni.zip/download" target="_blank">download JSToolNpp</a> and install it manually. <a href="help.php#Install_manually">See Help...</a></p>
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

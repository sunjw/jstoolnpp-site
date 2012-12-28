<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>JSMinNpp - A Javascript plugin for notepad++</title>
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
							<p>A Javascript plugin for <a href="http://notepad-plus-plus.org/" target="_blank">Notepad++</a>.</p>
								<ul class="indentList circleList">
									<li><a href="http://www.crockford.com/Javascript/jsmin.html" target="_blank">Douglas Crockford's JSMin</a>  algorithm to minimize Javascript code.</li>
									<li>My own algorithm to format Javascript code.</li>
									<li>A JSON data viewer.</li>
								</ul>
							<p>Really helpful to Javascript coder on Notepad++ and really easy to use it.</p>
							<p>Made in China.</p>
							<p>License: <a href="gpl.php">GPL 2.0</a></p>
							<p><g:plusone size="small"></g:plusone></p>
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
					<div class="listHeaderMiddle">News</div>
					<div class="listHeaderRight"></div>
				</div>
				<div class="listContainer foldingContainer">
					<div class="listContainerRight">
						<div class="listContainerMiddle">
							<p><a class="lastestNews" href="http://jsminnpp.sourceforge.net/download.php#beta">JSMinNpp 1.11.4 Beta Released</a><span class="newsDate"> - 2012-10-12</span></p>
							<p><a href="http://jsminnpp.sourceforge.net/download.php#beta">JSMinNpp 1.11.2 Beta Released</a><span class="newsDate"> - 2012-07-11</span></p>
							<p><a href="http://jsminnpp.sourceforge.net/download.php">JSMinNpp 1.11 Released</a><span class="newsDate"> - 2012-05-06</span></p>
							<p><a href="http://jsminnpp.sourceforge.net/download.php#beta">JSMinNpp 1.10.6 Beta Released</a><span class="newsDate"> - 2012-04-07</span></p>
							<p><a href="http://jsminnpp.sourceforge.net/download.php">JSMinNpp 1.10 Released</a><span class="newsDate"> - 2012-01-19</span></p>
							<p><a href="http://jsminnpp.sourceforge.net/download.php#beta">JSMinNpp 1.9.2 Beta Released</a><span class="newsDate"> - 2011-11-18</span></p>
							<p><a href="http://jsminnpp.sourceforge.net/download.php">JSMinNpp 1.9 Released</a><span class="newsDate"> - 2011-09-21</span></p>
							<p><a href="http://jsminnpp.sourceforge.net/download.php#beta">JSMinNpp 1.8.6 Beta Released</a><span class="newsDate"> - 2011-08-02</span></p>
							<p><a href="http://jsminnpp.sourceforge.net/download.php#beta">JSMinNpp 1.8.4 Beta Released</a><span class="newsDate"> - 2011-06-18</span></p>
							<p><a href="http://jsminnpp.sourceforge.net/download.php">JSMinNpp 1.8 Released</a><span class="newsDate"> - 2011-05-02</span></p>
							<p><a href="http://jsminnpp.sourceforge.net/download.php#beta">JSMinNpp 1.7.4 Beta Released</a><span class="newsDate"> - 2011-03-31</span></p>
							<p><a href="http://jsminnpp.sourceforge.net/download.php#beta">JSMinNpp 1.7.2 Beta Released</a><span class="newsDate"> - 2011-03-04</span></p>
							<p><a href="http://jsminnpp.sourceforge.net/download.php">JSMinNpp 1.7 Released</a><span class="newsDate"> - 2011-02-26</span></p>
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
	<?php include "inc/js.part.php" ?>
</body>
</html>

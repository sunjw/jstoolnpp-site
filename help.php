<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>JSMinNpp - A Javascript plugin for notepad++ - Help</title>
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
				<p><a href="index.php">JSMinNpp</a>&nbsp;&gt;&gt;&nbsp;Help</p>
			</div>
			<div class="divListwHeader foldingList">
				<div class="listHeader">
					<div class="listHeaderLeft"></div>
					<div class="listHeaderMiddle"></div>
					<div class="listHeaderRight"></div>
				</div>
				<div class="listContainer foldingContainer">
					<div class="listContainerRight">
						<div class="listContainerMiddle">
							<ul>
								<li><a title="Intall through Plugin Manager" href="#Install_pm">Intall through Plugin Manager</a></li>
								<li><a title="Intall Manually" href="#Install_manually">Intall Manually</a></li>
								<li><a title="Uninstall JSMinNpp" href="#Uninstall">Uninstall JSMinNpp</a></li>
								<li><a title="How to Use JSMinNpp" href="#Use">How to Use JSMinNpp</a></li>
								<li><a title="Report Bugs" href="#Report_bugs">Report Bugs</a></li>
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
					<div class="listHeaderMiddle"><a name="Install_pm" title="Install through Plugin Manager"></a>Install through Plugin Manager</div>
					<div class="listHeaderRight"></div>
				</div>
				<div class="listContainer foldingContainer">
					<div class="listContainerRight">
						<div class="listContainerMiddle">
							<ul>
								<li>1. Run Notepad++.</li>
								<li>2. Open menu: "Plugins" - "Plugin Manager" - "Show Plugin Manager".</li>
								<li>3. Under "Available" tab, select "JSMin".</li>
								<li>4. Click "Install" button. Then Plugin Manager will do downloading and installing automatically.</li>
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
					<div class="listHeaderMiddle"><a name="Install_manually" title="Install Manually"></a>Install Manually</div>
					<div class="listHeaderRight"></div>
				</div>
				<div class="listContainer foldingContainer">
					<div class="listContainerRight">
						<div class="listContainerMiddle">
							<ul>
								<li>1. <a href="http://sourceforge.net/projects/jsminnpp/files/Uni/JSMinNPP.1.6.1.uni.zip/download" target="_blank">Download JSMinNpp</a>.</li>
								<li>2. Extract JSMinNpp.dll from JSMinNPP.x.y.z.uni.zip (or JSMinNPP.x.y.z.asc.zip) you just downloaded.</li>
								<li>3. Copy JSMinNpp.dll to plugins directory under your Notepad++ installation path, like "C:\Program Files\Notepad++\plugins\".</li>
								<li>4. Run Notepad++, you will see JSMinNpp in "Plugins" menu.</li>
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
					<div class="listHeaderMiddle"><a name="Uninstall" title="Uninstall JSMinNpp"></a>Uninstall JSMinNpp</div>
					<div class="listHeaderRight"></div>
				</div>
				<div class="listContainer foldingContainer">
					<div class="listContainerRight">
						<div class="listContainerMiddle">
							<p>Uninstall through Plugin Manager:</p>
							<ul class="indentList">
								<li>1. Run Notepad++.</li>
								<li>2. Open menu: "Plugins" - "Plugin Manager" - "Show Plugin Manager".</li>
								<li>3. Under "Installed" tab, select "JSMin".</li>
								<li>4. Click "Remove" button. Then Plugin Manager will do uninstalling automatically.</li>
							</ul>
							<p>Or you can uninstall manually:</p>
							<ul class="indentList">
								<li>1. Exit any running Notepad++.</li>
								<li>2. Go to plugins directory under your Notepad++ installation path, like "C:\Program Files\Notepad++\plugins\".</li>
								<li>3. Delete JSMinNpp.dll.</li>
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
					<div class="listHeaderMiddle"><a name="Use" title="How to Use JSMinNpp"></a>How to Use JSMinNpp</div>
					<div class="listHeaderRight"></div>
				</div>
				<div class="listContainer foldingContainer">
					<div class="listContainerRight">
						<div class="listContainerMiddle">
							<p>Minimize source code:</p>
							<ul class="indentList">
								<li>1. Open you Javascript source code file in Notepad++.</li>
								<li>2. Open menu: "Plugins" - "JSMin".</li>
								<li>3. If you want to put minimized source code in current file, click "JSMin". Or if you want to put minimized source code in a new file, click "JSMin (New file)".</li>
							</ul>
							<p>Format all code in a source code file:</p>
							<ul class="indentList">
								<li>1. Open you Javascript source code file in Notepad++.</li>
								<li>2. Press "Ctrl"+"Alt"+"m".</li>
								<li>3. Or use menu, open menu: "Plugins" - "JSMin" then click "JSFormat".</li>
							</ul>
							<p>Format selected code in a source code file:</p>
							<ul class="indentList">
								<li>1. Open you Javascript source code file in Notepad++.</li>
								<li>2. Select source code lines which you want to format.</li>
								<li>3. Press "Ctrl"+"Alt"+"M".</li>
								<li>4. Or use menu, open menu: "Plugins" - "JSMin" then click "JSFormat".</li>
							</ul>
							<p>Json Viewer:</p>
							<ul class="indentList">
								<li>1. Open you Javascript or json source code file in Notepad++.</li>
								<li>2. Select json code. Or if it's a json file, there is no need to select.</li>
								<li>3. Press "Ctrl"+"Alt"+"J".</li>
								<li>4. Or use menu, open menu: "Plugins" - "JSMin" then click "Json Viewer".</li>
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
					<div class="listHeaderMiddle"><a name="Report_bugs" title="Report Bugs"></a>Report Bugs</div>
					<div class="listHeaderRight"></div>
				</div>
				<div class="listContainer foldingContainer">
					<div class="listContainerRight">
						<div class="listContainerMiddle">
							<p>If found any bugs or problem, you can visit <a href="http://sourceforge.net/projects/jsminnpp/support" target="_blank">JSMinNpp Support on Sourceforte.net</a> or feel free to email me: sunjw8888 at gmail.com.</p>
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

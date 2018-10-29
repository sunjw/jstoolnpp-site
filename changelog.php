<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>JSToolNpp - A JavaScript plugin for notepad++ - Changelog</title>
	<?php include "inc/head.part.php" ?>
</head>
<body>
	<div id="divMainContent">
		<div class="pageWrapper">
			<div id="divHeader">
				<?php include "inc/nav.part.php" ?>
			</div>
            <div id="divCrumb">
				<div class="floatLeft"><a href="index.php">JSToolNpp</a>&nbsp;&gt;&gt;&nbsp;Changelog</div>
                <div class="floatRight"><?php include "inc/ad.part.php" ?></div>
                <div class="clear"></div>
			</div>
			<div class="divListwHeader foldingList">
				<div class="listHeader">
					<div class="listHeaderLeft"></div>
					<div class="listHeaderMiddle">Changelog</div>
					<div class="listHeaderRight"></div>
				</div>
				<div class="listContainer foldingContainer">
					<div class="listContainerRight">
						<div class="listContainerMiddle">
							<p>
							1.22.0<br/>
							Add JSON Sort function.<br/>
							Fix blocking Notepad++ startup in some environment.<br/>
							<br/>
							1.21.6<br/>
							Fix format on reserved word as function name.<br/>
							<br/>
							1.21.1<br/>
							Fix JSMin crash.<br/>
							<br/>
							1.21.0<br/>
							Unicode only release build.<br/>
							Add toolbar button for Json Viewer.<br/>
							Add an option to control new version check.<br/>
							Add an "Auto detect" end of line option.<br/>
							Fix high DPI layout.<br/>
							Fix bugs.<br/>
							Other tweak.<br/>
							<br/>
							1.20.2<br/>
                            Fix 64bit version crash on some Windows 10 system.<br/>
                            Better `...`, '...' and "..." format.<br/>
                            <br/>
							1.20.0<br/>
                            Add 64bit Notepad++ support.<br/>
                            Add new version check.<br/>
                            Add context menu in Json Viewer.<br/>
                            Better ":" format.<br/>
                            Fix XOR "~" format bug.<br/>
                            Fix bug in Json Viewer.<br/>
                            Other tweak.<br/>
                            <br/>
                            1.18.0<br/>
                            Add some ES6 support.<br/>
                            Fix UTF-8 characters display in Json Viewer.<br/>
                            Better cursor position after JSFormat.<br/>
                            Other tweak.<br/>
                            <br/>
                            1.17.2<br/>
                            Switch to VS2008.<br/>
                            Enable DEP and ASLR.<br/>
                            Other tweak.<br/>
                            <br/>
                            1.17<br/>
                            Fix inline comment format.<br/>
                            Other tweak.<br/>
                            <br/>
                            1.16.10<br/>
                            Fix configuration saving bug.<br/>
                            <br/>
                            1.16.8<br/>
                            Fix regex related bug.<br/>
                            <br/>
                            1.16.6<br/>
                            Fix negative number bug.<br/>
                            Fix some expression format bug.<br/>
                            <br/>
                            1.16.5<br/>
                            Fix regex detection.<br/>
                            Fix some crash bugs.<br/>
                            <br/>
							1.16 (since 1.15)<br/>
							Performance improvement.<br/>
							Move download back to SourceForge.net<br/>
							<br/>
							1.15 (since 1.13)<br/>
							Change name to JSTool.<br/>
							Added simple search in Json Viewer.<br/>
							Fixed Json Viewer and editor linkin bug.<br/>
							Fixed Json Viewer utf-8 bug.<br/>
							Other tweaks.<br/>
							<br/>
							1.13 (since 1.12)<br/>
							Performance improved (JSFormat will be about 2X faster).<br/>
							Linked editor with Json Viewer: Clicking a data node in Viewer, editor will navigate to corresponding line.<br/>
							Added a logo.<br/>
							<br/>
							1.12 (since 1.11)<br/>
							Fixed a bug in JSON Viewer.<br/>
							Updated JsonPP.<br/>
							Fixed "unexpect space" of JSLint.<br/>
							Added an option to keep indent in empty line.<br/>
							Fixed "finally" bug.<br/>
							Changed project site to http://sunjw.us/jsminnpp/<br/>
							<br/>
							1.11.4 Beta<br/>
							Updated JsonPP.<br/>
							Fixed "unexpect space" of JSLint.<br/>
							Fixed "finally" bug.<br/>
							<br/>
							1.11.2 Beta<br/>
							Fixed a bug in JSON Viewer.<br/>
							<br/>
							1.11 (since 1.10)<br/>
							Move to Google Code.<br/>
							Added a Json Viewer.<br/>
							Changed classes inheritance hierarchy to build a smaller binary file.<br/>
							<br/>
							1.10.6 Beta<br/>
							Added a Json viewer.<br/>
							Changed classes inheritance hierarchy.<br/>
							<br/>
							1.10 (since 1.9)<br/>
							Added formatting selected source code.<br/>
							If you selected some lines of source code, JSMinNpp will just format these code.<br/>
							Some minor changes.<br/>
							<br/>
							1.9.2 Beta<br/>
							Added formatting selected source code.<br/>
							<br/>
							1.9 (since 1.8)<br/>
							Fixed "one more indent in ({...})".<br/>
							Fixed "A space at the end of file".<br/>
							Fixed other bugs in formatting algorithm.<br/>
							Some minor changes.<br/>
							<br/>
							1.8.4 Beta<br/>
							Fixed "A space at the end of file".<br/>
							Fixed other bugs in formatting algorithm.<br/>
							<br/>
							1.8 (since 1.7.1)<br/>
							Leave empty {} alone.<br/>
							Added a shortcut for formatting (Ctrl+Alt+M).<br/>
							Added an option to keep comments at top of codes.<br/>
							Fixed bugs.<br/>
							Updated IniProcessor.<br/>
							<br/>
							1.7.2 Beta<br/>
							Fixed bugs.<br/>
							Left empty {} block alone.<br/>
							<br/>
							1.7 (since 1.6.1)<br/>
							Fixed bugs.<br/>
							Formatting algorithm now follows JSLint rules.<br/>
							Added a new option dialog.<br/>
							Some minor changes.<br/>
							<br/>
							1.6.10 Beta<br/>
							Fixed bugs in formatting algorithm.<br/>
							Added an Option dialog.<br/>
							Some minor changes.<br/>
							<br/>
							1.6.5 Beta<br/>
							Fixed lots of bugs in formatting algorithm.<br/>
							Changed About dialog style.<br/>
							<br/>
							1.6.1<br/>
							Fixed some bugs.<br/>
							<br/>
							1.6<br/>
							Formatting Javascript code.<br/>
							<br/>
							1.05<br/>
							Fixed some bugs.<br/>
							Added a menu item which can put minimized Javascript code in a new file.<br/>
							<br/>
							1.01<br/>
							Fixed a bug.<br/>
							<br/>
							1.00<br/>
							First time release.<br/>
							Minimizing Javascript code in current file.<br/>
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
			<div id="divFooter" class="center">
				<?php include "inc/footer.part.php" ?>
			</div>
		</div>
	</div>
	<?php include "inc/js.part.php" ?>
</body>
</html>

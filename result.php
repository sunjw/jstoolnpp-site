<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>JSMinNpp - A javascript plugin for notepad++ - Peacekeeper Results</title>
	<?php include "inc/head.part.php" ?>
</head>
<body>
	<div id="divMainContent">
		<div id="divPk" class="pageWrapper">
			<div id="divHeader">
				<?php include "inc/nav.part.php" ?>
			</div>
			<div id="divDownload">
				<?php include "inc/download.part.php" ?>
			</div>
			<div id="divCrumb">
				<p><a href="index.php">JSMinNpp</a>&nbsp;&gt;&gt;&nbsp;Peacekeeper Results</p>
			</div>
			<div class="divListwHeader foldingList">
				<div class="listHeader">
					<div class="listHeaderLeft"></div>
					<div class="listHeaderMiddle"><a name="table" title="Data Table"></a>Data Table</div>
					<div class="listHeaderRight"></div>
				</div>
				<div class="listContainer foldingContainer">
					<div class="listContainerRight">
						<div class="listContainerMiddle">
							<table id="tableDatas" border="0">
								<tr>
									<th>Browser</th>
									<th>Version</th>
									<th>OS</th>
									<th>Date</th>
									<th><a title="Total" href="#total">Total</a></th>
									<th><a title="Rendering" href="#rendering">Rendering</a></th>
									<th><a title="Social Network" href="#socialNetwork">Social Network</a></th>
									<th><a title="Complex Graphics" href="#complexGraphics">Complex Graphics</a></th>
									<th><a title="Data" href="#data">Data</a></th>
									<th><a title="Dom Operations" href="#domOperations">Dom Operations</a></th>
									<th><a title="Text Parsing" href="#textParsing">Text Parsing</a></th>
								</tr>
							</table>
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
					<div class="listHeaderMiddle"><a name="total" title="Total"></a>Total</div>
					<div class="listHeaderRight"></div>
				</div>
				<div class="listContainer foldingContainer">
					<div class="listContainerRight">
						<div class="listContainerMiddle">
							<canvas id="total" width="1000" height="210"></canvas>
							<a title="Table" href="#table">Back to table</a>
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
					<div class="listHeaderMiddle"><a name="rendering" title="Rendering"></a>Rendering</div>
					<div class="listHeaderRight"></div>
				</div>
				<div class="listContainer foldingContainer">
					<div class="listContainerRight">
						<div class="listContainerMiddle">
							<canvas id="rendering" width="1000" height="210"></canvas>
							<a title="Table" href="#table">Back to table</a>
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
					<div class="listHeaderMiddle"><a name="socialNetwork" title="Social Network"></a>Social Network</div>
					<div class="listHeaderRight"></div>
				</div>
				<div class="listContainer foldingContainer">
					<div class="listContainerRight">
						<div class="listContainerMiddle">
							<canvas id="socialNetwork" width="1000" height="210"></canvas>
							<a title="Table" href="#table">Back to table</a>
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
					<div class="listHeaderMiddle"><a name="complexGraphics" title="Complex Graphics"></a>Complex Graphics</div>
					<div class="listHeaderRight"></div>
				</div>
				<div class="listContainer foldingContainer">
					<div class="listContainerRight">
						<div class="listContainerMiddle">
							<canvas id="complexGraphics" width="1000" height="210"></canvas>
							<a title="Table" href="#table">Back to table</a>
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
					<div class="listHeaderMiddle"><a name="data" title="Data"></a>Data</div>
					<div class="listHeaderRight"></div>
				</div>
				<div class="listContainer foldingContainer">
					<div class="listContainerRight">
						<div class="listContainerMiddle">
							<canvas id="data" width="1000" height="210"></canvas>
							<a title="Table" href="#table">Back to table</a>
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
					<div class="listHeaderMiddle"><a name="domOperations" title="Dom Operations"></a>Dom Operations</div>
					<div class="listHeaderRight"></div>
				</div>
				<div class="listContainer foldingContainer">
					<div class="listContainerRight">
						<div class="listContainerMiddle">
							<canvas id="domOperations" width="1000" height="210"></canvas>
							<a title="Table" href="#table">Back to table</a>
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
					<div class="listHeaderMiddle"><a name="textParsing" title="Text Parsing"></a>Text Parsing</div>
					<div class="listHeaderRight"></div>
				</div>
				<div class="listContainer foldingContainer">
					<div class="listContainerRight">
						<div class="listContainerMiddle">
							<canvas id="textParsing" width="1000" height="210"></canvas>
							<a title="Table" href="#table">Back to table</a>
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
					<div class="listHeaderMiddle">Note</div>
					<div class="listHeaderRight"></div>
				</div>
				<div class="listContainer foldingContainer">
					<div class="listContainerRight">
						<div class="listContainerMiddle">
							<p>All testings are performanced on a Dell 1501 notebook with AMD TL-50 1.6GHz dual core cpu, 2GB memory, x1150 graphics and 500GB hdd driver. Operating systems are Windows Vista SP2 Simplified Chinese version and Fedora 12 x86-64 version. All browsers' hardware accelarator are disabled.</p>
							<p>This is <strong>NOT</strong> a serious and precise testing.</p>
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
	<script type="text/javascript" src="js/data.js"></script>
	<script type="text/javascript" src="js/draw.js"></script>
	<script type="text/javascript">
	//<![CDATA[
		if(!document.createElement('canvas').getContext)
			alert("Your browser doesn't support canvas.");
	//]]>
	</script>
</body>
</html>
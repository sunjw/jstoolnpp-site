/**
 * Multi browsers' Peacekeeper results analysis.
 * Drawing part.
 * This version will not use Canvas.
 * Author: Sun Junwen
 */
var canvasHeight = 180;
var canvasWidth = 1000;

var maximum;
var dataWidth;
var resultLabels;
var resultTitles;

function calBarHeight(result, max) {
	return parseInt(result / max * (canvasHeight - 10));
}

function showLabel(bar) {
	bar = $(bar);
	var i = bar.attr("barId");
	var type = bar.attr("barType");
	var resultLabel = resultLabels[type];
	if (i >= 0 && i < TestDatas.length) {
		var result = TestDatas[i];
		resultLabel.html(result['browser'] + " " + result['version'] + "<br/>" +
			result['os'] + "<br/>" +
			resultTitles[type] + ": " + result[type]);
		var width = parseInt(resultLabel.css("width"));
		width /= 2;
		var height = parseInt(resultLabel.css("height"));
		var barTotalHeight = calBarHeight(result[type], maximum[type]);
		resultLabel.css("left", 18 + i * dataWidth - width + "px");
		resultLabel.css("bottom", barTotalHeight + 8 + "px");
		resultLabel.fadeIn();
	} else {
		resultLabel.fadeOut();
	}
}

function drawWithoutCanvas(i, data, type, drawBase) {
	var barWidth = dataWidth - 6;
	var barLeft = 10 + i * dataWidth;
	var resultBar = $("<div/>");
	
	if (data[type] > 0) {
		var barTotalHeight = calBarHeight(data[type], maximum[type]);
		
		resultBar.attr({
				barType : type,
				barId : i
			});
		resultBar.addClass("drawBar");
		resultBar.addClass(data.browser);
		resultBar.css({
				left : barLeft + "px",
				width : barWidth + "px",
				height : barTotalHeight + "px"
			});
		resultBar.hover(function () {
				showLabel(this);
			});
		
		var resultText = $("<div/>");
		resultText.addClass("drawResult");
		resultText.html(data[type]);
		resultBar.append(resultText);
	}
	
	var shadowBar = $("<div/>").addClass("drawShadow");
	shadowBar.css({
			left : barLeft + "px",
			width : barWidth + "px"
		});
	
	drawBase.append(resultBar);
	drawBase.append(shadowBar);
	drawBase.hover(null, function () {
			for (resultLabel in resultLabels) {
				resultLabels[resultLabel].fadeOut();
			}
		});
}

function draw() {
	// »ñµÃ»æÍ¼ drawBase
	var drawBaseTotal = $("div#total");
	var drawBaseRendering = $("div#rendering");
	var drawBaseSocialNetwork = $("div#socialNetwork");
	var drawBaseComplexGraphics = $("div#complexGraphics");
	var drawBaseData = $("div#data");
	var drawBaseDomOperations = $("div#domOperations");
	var drawBaseTextParsing = $("div#textParsing");
	
	var length = TestDatas.length;
	dataWidth = parseInt((canvasWidth - 20) / length);
	for (var i = 0; i < length; ++i) {
		var testData = TestDatas[i];
		
		drawWithoutCanvas(i, testData, "total", drawBaseTotal);
		drawWithoutCanvas(i, testData, "rendering", drawBaseRendering);
		drawWithoutCanvas(i, testData, "socialNetwork", drawBaseSocialNetwork);
		drawWithoutCanvas(i, testData, "complexGraphics", drawBaseComplexGraphics);
		drawWithoutCanvas(i, testData, "data", drawBaseData);
		drawWithoutCanvas(i, testData, "domOperations", drawBaseDomOperations);
		drawWithoutCanvas(i, testData, "textParsing", drawBaseTextParsing);
	}
	
}

$(function () {
		var table = $("table#tableDatas");
		maximum = {
			total : 0,
			rendering : 0,
			socialNetwork : 0,
			complexGraphics : 0,
			data : 0,
			domOperations : 0,
			textParsing : 0
		};
		
		resultLabels = {
			total : $("div#total .resultLabel"),
			rendering : $("div#rendering .resultLabel"),
			socialNetwork : $("div#socialNetwork .resultLabel"),
			complexGraphics : $("div#complexGraphics .resultLabel"),
			data : $("div#data .resultLabel"),
			domOperations : $("div#domOperations .resultLabel"),
			textParsing : $("div#textParsing .resultLabel")
		};
		
		resultTitles = {
			total : "Total",
			rendering : "Rendering",
			socialNetwork : "Social Network",
			complexGraphics : "Complex Graphics",
			data : "Data",
			domOperations : "Dom Operations",
			textParsing : "Text Parsing"
		};
		
		// Ìî³ä table
		var length = TestDatas.length;
		for (var i = 0; i < length; ++i) {
			var testData = TestDatas[i];
			var row = $("<tr></tr>").addClass(testData.browser);
			if (i % 2) {
				row.addClass("odd");
			}
			row.append($("<td></td>").addClass("name").html(testData.browser));
			row.append($("<td></td>").addClass("version").html(testData.version));
			row.append($("<td></td>").addClass("os").html(testData.os));
			row.append($("<td></td>").addClass("date").html(testData.date));
			row.append($("<td></td>").addClass("total").html(testData.total));
			row.append($("<td></td>").addClass("rendering").html(testData.rendering));
			row.append($("<td></td>").addClass("socialNetwork").html(testData.socialNetwork));
			row.append($("<td></td>").addClass("complexGraphics").html(testData.complexGraphics));
			row.append($("<td></td>").addClass("data").html(testData.data));
			row.append($("<td></td>").addClass("domOperations").html(testData.domOperations));
			row.append($("<td></td>").addClass("textParsing").html(testData.textParsing));
			if (testData.total > maximum.total)
				maximum.total = testData.total;
			if (testData.rendering > maximum.rendering)
				maximum.rendering = testData.rendering;
			if (testData.socialNetwork > maximum.socialNetwork)
				maximum.socialNetwork = testData.socialNetwork;
			if (testData.complexGraphics > maximum.complexGraphics)
				maximum.complexGraphics = testData.complexGraphics;
			if (testData.data > maximum.data)
				maximum.data = testData.data;
			if (testData.domOperations > maximum.domOperations)
				maximum.domOperations = testData.domOperations;
			if (testData.textParsing > maximum.textParsing)
				maximum.textParsing = testData.textParsing;
			table.append(row);
		}
		
		// »­Í¼ÐÎ
		draw();
	});
 
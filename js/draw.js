/**
 * Multi browsers' Peacekeeper results analysis.
 * Drawing part.
 * Author: Sun Junwen
 */
var canvasHeight = 210;
var canvasWidth = 1000;

var canvasTotal;
var canvasRendering;
var canvasSocialNetwork;
var canvasComplexGraphics;
var canvasData;
var canvasDomOperations;
var canvasTextParsing;

var maximum;
var dataWidth;
var canvasLabel;

function Pos(x, y, xInCanvas, yInCanvas) {
	this.x = x;
	this.y = y;
	this.xInCanvas = xInCanvas;
	this.yInCanvas = yInCanvas;
}

function debug(pos, str) {
	$("#debug").html("x: " + pos.x + " y: " + pos.y + "<br/>" +
		"In canvas x: " + pos.xInCanvas + " y: " + pos.yInCanvas + "<br/>" +
		"String: " + str);
}

function getPosition(canvas, e) {
	var x;
	var y;
	if (e.pageX != undefined && e.pageY != undefined) {
		x = e.pageX;
		y = e.pageY;
	} else {
		x = e.clientX + document.body.scrollLeft +
			document.documentElement.scrollLeft;
		y = e.clientY + document.body.scrollTop +
			document.documentElement.scrollTop;
	}
	xInCanvas = x - canvas.offsetLeft;
	yInCanvas = y - canvas.offsetTop;
	
	return new Pos(x, y, xInCanvas, yInCanvas);
}

function getMoveId(pos) {
	if (pos.xInCanvas < 10)
		return  - 1;
	var length = TestDatas.length;
	return parseInt((pos.xInCanvas - 10) / dataWidth);
}

function showLabel(canvas, e, spec, title) {
	var pos = getPosition(canvas, e);
	var yInCanvas = pos.yInCanvas;
	var i = getMoveId(pos);
	if (i >= 0 && i < TestDatas.length && yInCanvas > 0 && yInCanvas < canvasHeight - 10) {
		var result = TestDatas[i];
		
		canvasLabel.html(result['browser'] + " " + result['version'] + "<br/>" +
			result['os'] + "<br/>" +
			title + ": " + result[spec]);
		
		var width = parseInt(canvasLabel.css("width"));
		width /= 2;
		var height = parseInt(canvasLabel.css("height"));
		var barTotalHeight = parseInt(result[spec] / maximum[spec] * (canvasHeight - 60));
		canvasLabel.css("left", (18 + i * dataWidth + canvas.offsetLeft - width) + "px");
		canvasLabel.css("top", (canvas.offsetTop - 65 - height + canvasHeight - barTotalHeight) + "px");
		canvasLabel.fadeIn();
	} else {
		canvasLabel.fadeOut();
	}
}

function totalOnMove(e) {
	showLabel(canvasTotal, e, "total", "Total");
}
function renderingOnMove(e) {
	showLabel(canvasRendering, e, "rendering", "Rendering");
}
function socialNetworkOnMove(e) {
	showLabel(canvasSocialNetwork, e, "socialNetwork", "Social Network");
}
function complexGraphicsOnMove(e) {
	showLabel(canvasComplexGraphics, e, "complexGraphics", "Complex Graphics");
}
function dataOnMove(e) {
	showLabel(canvasData, e, "data", "Data");
}
function domOperationsOnMove(e) {
	showLabel(canvasDomOperations, e, "domOperations", "Dom Operations");
}
function textParsingOnMove(e) {
	showLabel(canvasTextParsing, e, "textParsing", "Text Parsing");
}

function drawCanvas(i, data, result, max, ctx, fillStyle) {
	var barWidth = dataWidth - 6; // 3px each side
	//alert(barWidth);
	if (result > 0) {
		var barTotalHeight = parseInt(result / max * (canvasHeight - 60));
		
		ctx.fillStyle = fillStyle;
		ctx.fillRect(10 + i * dataWidth, 10 + ((canvasHeight - 60) - barTotalHeight), barWidth, barTotalHeight);
		
		if (barTotalHeight > 16 && barWidth > 16) {
			var icon = new Image(); // Create new Image object
			icon.src = 'imgs/icon-' + data.browser + '-16.png';
			ctx.drawImage(icon, barWidth - 6 + i * dataWidth, canvasHeight - 66);
		}
		
		ctx.fillStyle = "black";
		if (data.browser != "chrome") {
			ctx.fillStyle = "white";
		}
		ctx.fillText(result, 15 + i * dataWidth, 20 + ((canvasHeight - 60) - barTotalHeight));
	}
	
	ctx.fillStyle = "black";
	ctx.fillText(data.browser, 10 + i * dataWidth, canvasHeight - 40);
	if (data.browser == "chrome" || data.browser == "ie") {
		var pos = data.version.indexOf(".", data.version.indexOf(".", 0) + 1);
		ctx.fillText(data.version.substr(0, pos), 10 + i * dataWidth, canvasHeight - 30);
		ctx.fillText(data.version.substr(pos + 1), 10 + i * dataWidth, canvasHeight - 20);
	} else {
		ctx.fillText(data.version, 10 + i * dataWidth, canvasHeight - 30);
	}
	ctx.fillText(data.os, 10 + i * dataWidth, canvasHeight - 10);
	ctx.fillStyle = fillStyle;
}

function draw() {
	canvasTotal = $("canvas#total").get(0);
	var contextTotal = canvasTotal.getContext('2d');
	canvasRendering = $("canvas#rendering").get(0);
	var contextRendering = canvasRendering.getContext('2d');
	canvasSocialNetwork = $("canvas#socialNetwork").get(0);
	var contextSocialNetwork = canvasSocialNetwork.getContext('2d');
	canvasComplexGraphics = $("canvas#complexGraphics").get(0);
	var contextComplexGraphics = canvasComplexGraphics.getContext('2d');
	canvasData = $("canvas#data").get(0);
	var contextData = canvasData.getContext('2d');
	canvasDomOperations = $("canvas#domOperations").get(0);
	var contextDomOperations = canvasDomOperations.getContext('2d');
	canvasTextParsing = $("canvas#textParsing").get(0);
	var contextTextParsing = canvasTextParsing.getContext('2d');
	
	var length = TestDatas.length;
	dataWidth = parseInt((canvasWidth - 20) / length);
	
	for (var i = 0; i < length; ++i) {
		var testData = TestDatas[i];
		var fillStyle;
		
		if (testData.browser == "chrome") {
			fillStyle = "#FBD510";
		} else if (testData.browser == "firefox") {
			fillStyle = "#B82805";
		} else if (testData.browser == "ie") {
			fillStyle = "#1071A9";
		} else if (testData.browser == "opera") {
			fillStyle = "#BD0D0D";
		}
		
		drawCanvas(i, testData, testData.total, maximum.total, contextTotal, fillStyle);
		drawCanvas(i, testData, testData.rendering, maximum.rendering, contextRendering, fillStyle);
		drawCanvas(i, testData, testData.socialNetwork, maximum.socialNetwork, contextSocialNetwork, fillStyle);
		drawCanvas(i, testData, testData.complexGraphics, maximum.complexGraphics, contextComplexGraphics, fillStyle);
		drawCanvas(i, testData, testData.data, maximum.data, contextData, fillStyle);
		drawCanvas(i, testData, testData.domOperations, maximum.domOperations, contextDomOperations, fillStyle);
		drawCanvas(i, testData, testData.textParsing, maximum.textParsing, contextTextParsing, fillStyle);
	}
	
	canvasTotal.addEventListener("mousemove", totalOnMove, false);
	canvasRendering.addEventListener("mousemove", renderingOnMove, false);
	canvasSocialNetwork.addEventListener("mousemove", socialNetworkOnMove, false);
	canvasComplexGraphics.addEventListener("mousemove", complexGraphicsOnMove, false);
	canvasData.addEventListener("mousemove", dataOnMove, false);
	canvasDomOperations.addEventListener("mousemove", domOperationsOnMove, false);
	canvasTextParsing.addEventListener("mousemove", textParsingOnMove, false);
}

$(function () {
		var table = $("table#tableDatas");
		canvasLabel = $("<div/>").attr("id", "divCanvasLabel");
		canvasLabel.hide();
		$("body").append(canvasLabel);
		
		maximum = {
			total : 0,
			rendering : 0,
			socialNetwork : 0,
			complexGraphics : 0,
			data : 0,
			domOperations : 0,
			textParsing : 0
		};
		
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
		
		draw();
	});
 
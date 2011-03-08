/**
 * Multi browsers' Peacekeeper results analysis.
 * Drawing part.
 * Author: Sun Junwen
 */
var canvasHeight = 210;
var canvasWidth = 1000;

function drawCanvas(i, data, result, max, ctx, fillStyle, dataWidth) {
	var barWidth = dataWidth - 6; // 3px each side
	//alert(barWidth);
	if (result > 0) {
		var barTotalHeight = parseInt(result / max * (canvasHeight - 60));
		
		ctx.fillStyle = fillStyle;
		ctx.fillRect(10 + i * dataWidth, 10 + ((canvasHeight - 60) - barTotalHeight), barWidth, barTotalHeight);
		
		if (barTotalHeight > 16 && barWidth > 16) {
			var icon = new Image(); // Create new Image object
			icon.src = 'icon-' + data.browser + '-16.png';
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

function draw(maximum) {
	var canvasTotal = $("canvas#total").get(0).getContext('2d');
	var canvasRendering = $("canvas#rendering").get(0).getContext('2d');
	var canvasSocialNetwork = $("canvas#socialNetwork").get(0).getContext('2d');
	var canvasComplexGraphics = $("canvas#complexGraphics").get(0).getContext('2d');
	var canvasData = $("canvas#data").get(0).getContext('2d');
	var canvasDomOperations = $("canvas#domOperations").get(0).getContext('2d');
	var canvasTextParsing = $("canvas#textParsing").get(0).getContext('2d');
	
	var length = TestDatas.length;
	var dataWidth = parseInt((canvasWidth - 20) / length);
	
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
		
		drawCanvas(i, testData, testData.total, maximum.total, canvasTotal, fillStyle, dataWidth);
		drawCanvas(i, testData, testData.rendering, maximum.rendering, canvasRendering, fillStyle, dataWidth);
		drawCanvas(i, testData, testData.socialNetwork, maximum.socialNetwork, canvasSocialNetwork, fillStyle, dataWidth);
		drawCanvas(i, testData, testData.complexGraphics, maximum.complexGraphics, canvasComplexGraphics, fillStyle, dataWidth);
		drawCanvas(i, testData, testData.data, maximum.data, canvasData, fillStyle, dataWidth);
		drawCanvas(i, testData, testData.domOperations, maximum.domOperations, canvasDomOperations, fillStyle, dataWidth);
		drawCanvas(i, testData, testData.textParsing, maximum.textParsing, canvasTextParsing, fillStyle, dataWidth);
	}
}

$(function () {
		var table = $("table#tableDatas");
		
		var maximum = {
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
		
		draw(maximum);
	});
 
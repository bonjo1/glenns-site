<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
<meta charset="utf-8">
<title>Drawing on Canvas</title>
</head>
<body>
    <canvas class="canvas" id="canvas-1" width="400" height="400"></canvas>
    <canvas class="canvas" id="canvas-2" width="400" height="400"></canvas>

    <script>
    var canvas_1 = document.getElementById('canvas-1'),
	context_1 = canvas_1.getContext('2d'),
	canvas_2 = document.getElementById('canvas-2'),
	context_2 = canvas_2.getContext('2d');


/// ---- ROBOT ---- ///
// Feeler
	//Round
	context_1.beginPath();
	context_1.arc(200, 57, 15, 0, 2*Math.PI, false);
	context_1.fillStyle = '#a0abbd';
	context_1.fill();

	//Base
	context_1.beginPath();
	context_1.moveTo(195, 70);
	context_1.lineTo(205, 70);
	context_1.lineTo(205, 100);
	context_1.lineTo(195, 100);

	context_1.fillStyle = '#a0abbd';
	context_1.fill();
	context_1.closePath();

// Hear left
context_1.beginPath();
context_1.moveTo(80, 150);
context_1.lineTo(100, 140);
context_1.lineTo(100, 210);
context_1.lineTo(80, 200);

context_1.fillStyle = '#39517a';
context_1.fill();
context_1.closePath();

// Hear right
context_1.beginPath();
context_1.moveTo(300, 140);
context_1.lineTo(320, 150);
context_1.lineTo(320, 200);
context_1.lineTo(300, 210);

context_1.fillStyle = '#39517a';
context_1.fill();
context_1.closePath();

// Face left
context_1.beginPath();
context_1.moveTo(100, 100);
context_1.lineTo(200, 100);
context_1.lineTo(200, 250);
context_1.lineTo(100, 250);

context_1.fillStyle = '#6384be';
context_1.fill();
context_1.closePath();


// Face right
context_1.beginPath();
context_1.moveTo(200, 100);
context_1.lineTo(300, 100);
context_1.lineTo(300, 250);
context_1.lineTo(200, 250);

context_1.fillStyle = '#4c70af';
context_1.fill();
context_1.closePath();

// Left Eye
context_1.beginPath();
context_1.arc(160, 175, 15,0, 2*Math.PI, false);
context_1.fillStyle = '#ffffff';
context_1.fill();

// Right Eye
context_1.beginPath();
context_1.arc(240, 175, 15,0, 2*Math.PI, false);
context_1.fillStyle = '#ffffff';
context_1.fill();

/// ---- STORMY CLOUD ---- ///

context_2.beginPath();
context_2.moveTo(100, 200);
context_2.lineTo(350, 200);
context_2.bezierCurveTo(400, 200, 400, 100, 350, 100);
context_2.bezierCurveTo(350, 20, 220, 20, 210, 80);
context_2.bezierCurveTo(210, 80, 150, 50, 120, 120);
context_2.bezierCurveTo(120, 120, 50, 140,100, 200);

context_2.fillStyle = '#858585';
context_2.fill();

// Lightning
context_2.beginPath();
context_2.moveTo(240, 200);
context_2.lineTo(290, 200);
context_2.lineTo(270, 240);
context_2.lineTo(310, 240);
context_2.lineTo(230, 330);
context_2.lineTo(250, 280);
context_2.lineTo(200, 280);

context_2.fillStyle = '#ffad10';
context_2.fill();
context_2.closePath();

var canvas = document.getElementById('canvas');
var ctx = canvas.getContext('2d');

ctx.beginPath();
//arc(x,y,r,sAngle,eAngle,counterclockwise);
ctx.arc(75, 75, 50, 0, Math.PI * 2, true); // Outer circle
ctx.moveTo(110, 75);
ctx.arc(75, 75, 35, 0, Math.PI, false); // Mouth (clockwise)
ctx.moveTo(65, 65);
ctx.arc(60, 65, 5, 0, Math.PI * 2, true); // Left eye
ctx.moveTo(95, 65);
ctx.arc(90, 65, 5, 0, Math.PI * 2, true); // Right eye
ctx.stroke();
</script>
<canvas id ="myCanvass" width ="400" height ="500">
</canvas>
<script> 
var  canvas = document.getElementById("myCanvass");

	var context =canvas.getContext('2d');
	
		context.beginPath();
		context.rect(100, 190, 200, 100);
		context.fillStyle = 'gray';
		context.fill();
		context.lineWidth = 5;
		context.strokeStyle = 'red';
		context.stroke();
</script>
<canvas id="myCanvas1"></canvas>
<canvas id="myCanvas1" width="578" height="200"></canvas>
<canvas id="myCanvas" width="578" height="200"></canvas>
<script>
var canvas = document.getElementById('myCanvas');
var context = canvas.getContext('2d');
var centerX = canvas.width / 4	;
var centerY = canvas.height / 2;
var radius = 70;

context.beginPath();
context.arc(centerX, centerY, radius, 0, 2 * Math.PI, false);
context.fillStyle = 'green';
context.fill();
context.lineWidth = 5;
context.strokeStyle = '#003300';
context.stroke();
</script>
<canvas id="awesomeHat" width="500" height="600"></canvas>
<script> 
canvas = document.getElementById("awesomeHat");
hat = canvas.getContext("2d");
hat.beginPath();
hat.strokeStyle = "#754c24";
hat.fillStyle = '#a67c52';
hat.lineWidth = 3;
hat.beginPath();

//the brim
hat.moveTo(60, 270);
hat.bezierCurveTo(250, 520, 450, 130, 450, 290);
hat.bezierCurveTo(440, 470, 200, 470, 50, 300);
hat.bezierCurveTo(20, 265, 35, 255, 45, 265);
//hat.quadraticCurveTo(10, 260, 35, 260);
hat.closePath();

//top of the hat
hat.moveTo(180, 325);
hat.bezierCurveTo(150, 56, 186, 20, 240, 100);
hat.bezierCurveTo(240, 50, 330, 20, 330, 285);
hat.moveTo(330, 283);
hat.quadraticCurveTo(245, 350, 178, 324);

hat.fill();
hat.stroke();	
</script>
<canvas id="cup" width="400" height="300"></canvas>
	<script>
		var c = document.getElementById("cup");
var ctx = c.getContext("2d");
/*==========================
          Cup Body
===========================*/
ctx.beginPath();
ctx.moveTo(60,100);
ctx.bezierCurveTo(60,250,240,250,240,100);
ctx.fillStyle = '#44180B';
ctx.fill();
/*==========================
          Cup Hand
===========================*/
ctx.beginPath();
ctx.moveTo(230,110);
ctx.quadraticCurveTo(280,140,220,170);
ctx.strokeStyle = '#44180B';
ctx.lineWidth = 7;
ctx.stroke();
/*==========================
           Circles
===========================*/
ctx.scale(3,1);
ctx.beginPath();
ctx.arc(50, 100, 30, 0, 2*Math.PI);
ctx.fillStyle = '#DDD3C3';
ctx.fill();

ctx.beginPath();
ctx.arc(50, 100, 27, 0, 2*Math.PI);
ctx.fillStyle = '#44180B';
ctx.fill();

ctx.beginPath();
ctx.arc(50, 110, 25, 0, Math.PI, true);
ctx.fillStyle = '#EAC29A';
ctx.fill();
ctx.beginPath();
ctx.arc(50, 102, 26, 0.1*Math.PI, .9*Math.PI);
ctx.fillStyle = '#EAC29A';
ctx.fill();
/*==========================
           Smoke
===========================*/
ctx.scale(1,1);
ctx.lineWidth = 0.75;
ctx.beginPath();
ctx.moveTo(50,10);
ctx.quadraticCurveTo(60,40,50,50);
ctx.quadraticCurveTo(40,60,50,90);
ctx.moveTo(40,10);
ctx.quadraticCurveTo(50,30,40,55);
ctx.quadraticCurveTo(30,70,40,100);
ctx.moveTo(60,10);
ctx.quadraticCurveTo(70,40,60,50);
ctx.quadraticCurveTo(50,70,60,100);
ctx.shadowBlur=10;
ctx.shadowColor="#282828";
ctx.shadowOffsetX=5;
ctx.shadowOffsetY=-5;
ctx.strokeStyle = 'rgba(255,255,255,.3)';
ctx.lineCap = 'round';
ctx.stroke();
	</script>
<canvas id="canvas"></canvas>
	<script>
function triangle() {
var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');
    
  context.beginPath();
  context.moveTo(75, 50);
  context.lineTo(100, 75);
  context.lineTo(100, 25);
  context.lineTo(75, 50);
  context.stroke();
  context.fill();
}

window.onload = triangle;
	</script>
	<canvas id="canvas5"></canvas>
	<script>
		var canvas = document.getElementById("canvas5");
		var ctx = canvas.getContext("2d");
		ctx.strokeStyle = "#000000";
		ctx.lineWidth = 1;
		function drawMe()
		{   
			var numberOfSides = 8,
			size = 10,
			Xcenter = 150,
			Ycenter = 100;
			ctx.beginPath();
			ctx.moveTo (Xcenter +  size * Math.cos(0), Ycenter +  size *  Math.sin(0));          
			for (var i = 1; i <= numberOfSides; i += 1) 
			{
				ctx.lineTo (Xcenter + size * Math.cos(i * 2 * Math.PI / numberOfSides), Ycenter + size * Math.sin(i * 2 * Math.PI / numberOfSides));
			}
			ctx.stroke();
		}
		drawMe();
	</script>
</body>
</html>
	var context=null;
	var h=100.0;
	var text="";
	var image=null;
	var theString;

	$(window).load(function() {		
	context = document.getElementById("myCanvas").getContext("2d");
	context.fillStyle="black";
	/*image=new Image();
		image.src = "images/circuit2.png";
		$(image).load(function() {
		context.drawImage(image, 10, 10,100,h);
		});*/

		//context.fillRect(0,0,context.canvas.width,context.canvas.height);
		/*theString="0";
		context.font="5pt Georgia";
		context.fillStyle="green";
		context.strokeStyle="white";
		context.fillText(theString,20,20);
		context.strokeText(theString,20,20);	
		setInterval(animateLoop, (1/30) * 1000);*/
	});

	

	function animateLoop()
	{
		context.clearRect(0, 0, context.canvas.width, context.canvas.height);
		drawContext();
		theString+="1";		
	}

	function drawContext()
	{	
		context.fillStyle="black";
		context.fillRect(0,0,context.canvas.width,context.canvas.height);
		

		theString="0";
		context.font="5pt Georgia";
		context.fillStyle="green";
		context.strokeStyle="white";
		context.fillText(theString,20,20);
		context.strokeText(theString,20,20);	
	}
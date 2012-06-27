	var context=null;
	var w=0.0;
	var text="";

	$(window).load(function() {

	$("#myCanvas").attr("width", $(document).width() + "px")
				  .attr("height", 800 + "px");

	context = document.getElementById("myCanvas").getContext("2d");
	context.fillStyle="black";
	context.fillRect(10,10,context.canvas.width,context.canvas.height);

	var theString="Gravita";
		context.font="110pt Georgia";
		context.fillStyle="green";
		context.strokeStyle="white";
		context.fillText(theString,300,300);
		context.strokeText(theString,300,300);

		var theString1="Fill the missing word to enter the site";
		context.font="40pt Georgia";
		context.fillStyle="green";
		context.strokeStyle="white";
		context.fillText(theString1,200,600);
		context.strokeText(theString1,200,600);
	
});

	$(window).keypress(function(e){
		context.clearRect(0,0,context.canvas.width,context.canvas.height);
	context.fillStyle="black";
	context.fillRect(10,10,context.canvas.width,context.canvas.height);
	text = String.fromCharCode(e.which);
	if(text=="s")
	{
	var theString="Gravita";
		context.font="110pt Georgia";
		context.fillStyle="green";
		context.strokeStyle="white";
		context.fillText(theString,300,300);
		context.strokeText(theString,300,300);

		
		context.font="110pt Georgia";
		context.fillStyle="green";
		context.strokeStyle="white";
		context.fillText(text,790,300);
		context.strokeText(text,790,300);

		loading();

	}
	else
	{
		var theString="Gravita";
		context.font="110pt Georgia";
		context.fillStyle="green";
		context.strokeStyle="white";
		context.fillText(theString,300,300);
		context.strokeText(theString,300,300);

		context.font="110pt Georgia";
		context.fillStyle="green";
		context.strokeStyle="white";
		context.fillText(text,790,300);
		context.strokeText(text,790,300);

		var theString1="Fill the missing word to enter the site";
		context.font="40pt Georgia";
		context.fillStyle="green";
		context.strokeStyle="white";
		context.fillText(theString1,200,600);
		context.strokeText(theString1,200,600);
	}

	});
	 

	function loading()
	{
		setInterval(animateLoop, (1/30) * 1000);
	}

	function animateLoop()
	{
		context.clearRect(0, 0, context.canvas.width, context.canvas.height);
		drawContext();
		w+=2.0;
		if(w==200.0)
		{
			location.href="menueffect.php";
		}
	}

	function drawContext()
	{


		context.fillStyle="black";
		context.fillRect(10,10,context.canvas.width,context.canvas.height);

		var theString="Gravita";
		context.font="110pt Georgia";
		context.fillStyle="green";
		context.strokeStyle="white";
		context.fillText(theString,300,300);
		context.strokeText(theString,300,300);

		
		context.font="110pt Georgia";
		context.fillStyle="green";
		context.strokeStyle="white";
		context.fillText(text,790,300);
		context.strokeText(text,790,300);


		context.fillStyle="green";
		context.strokeStyle="white";
		context.fillRect(400,450,w,50);

		var loadingText="Loading..";
		context.font="40pt Georgia";
		context.fillStyle="white";
		context.strokeStyle="white";
		context.fillText(loadingText,450,600);
		context.strokeText(loadingText,450,600);
	}

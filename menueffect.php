<!DOCTYPE>
<html>
<head>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/menualgorithm.js"></script>
<!--
<script src="js/util.js"></script> 
-->
<script src="js/rotate-box.js"></script>

 
<?php
	require('includes.php');
?>
<link rel="stylesheet" type="text/css" href="css/custom.css">
<style type="text/css">

#header{
	width:100%;
	height:100px;
	font-size:20px;
	background-color:white;
	padding:20px;
}
/*
#content{
	width:100%;
	height:800px;
	background-color:white;
	color:white;	
	font-size:30px;	
}
*/
#footer{
	width:100%;
	height:40px;
	padding:10px;
	font-size:18px;
	background-color:#eee;
	border:2px solid darkgreen;
}
    
    .container {
      width: 700px;
      height: 700px;
      position: relative;
      
      
      margin: 0px auto;
      
      -webkit-perspective: 0px;
         -moz-perspective: 0px;
          -ms-perspective: 0px;
           -o-perspective: 0px;
              perspective: 0px;
    }
    
    #cube {
      width: 90%;
      height: 90%;
      
      -webkit-transform-style: preserve-3d;
         -moz-transform-style: preserve-3d;
          -ms-transform-style: preserve-3d;
           -o-transform-style: preserve-3d;
              transform-style: preserve-3d;
      -webkit-transition: -webkit-transform 1s;
         -moz-transition: -moz-transform 1s;
          -ms-transition: -ms-transform 1s;
           -o-transition: -o-transform 1s;
              transition: transform 1s;
    }
    
    #cube figure {
      display: block;
      position: absolute;
      left:1px;
      
      width: 496px;
      height: 496px;
      
      
      font-size: 120px;
      font-weight: bold;
      color: white;
      text-align: center;
    }
    
    #cube.panels-backface-invisible figure {
      -webkit-backface-visibility: hidden;
         -moz-backface-visibility: hidden;
          -ms-backface-visibility: hidden;
           -o-backface-visibility: hidden;
              backface-visibility: hidden;
    }
    
 

    /*#cube .front  { background: white;opacity:0.7; }
    #cube .back   { background: white;opacity:0.7; }
    #cube .right  { background: white;opacity:0.7; }
    #cube .left   { background: white;opacity:0.7; }
    #cube .top    { background: white;opacity:0.7; }
    #cube .bottom { background: white;opacity:0.7; }*/


    #cube .front  {
      -webkit-transform: translateZ( 240px );
         -moz-transform: translateZ( 240px );
          -ms-transform: translateZ( 240px );
           -o-transform: translateZ( 240px );
              transform: translateZ( 240px );

              background-image:url("images/mhome.png");

       -webkit-backface-visibility: hidden;
         -moz-backface-visibility: hidden;
          -ms-backface-visibility: hidden;
           -o-backface-visibility: hidden;
              backface-visibility: hidden;
    }
    #cube .back   {
      -webkit-transform: rotateX( -180deg ) translateZ( 240px );
         -moz-transform: rotateX( -180deg ) translateZ( 240px );
          -ms-transform: rotateX( -180deg ) translateZ( 240px );
           -o-transform: rotateX( -180deg ) translateZ( 240px );
              transform: rotateX( -180deg ) translateZ( 240px );

              background-image:url("images/mabout.png");
       -webkit-backface-visibility: hidden;
         -moz-backface-visibility: hidden;
          -ms-backface-visibility: hidden;
           -o-backface-visibility: hidden;
              backface-visibility: hidden;
    }
    #cube .right {
      -webkit-transform: rotateY(   90deg ) translateZ( 240px );
         -moz-transform: rotateY(   90deg ) translateZ( 240px );
          -ms-transform: rotateY(   90deg ) translateZ( 240px );
           -o-transform: rotateY(   90deg ) translateZ( 240px );
              transform: rotateY(   90deg ) translateZ( 240px );

              background-image:url("images/mhospitality.png");

       -webkit-backface-visibility: hidden;
         -moz-backface-visibility: hidden;
          -ms-backface-visibility: hidden;
           -o-backface-visibility: hidden;
              backface-visibility: hidden;
    }
    #cube .left {
      -webkit-transform: rotateY(  -90deg ) translateZ( 240px );
         -moz-transform: rotateY(  -90deg ) translateZ( 240px );
          -ms-transform: rotateY(  -90deg ) translateZ( 240px );
           -o-transform: rotateY(  -90deg ) translateZ( 240px );
              transform: rotateY(  -90deg ) translateZ( 240px );
              background-image:url("images/mcontactus.png");

       -webkit-backface-visibility: hidden;
         -moz-backface-visibility: hidden;
          -ms-backface-visibility: hidden;
           -o-backface-visibility: hidden;
              backface-visibility: hidden;
    }
    #cube .top {
      -webkit-transform: rotateX(   90deg ) translateZ( 240px );
         -moz-transform: rotateX(   90deg ) translateZ( 240px );
          -ms-transform: rotateX(   90deg ) translateZ( 240px );
           -o-transform: rotateX(   90deg ) translateZ( 240px );
              transform: rotateX(   90deg ) translateZ( 240px );

              background-image:url("images/mfaq.png");
       -webkit-backface-visibility: hidden;
         -moz-backface-visibility: hidden;
          -ms-backface-visibility: hidden;
           -o-backface-visibility: hidden;
              backface-visibility: hidden;
    }
    #cube .bottom {
      -webkit-transform: rotateX(  -90deg ) translateZ( 240px );
         -moz-transform: rotateX(  -90deg ) translateZ( 240px );
          -ms-transform: rotateX(  -90deg ) translateZ( 240px );
           -o-transform: rotateX(  -90deg ) translateZ( 240px );
              transform: rotateX(  -90deg ) translateZ( 240px );

              background-image:url("images/mevents.png");
       -webkit-backface-visibility: hidden;
         -moz-backface-visibility: hidden;
          -ms-backface-visibility: hidden;
           -o-backface-visibility: hidden;
              backface-visibility: hidden;
    }

    #cube.show{
      -webkit-transform: translateZ( 240px );
         -moz-transform: translateZ( 240px );
          -ms-transform: translateZ( 240px );
           -o-transform: translateZ( 240px );
              transform: translateZ( 240px );
              background-image:url("images/coreteam.png");
            }
    
    #cube.show-front {
      -webkit-transform: translateZ( -240px );
         -moz-transform: translateZ( -240px );
          -ms-transform: translateZ( -240px );
           -o-transform: translateZ( -240px );
              transform: translateZ( -240px );

              

       -webkit-backface-visibility: hidden;
         -moz-backface-visibility: hidden;
          -ms-backface-visibility: hidden;
           -o-backface-visibility: hidden;
              backface-visibility: hidden;
    }
    #cube.show-back {
      -webkit-transform: translateZ( -240px ) rotateX( -180deg );
         -moz-transform: translateZ( -240px ) rotateX( -180deg );
          -ms-transform: translateZ( -240px ) rotateX( -180deg );
           -o-transform: translateZ( -240px ) rotateX( -180deg );
              transform: translateZ( -240px ) rotateX( -180deg );

       -webkit-backface-visibility: hidden;
         -moz-backface-visibility: hidden;
          -ms-backface-visibility: hidden;
           -o-backface-visibility: hidden;
              backface-visibility: hidden;

    }
    #cube.show-right {
      -webkit-transform: translateZ( -240px ) rotateY(  -90deg );
         -moz-transform: translateZ( -240px ) rotateY(  -90deg );
          -ms-transform: translateZ( -240px ) rotateY(  -90deg );
           -o-transform: translateZ( -240px ) rotateY(  -90deg );
              transform: translateZ( -240px ) rotateY(  -90deg );


       -webkit-backface-visibility: hidden;
         -moz-backface-visibility: hidden;
          -ms-backface-visibility: hidden;
           -o-backface-visibility: hidden;
              backface-visibility: hidden;
    }
    #cube.show-left {
      -webkit-transform: translateZ( -240px ) rotateY(   90deg );
         -moz-transform: translateZ( -240px ) rotateY(   90deg );
          -ms-transform: translateZ( -240px ) rotateY(   90deg );
           -o-transform: translateZ( -240px ) rotateY(   90deg );
              transform: translateZ( -240px ) rotateY(   90deg );


       -webkit-backface-visibility: hidden;
         -moz-backface-visibility: hidden;
          -ms-backface-visibility: hidden;
           -o-backface-visibility: hidden;
              backface-visibility: hidden;
    }
    #cube.show-top {
      -webkit-transform: translateZ( -240px ) rotateX(  -90deg );
         -moz-transform: translateZ( -240px ) rotateX(  -90deg );
          -ms-transform: translateZ( -240px ) rotateX(  -90deg );
           -o-transform: translateZ( -240px ) rotateX(  -90deg );
              transform: translateZ( -240px ) rotateX(  -90deg );


       -webkit-backface-visibility: hidden;
         -moz-backface-visibility: hidden;
          -ms-backface-visibility: hidden;
           -o-backface-visibility: hidden;
              backface-visibility: hidden;
    }
    #cube.show-bottom {
      -webkit-transform: translateZ( -240px ) rotateX(   90deg );
         -moz-transform: translateZ( -240px ) rotateX(   90deg );
          -ms-transform: translateZ( -240px ) rotateX(   90deg );
           -o-transform: translateZ( -240px ) rotateX(   90deg );
              transform: translateZ( -240px ) rotateX(   90deg );


       -webkit-backface-visibility: hidden;
         -moz-backface-visibility: hidden;
          -ms-backface-visibility: hidden;
           -o-backface-visibility: hidden;
              backface-visibility: hidden;
    }

</style>


	
</head>
<body id="body">
	<div id="left-pane">
		<span id="open">>></span>
	</div>

	<div id="nav-wrapper">
	<br/><br/>
	<div id="left-pane-nav">
		<span id="close"><<</span>
	</div><!--left-pane-nav-->
		<div id="nav">
			<a href="#" data-filter="*" id="nav-header">All</a>
			<a href="#" data-filter=".cat1" id="nav-header">BuiltriX</a>
			<a href="#" data-filter=".cat2" id="nav-header">Quiz</a>
			<a href="#" data-filter=".cat3" id="nav-header">Informals</a>
			<a href="#" data-filter=".cat4" id="nav-header">PrizeMoney</a>
		</div><!--nav-->
		<br><br><br><br>		
<?php
	$dbc = mysql_connect("localhost","root","ambigous");
	mysql_select_db("test",$dbc);
	$result = mysql_query("SELECT * FROM gravitas");
?>
<div id=content>
<?php
  while($row=mysql_fetch_array($result))
  {
	  echo "<div class='box cat" . $row['category'] . "' onclick=\"show('" . $row['id'] . "')\">";
	  echo "<h2 class='box-title'>" . $row['event_name'] . "</h2>";
	  echo "<div class='box-text'>Sample </div>";
	  echo "</div>";
  }
  mysql_close($dbc);
?>
		</div><!--content-->
	</div><!--nav-wrapper-->
<div id=body-wrapper>  
<div id="header">
	<img src="images/vitlogo.png" style="position:relative;left:-400px;bottom:30px;">
	<img src="images/gravitaslogo.png" style="width:240px;height:130px;position:relative;left:-100px; ">
  <img src="images/greenlogo.jpg" style="width:140px;height:90px;position:absolute;right:150px;top:50px; ">
	</div>

	<hr style="height:10px;background-color:green;">
	<hr style="height:10px;background-color:black;position:relative;top:-10px;">
  <div style="height:50px;width:100%;background-color:green;color:white;padding:5px;font-size:24px;"><marquee behaviour="scroll" scrollamount="3" direction="up">Welcome To Gravitas 2012<br><br><br><br>Check out the new exciting events this year<br><br><br><br>Registration for gravitas 2012 will begin soon</marquee></div>

<div id="content" style="background-image:url('images/bg1.png');"> 
	<section class="container">
    <div id="cube">
      <figure class="front"></figure>
      <figure class="back"></figure>
      <figure class="right"></figure>
      <figure class="left"></figure>
      <figure class="top"></figure>
      <figure class="bottom"></figure>
    </div>
  	</section>

  	<p id="show-buttons">
      <button class="show-front" style="background-image:url('images/icons/mhome.png');width:50px;height:50px;"></button><br><br>
      <button class="show-back" style="background-image:url('images/icons/mabout.png');width:50px;height:50px;"></button><br><br>
      <button class="show-right" style="background-image:url('images/icons/mhospitality.png');width:50px;height:50px;"></button><br><br>
      <button class="show-left" style="background-image:url('images/icons/mcontact.png');width:50px;height:50px;"></button><br><br>
      <button class="show-top" style="background-image:url('images/icons/mevents.png');width:50px;height:50px;"></button><br><br>
      <button class="show-bottom" style="background-image:url('images/icons/mevents.png');width:50px;height:50px;"></button><br>
    </p>

	</div>
  <div style="width:200px;height:590px;background-color:green;position:absolute;top:300px;right:20px;opacity:0.7;color:white;font-size:20px;padding:30px;">Sponsors logos in vertical order</div>
<!--process-->

	<div id="footer"><p style="text-align:center;"> Copyright Gravitas 2011. All Rights Reserved</p></div>
</div>
</div> 
<button id="process-close">Close</button>
	<div id="process">
	</div>
</body><!--body-->
</html>

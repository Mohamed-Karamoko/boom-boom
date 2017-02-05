<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>DJ BOOM BOOM-Site Officiel</title>
	<link href="https://fonts.googleapis.com/css?family=Ruthie" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/style_menu.css" />
		<link rel="stylesheet" href="css/w3.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!--<link rel="stylesheet" href="css/bootstrap.css">-->
	<link rel="stylesheet" type="text/css" href="assets/css/page-style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/hexagons.min.css"> 
	<link rel="stylesheet" type="text/css" href="css/style225.css"> 
		
			<style type="text/css"> 
			 div.flow{
				 z-index: 1000;
		   position: fixed;
		   display:none;
		   top: 0;
		   left:0;
		   right:0;
		   bottom:0;
		   background-color: rgba(0,0,0,0.4);
		   
	   }
				div.box{
					display:block;
					width:730px;
					height:500px;
					background-color: #fff;
					margin:100px auto;
					
				}
				
				 .closeWindow{
									  color:#000;
									  /*margin-top:-500px;*/
									  marrgin-top:100px;
									  margin-left:670px;
									  border-radius: 4px;
									  color:#fff;
									  background-color: #000;
									  top: 0;
									  
								  }

			
			</style>
		
	
</head>
<body>


	
	<div class="content">  
	
			<?php  include ('title_pro.php'); ?>
			<?php include('mon_menu.php'); ?>
			<?php include("script_menu.php");  ?>
			<?php include ("slides.php"); ?>
				<?php include("performances.php"); ?>
			<?php #include ("inc/slides_JS.php"); ?>
			<?php  include("content-show.php");   ?>
			<?php  include("show_JS.php");   ?>
			<?php include("follow.php"); ?>
		
	</div>
	
	
	
	


<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

	<script src="js/jquery-3.1.1.js"></script>
<script src="assets/js/jquery-2.1.0.min.js"></script>
	<script src="assets/js/hexagons.min.js"></script>
	
	
	
</body>
</html>
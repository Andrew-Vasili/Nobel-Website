<<<<<<< Updated upstream:Website/index.html
<!DOCTYPE html>
<html>
<head>
	<!--Insert css file url below-->
<link href='http://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="indexStylesheet.css">
	<!--Insert page title below-->
	<title></title>
</head>
<body> 
	<!--header of page goes below-->
	<header>
		<figure>
			<img src="images/Logo.png" alt="logo">
		</figure> 
		<section>
			<div id="name"></div>
			<div id="searchbar"></div>
			<div id="social"></div>
		</section>
	</header>
	
=======
<?php include 'header.php';?>

>>>>>>> Stashed changes:production/index.php
	<!--Main content of page goes below-->
	<main>
	<!--class for the entire grid-->
		<article class="medal_images" class="art">
		<!--the images of the left-->
			<article id="left">
				<!--Nobel prize on Physics-->
				<article id="physics_medal" class="art">
				<p>
					Physics
					</p>
				</article>
				
				<!--Nobel prize on Medicine-->
				<article id="medicine_medal" class="art">
					<p>Chemistry</p>
				</article>
				
				<!--Nobel prize on Peace-->
				<article id="peace_medal"class="art">
					<p>Medicine</p>
				</article>
			</article>
			
			<!--the images for the right-->
			<article id="right">
				<!--Nobel prize on Chemistry-->
				<article id="chemistry_medal" class="art">
					<p>Literature</p>
				</article>
				
				<!--Nobel prize on Literature-->
				<article id="literature_medal"class="art">
					<p>Peace</p>
				</article>
				
				<!--Nobel prize for Economic Sciences-->
				<article id="economicSciences_medal"class="art">
					<p>Economic Sciences</p>
				</article>
			</article>
		</article>
	</main>
	
<?php include 'footer.php';?>
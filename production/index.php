<<<<<<< HEAD
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
=======
<!DOCTYPE html>
<html>
<head>
	<!--Insert css file url below-->

	<link href='http://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" media ="screen and (max-width: 700px)" type="text/css" href="indexMobile.css" />
    <link rel="stylesheet" media ="screen and (min-width: 701px)" type="text/css" href="indexStyle.css">
	<!--Insert page title below-->
    <title>Nobel Prize</title>
</head>
<body>
    <!--header of page goes below-->
    <header>
    	<section>
        <section>
        <figure id="logo">
            <img id="logo" src="images/logo.png" alt="logo">
            <!--Removed figcaption-->	
        </figure> 
   		<ul>
   			<li><a href="/index.php">Home</a></li>
		  	<li><a href="/random.php">Random</a></li>
		  	<li><a href="/birthday.php">Birthday</a></li>
		</ul>
        </section>
    </header>
	
	<!--Main content of page goes below-->
	<main>
	<!--class for the entire grid-->
		<article class="medal_images" class="art">
		<!--the images of the left-->
			<article id="left">
				<!--Nobel prize on Physics-->
				<a href="/decade.php?category=physics">
					<article id="physics_medal" class="art">
						<p class="index">Physics</p>
					</article>
				</a>
				
				<!--Nobel prize on Medicine-->
				<a href="/decade.php?category=medicine">
					<article id="medicine_medal" class="art">
						<p class="index">Medicine</p>
					</article>
				</a>
				
				<!--Nobel prize on Peace-->
				<a href="/decade.php?category=peace">
					<article id="peace_medal"class="art">
						<p class="index">Peace</p>
					</article>
				</a>
			</article>
			
			<!--the images for the right-->
			<article id="right">
				<!--Nobel prize on Chemistry-->
				<a href="/decade.php?category=chemistry">
					<article id="chemistry_medal" class="art">
						<p class="index">Chemistry</p>
					</article>
				</a>
				
				<!--Nobel prize on Literature-->
				<a href="/decade.php?category=literature">
					<article id="literature_medal"class="art">
						<p class="index">Literature</p>
					</article>
				</a>
				
				<!--Nobel prize for Economic Sciences-->
				<a href="/decade.php?category=economics">
					<article id="economicSciences_medal"class="art">
						<p class="index">Economic Sciences</p>
					</article>
				</a>
			</article>
		</article>
	</main>
	
	<!--Footer (if necessary)-->
	<footer>
	</footer>
</body>

</html>
>>>>>>> de7e57b1a445fc42ff38c4e42562549f7e299122

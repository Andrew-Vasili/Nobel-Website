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

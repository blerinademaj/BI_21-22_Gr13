<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="shortcut icon"  type="image/x-icon" href="img/favicon.png" />
	<meta charset="utf-8">
	<title>Historitë tuaja</title>
	<link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="style/responsive.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style/storjet.css">
<style type="text/css">
	body{
	background-image: url("img/creamybackground.jpg");
  background-repeat: repeat;
  background-attachment: fixed;
}
	@font-face {
	font-family: "Roboto";
	src:url(fonts/Roboto-Thin.ttf);
	font-style: normal;
	font-weight: 100;
}
</style>
</head>
<body>
	<div id="wrapper" class="wrapper">
		<header id="head">
			<div class="wrapper1">
			<div class="logo">
				<a href="#">Historitë tuaja</a>
			</div>
			
       				    <div class="search">
					<form action="post">
						<input type="text" placeholder="Kërko në faqe">
						<button type="submit"><i class="fas fa-search"></i></button>
					</form>
				    </div>
				<br>
				<br>
				<br>
					<nav>
		 			     <ul class="navigation">
				  		 <li><a href="ballina.php">BALLINA</a></li>
				  		 <li><a href="#">FULL WIDTH</a></li>
				   		 						 
						 <li id="dropdowni"><a href="#">KATEGORITË</a>
							<ul>    
								<li><a href="mode.php">Modë</a></li>
								<li><a href="shendet.php">Shëndet</a></li>
								<li><a href="hobi.php">Hobi</a></li>
								<li><a href="storjet.php">Storje</a></li>
							</ul>
						</li>

						<li><a href="#">PORTFOLIO</a></li>
				   		 <li><a href="gallery.php">GALERIA</a></li>
				  	     </ul>
	      				</nav>
					</div>	
					
		 		</header>
			<?php
			class Person {
				private $name = 'Vanesa';
				private $lastname = 'Smith';

public function __construct($name, $lastname)
{
	$this->name=$name;
		$this->lastname=$lastname;
}
public function __destruct()
{
	echo "I am deleted: " .$this->name.PHP_EOL;
}
public function getName(){
	return $this->name;
}
public function getlastName(){
	return $this->lastname;
}
}
	class Author extends Person
	{
		private $book;

		function __construct($name, $lastname, $book)
		{
			$this->name=$name;
				$this->lastname=$lastname;
				$this->book=$book;
		}
	}
	$person1 = new Person('Vanesa', 'Smithh');
	$author1 = new Author('Filan', 'Fisteku', 'Krim dhe ndeshkim');


			 ?>


			
	         <main>      	 

				<section style="padding-top: 140px; padding-bottom: 0px; font-size: large; width: 100%;">
					<div class="facilis_title" style="transform: translate(70px, 20px);">
						<h2>Historia e Vanesës</h2>
					</div>
				</section>
					
						
			  <img src="img/pikture.jpg" alt="photo" style="float:left;  width:400px;height:200px; padding-right:10px; padding-left: 10px; ">	
			  <p style="padding-left: 5px; text-align: left; padding-right: 5px; font-family: Roboto; "> Pershendetje, unë quhem Vanesa dhe sot kam vendosur ta ndaj historinë time me ju.
			  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur
			  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. </p>
			  <section id="footer_ContactUs">
				<ul>
					<li>
						<div class="f_ContactUs">
						    <h4>Na kontaktoni</h4>	
							<address>
						   
						   Gazeta Paperplane  <br>
						   Rr. "Pjetër Bogdani"<br>
						   Prishtinë, Kosovë <br>
						   10000 <br>
						   Tel: <?php
  							 $ip = "+383.44.111.000"; // nr.tel
   							$iparr = preg_split ("/\./", $ip); 
   
  							 print "$iparr[0] ";
  							 print "$iparr[1] ";
 						         print "$iparr[2] ";
  							 print "$iparr[3] ";
								?> 
								<br>
						   Fax: +383 38 111 000 <br>
						   E-mail: paperplane-news@gmail.com <br>
						   
							</address>
						   </div>
					   </li>
						   <li>
					   <div class="f_ContactUs">
						   <h4>Vegëza </h4>
						   <ul>
							   <li><a href="https://www.timesnownews.com/">Gazeta Times Now</a></li>
							   <! -- si të bëjmë contact us shembull tek qekjo më poshtë -->
							   <li><a href="http://washingtonexaminer.com/">Gazeta Washington Examiner</a></li> 
							   <li><a href="https://www.paperplane.com/">Paperplane Flyer</a></li>
							   <li><a href="https://www.paperplane.org/">Paper Airplanes</a></li>
						   </ul>
						   </div>
					   </li>
				   
					   <li>
						<div class="f_ContactUs">
						   <h4>Nga faqja </h4>
						   <h3>
							  <?php
  								 $line = "Vi is the greatest word processor ever created!";
 
   
  								 if (preg_match("/\bVi\b/i", $line, $match)) :
    								  print "Menaxhimi i faqes";
   								   endif;
							?>	</h3>
						   <p>
							  Kjo faqe kontrollohet dhe menaxhohet nga stafi i gazetës Paperplane. <br>
							  Gazeta filloi si projekt gjatë studimeve në fakultet.
							  </p>
					   
						</div>
						  </li>
				   
						   <li>
						  <div class="f_ContactUs">
						   <h4> Porositni gazetën e shtypur </h4>
						   <div class="footer_form">
							   <form action="">
								<input type="text" placeholder="Emri">
							   <input type ="email" placeholder="E-mail-i">
							   <input id="submitbutton" type="submit" value="SUBMIT">
							   </form>
							   </div>
						   </div>
					   </li>
				   </ul>
			   <ul id="icons" class="social-icons">
					<li><a href="https://www.instagram.com/paperplanemtl/"><i id="instagram" class="fab fa-instagram"></i></a></li>
					<li><a href="https://www.facebook.com/paperplane.flyhigh/"><i id="facebook" class="fab fa-facebook"></i></a></li>
					<li><a href="https://twitter.com/PaperPlaneTF"><i id="twitter" class="fab fa-twitter"></i></a></li>
					</ul>
					<br> <br>
			   </section>
		   
		   <footer>
				<div class="footer_text">
					<p> 
						<?php
   						  $copy_date = "Copyright 	&copy; 2022";	
					          $copy_date = preg_replace("([0-9]+)", "2022", $copy_date);
   
  					           print $copy_date;
						?>
						-All Rights Reserved - Domain Name
					<span> 
						Template by OS Templates
					</span>
				     </p>
			        </div>
			  </footer>	
		</main>	
	</div>		
  </body>
	 <script src="Skript/storymain.js" ></script>
  </html>

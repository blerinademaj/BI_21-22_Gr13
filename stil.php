<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon"  type="image/x-icon" href="img/favicon.png" />
  <meta charset="utf-8">
  <title>Modë</title>
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/responsive.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600;700&display=swap"> 
	  <script type="text/javascript">
var now = new Date();
var hours = now.getHours();
//dita
if (hours > 6 && hours < 19){
 document.write ('<body style="background-color: #f0cef2">');
}
//nata
else {
 document.write ('<body style="background-color:#f0e5c9">');
}

</script>
</head>
<body>
	<div id="wrapper" class="wrapper">
		<header id="head">
			<div class="wrapper1">
				<div class="logo">
					<a href="#">Modë</a>
				</div>
			
				    <div class="search">
					<form action="post">
						<input type="text" placeholder="Kërko në faqe">
						<button type="submit"><i class="fas fa-search"></i></button>
					</form>
				    </div>
				    <br><br><br>
					<nav>
		 			     <ul class="navigation">
						  <li><a href="ballina.php">BALLINA</a></li>
				  		 <li><a href="Ukraina.php">UKRAINA</a></li>
						   
						 <li id="dropdowni"><a href="#">KATEGORITË</a>
							<ul>    
								<li><a href="stil.php">STIL</a></li>
								<li><a href="shendetesia.php">SHËNDETËSI</a></li>
								<li><a href="hobi.php">HOBI</a></li>
							</ul>
						 </li>						   

				   		 <li><a href="loja.php">LOJË</a></li>
				   		 <li><a href="horoskopi.php">HOROSKOPI</a></li>
						
						<li id="dropdowni"><a href="#">KYÇU/REGJISTROHU</a>
								<ul>    
									<li><a href="dragdrop.php">Kyçu</a></li>
									<li><a href="regjistrimi.php">Regjistrohu</a></li>
									<li><a href="contact.php">Kontaktoni</a></li>
								</ul>
						</li>					
				  	     </ul>
	      				</nav>
				</div>	
		 	</header>
			
		        			
	         <main>
			  		 
								
					
				<section style="padding-top: 140px;" id="facilis">
					<div class="facilis_title">
						<h2 style="padding-top: 20px;"><?php
				                      $string = " \n Shumëçka nga bota e modës \t\t";
									  echo trim($string);
			   					?>
						</h2>
						<div class="facilis_border"></div>
					</div>
						     
					<div class="facilis_content"> 
					     <ul>
					        <li>
								<div class="single_facilis" >
									<img src="img/trendet2020.jpg" width="300" height="170" alt="img1">
									<h4><?php
				                    			  $string = " \n TRENDET 2020 \t\t";
									  echo trim($string);
			   						?></h4>
									<p><a href="https://www.thetrendspotter.net/fashion-trends-from-spring-summer-2019-fashion-weeks/" target="_blank">
									   <?php
				                    			   $string = " \n 10 stile trendi vjeshtore që dominuan në vitin 2020 \t\t";
				                     			  echo ltrim($string);
			                      				  ?>
										</a></p>
									 <p><a href="https://www.cosmopolitan.com/style-beauty/fashion/g30256598/fashion-trends-2020/" target="_blank">
									      <?php
				                     				  $string = " \n Trende të 2020-tës që do iu përcjellin edhe në 2021-tën \t\t";
				                      				   echo rtrim($string);
			                        				?>
										 </a></p>
									 <a href="https://www.vogue.com/article/fall-2020-biggest-street-style-trends" target="_blank">
									     <?php
										$number = 2020;
										printf("8 Brende e veshjeve vjeshtore me çmim: %1\$.2f $
										<br>Brende e veshjeve me te shituara: %1\$u",$number);
										?></a>
						   		</div>
					       </li>
						     
				            <li>
								<div class="single_facilis" >
						  			<img src="img/trendet2021.jpg" width="300" height="170" alt="img2">
						  			<h4>TRENDET 2021</h4>
						  			<p><a href="https://www.harpersbazaar.com/fashion/fashion-week/g34074135/spring-2021-fashion-trends/" target="_blank">
									   <?php
				                     				  $string = " \n 12 trende të koleksioneve për pranverën 2021 \t\t";
				                      				   echo ltrim($string);
			                       					 ?>
										</a></p>
								        <p><a href="https://www.net-a-porter.com/en-us/porter/article-844911deeddee838/fashion/art-of-style/ss21-fashion-trends" target="_blank">
									    <?php
				                       				$string = " \n  Si t'i kombinojmë veshjet e të gjitha stileve në vitin 2021 \t\t";
				                      				 echo rtrim($string);
			                       				     ?>
										</a>	</p>
								        <p><a href="https://www.pantone.com/articles/fashion-color-trend-report/new-york-fashion-week-spring-summer-2021">
									   Ngjyrat e veshjeve që priten të dominojnë në vitin 2021</a></p>
					   			</div>
							</li>
						     
							<li>
					   			<div class="single_facilis" >
									<img src="img/more1.jpg" width="300" height="170" alt="img1">   
					     			
					      			<p><?php
				                     			  $string = " \n  Bob Dylan prinë në listën e 50 artistëve meshkuj më me stil.  \t\t";
				                     			  echo ltrim($string);
			                       				 ?> 
								  <a href="https://www.esquire.com/style/advice/g799/most-stylish-musicians/" target="_blank">Lista.</a></p>
							    <!--    <p> - Fustanet janë veshja e dytë më e vjetër. Madje deri ne vitet 1600-1700 edhe burrat edhe gratë i vishnin 
										ato. 
									<a href="https://www.boldsky.com/fashion/facts/history-of-skirts-second-oldest-garment-known-to-mankind-088840.html" target="_blank">
									   Fustanet.</a></p>  -->
								<p> <abbr title="Bulletproof Boy Scouts"> BTS ngrit standardin e veshjeve për meshkuj,
									<a href="https://www.esquire.com/entertainment/music/a34654383/bts-members-be-album-interview-2020/" target="_blank"> 
										shihen në revistën Esquire </a></p>
								<p> - Evolimi i stilit të veshjes së Melania Trump, 
									<a href="https://style.nine.com.au/latest/melania-trump-first-lady-style/96c4c57d-58b1-49bf-a7a4-1ced02a5deb5" target="_blank">
									 sipas revistes Style Nine</a></p>
								<p> - 40 vjet të Baletit Spandau i shfaqur
									<a href="https://www.theguardian.com/fashion/gallery/2020/nov/30/true-gold-40-years-of-spandau-ballet-style-in-pictures" target="_blank">në foto.</a></p>
							
					    		</div>
							</li>
			
			
							<li>
					   			<div class="single_facilis">
									<img src="img/blogere.jpg" width="300" height="170" alt="img4">
									<h4>BLOGERE</h4>	
									<p> <a href="https://kosovalive.org/si-eshte-te-jesh-blogere-ne-prishtine/" target="_blank">
										Si është të jesh blogere femër në Prishtinë</a> </p>
									<p><a href="https://firstsiteguide.com/examples-of-blogs/" target="_blank">
										Blogjet më të famshme në botë në vitin 2020</a></p>
									<p><a href="https://www.beachtomato.com/fashion/10-fashion-bloggers-you-need-to-be-following-on-instagram/" target="_blank">
										Blogeret më të famshme në instagram</a></p>
				       			</div>
				  			</li>
						   
							<li>
				   				<div class="single_facilis">
									<img src="img/brende.jpg" width="300" height="170" alt="img5">
									<h4>BRENDE</h4>
									<p><a href="https://www.globalbrandsmagazine.com/best-shoe-brands-in-the-world/" target="_blank">
										Brendet më të famshme të këpucëve në botë</a></p>
									<p><a href="https://luxe.digital/lifestyle/style/best-jeans-brands-women/" target="_blank">
										Rankimi i xhinseve më të shitura për femra</a></p>
									<p><a href="https://www.zara.com/xk/en/" target="_blank">
										Zara vjen me risi në shitje online</a></p>
				    			</div>
							</li>
						   
							<li>
								<div class="single_facilis">
									<h4 style="padding-top: 30px;">MË SHUMË NGA BRENDET</h4>
									<p> <a href="https://www.alltopeverything.com/top-10-sportswear-brands/" target="_blank">
										Brendet më të mëdha të veshjeve sportive </a> </p>
									<p> <a href="https://lifewithme.com/affordable-designer-bags-label/" target="_blank">
										Çantat më të lira nga brendet e shtrenjta</a> </p>
									<p> <a href="https://legitcheck.app/guides/gucci/gucci-belt-fake-vs-real-comparison-guide-gg-belt/" target="_blank">
										Si dallohet një rrip origjinal i Gucci-t </a> </p>
									<p> <a href="https://www.facebook.com/liastubllaofficial/videos/vb.121301181255135/3771210046264212/?type=3&theater" target="_blank">
										Dizajni i Lia Stublla-s për Dina Ragheb </a> </p>
									<p> <a href="https://www.sarashala.com/collections/new-arrivals" target="_blank"> 
										Modelet e reja të aksesorëve nga dizajnerja Sara Shala</a></p>
									<p><a href="https://prive.al/blogerja-kosovare-rita-saraci-tani-edhe-me-koleksion-veshjesh-ne-emrin-e-saj/" target="_blank">
										Blogerja Rita Saraçi me koleksion personal</a></p>
								<!--	<p> <a href="https://konica.al/2020/09/blogerja-kosovare-me-nje-te-ardhme-premtuese/" target="_blank">
										Blogerja Naltina Maloku me të ardhme premtuese</a></p>									
									<p> <a href="https://www.urbanindustry.co.uk/blogs/news/a-brief-history-of-the-converse-chuck-taylor-all-star" target="_blank"> 
										Histori e Converse Chuck Taylor All Star </a></p> 
								-->	
									
								</div>
							</li>
						</ul>
					</div>
	             </section>
									   
			
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
</html>

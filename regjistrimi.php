
<html lang="en">
<head>
    <link rel="shortcut icon"  type="image/x-icon" href="img/favicon.png" />
    <meta charset="utf-8">
    <title>Regjistrimi</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="style/contact.css">
    <link rel="stylesheet" href="style/responsive.css">
    <script type="text/javascript" src="skript/regjistrimi.js"></script>
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
 document.write ('<body style="background-color: #f0e5c9">');
}

</script>

</head>

<body bgcolor="<?php echo $bgColor ?>" text="<?php echo $txtColor ?>">
 <?php

    $silver = "";
    $purple = "";
    $white = "";
    $black = "";

    $hour = time() + 3600;

    if (isset($_POST['order'])) {
        $color = $_POST['order'];
        $$color = "selected";
        setcookie("Free_cookies", $color, $hour);
    }
    else{
        $color = "silver";
        $silver = "selected";
    }
    if(isset($_COOKIE['Free_cookies'])){
        $color = $_COOKIE['Free_cookies'];
        $$color = "selected";
    }

?>
<?php
setcookie("Free_cookies",$color,time()-3600);
?>
 <div id="wrapper" class="wrapper" <?php echo "STYLE='background-color:".$color.";'";?>>
  

  <header id="head">
    <div class="wrapper1">
        <div class="logo">
          <a href="#">Regjistrimi</a>
        </div>
        <div class="search">
          <form action="post">
            <input type="text" placeholder="Kërko në faqe">
            <button type="submit"><i class="fas fa-search"></i></button>
          </form>
        </div>
            <br><br><br>
        <nav>
            <ul class="navigation" style="padding-top: 20px;">
				  		 <li><a href="ballina.php">BALLINA</a></li>
				  		 <li id="width"><a onclick="narroved_width()" href="#">UKRAINA</a></li>
						   
						 <li id="dropdowni"><a href="#">KATEGORITË</a>
							<ul>    
                <li><a href="mode.php">STIL</a></li>
								<li><a href="hobi.php">SHËNDETËSI</a></li>
								<li><a href="shendet.php">TEKNOLOGJI</a></li>
								<li><a href="storjet.php">BOTË</a></li>
							</ul>
						 </li>		

               <li><a href="loja.php">LOJË</a></li>
				   		 <li><a href="Gallery.php">HOROSKOPI</a></li>
						
						<li id="dropdowni"><a href="#">KYÇU/REGJISTROHU</a>
								<ul>    
									<li><a href="dragdrop.php">Kyçu</a></li>
									<li><a href="regjistrimi.php">Regjistrohu</a></li>
									<li><a href="contact.php">Kontaktoni</a></li>
								</ul>
						</li>
							
						</ul>
              </li>          
            </ul>
        </nav>
    </div>  
  </header>      
                  
  <main >
       
    <div class="container" id="part1">  
        <form id="contact" action="newDB.php" method="post">           

          <!--<h3>LifeStyle</h3>-->
          <fieldset>
          <!--<legend>Regjistrimi</legend>-->
            <p style="text-align: center; font-size: 25px; font-weight: bolder; padding: 15px;">Regjistrohu</p>
                
                 <?php
   try {
      $error = 'Mbiemri';
      throw new Exception($error);
      
      // Kodi që ndjek një përjashtim nuk ekzekutohet.
      echo 'Nuk është ekzekutuar kurrë';
   }catch (Exception $e) {
      echo 'Emri dhe ',  $e->getMessage(), "\n";
   }
   
   // Vazhdoni ekzekutimin
   echo ':';
?> 
                <input type="text" name="name" required autofocus>

                <?php
   try {
      $error = 'maili';
      throw new Exception($error);
      
      // Kodi që ndjek një përjashtim nuk ekzekutohet.
      echo 'Nuk është ekzekutuar kurrë';
   }catch (Exception $e) {
      echo 'E- ',  $e->getMessage(), "\n";
   }
   
   // Vazhdoni ekzekutimin
   echo ':';
?>
                <input type="email" name="email" autocomplete="on" required>

                
                <?php
   try {
      $error = 'kalimi';
      throw new Exception($error);
      
      // Kodi që ndjek një përjashtim nuk ekzekutohet.
      echo 'Nuk është ekzekutuar kurrë';
   }catch (Exception $e) {
      echo 'Fjalë',  $e->getMessage(), "\n";
   }
   
   // Vazhdoni ekzekutimin
   echo ':';
?>
                <input id="password" type="password" name="password" required>

                <label> Rishkruaj fjalëkalimin: </label>
                <input type="password" name="rpassword" required><br>
                                       
                                           
         </fieldset>   
         <!-- <button name="next" type="submit" id="contact-submit" onclick="next()">Vazhdo</button> -->
         <fieldset>
            <button onclick="next1()" name="submit" type="text" id="contact-submit"> Vazhdo &rarr; </button>
          </fieldset>
         <!--<span onclick="next()" >Vazhdo</span> -->
        </form>       
    </div>
    
<form method='post'<?php echo "STYLE='background-color:".$color.";'";?> ><p id='txtorder'  >Ngjyra: </p>
    <select name='order' id='order'>
        <option value="silver"<?php echo $silver; ?> >silver</option>
        <option value="purple"<?php echo $purple; ?> >purple</option>
        <option value="white"<?php echo $white; ?> >white</option>
        <option value="black"<?php echo $black; ?> >black</option>
    </select>
    <input type='submit' value='Ndrysho'/>
</form>

   <div class="container" id="part2" style="display: none;">  
    <form id="contact" action="" method="post">      
     <fieldset>
       <!--<legend>Sign Up</legend>--> 
       <fieldset>
        <button onclick="back1()" name="submit" type="text" id="contact-submit"> &larr; Kthehu</button>
      </fieldset>    
       
       <label> Numri i telefonit: </label>
       <input type="tel" name="phoneNumber" >

       <label> E-mail rezervë: </label>
       <input type="email" name="email" autocomplete="on" >

       <label>Shteti:</label>
       <p>&nbsp;</p>
       <input id="lista" list="country" name="country" required>
       <datalist id="lista">
            <option value="Kosovë">
            <option value="Shqipëri">
            <option value="Maqedoni e Veriut">
            <option value="Mali i Zi">
            <option value="Serbi">
            <option value="Tjetër">
       </datalist>

       <p>&nbsp;</p>
       <label> Adresa e plotë: </label>
       <input type="text" name="adress" required>
       <p>&nbsp;</p>
             
     <fieldset style="padding-top: 15px;">
        <button onclick="next2()" name="submit" type="text" id="contact-submit"> Vazhdo &rarr; </button>
      </fieldset>
    </form>
   </div>

   <div class="container" id="part3" style="display: none;">  
    <form id="contact" action="" method="post">      
     <fieldset>
       <!--<legend>Sign Up</legend>--> 
       <fieldset>
        <button onclick="back2()" name="submit" type="text" id="contact-submit"> &larr; Kthehu</button>
      </fieldset>    
       
       <label> Ditëlindja: </label>
       <input type="date" name="birthday" required>

       <label> Gjinia:</label>
       <p>&nbsp;</p>
       <div class="controls">
        <label class="radio">
          <input type="radio" name="femer" value="femer">Femër
        </label>
                 
        <label class="radio">
          <input type="radio" name="mashkull" value="mashkull">Mashkull
        </label>
        
        <label class="radio">
          <input type="radio" name="other" value="other">Tjetër
        </label>
        
      </div>
      <p>&nbsp;</p>
       <label> Profesioni: </label>
       <input type="text" name="profession" required>
 

        <input type="checkbox" value="yes" id="terms_conditions" 
            name="terms_conditions" required> 
           Duke krijuar llogarinë, ju pajtoheni me Afatet dhe Kushtet tona
          <p style="text-align: center;"> <br><a href="doc/TermsConditions.pdf">Terms & Conditions</a></p>
          <p> &nbsp; </p>
                   
         
        <div>   
            <fieldset>
                <button type="submit" name="submit" value="Regjistrohu" id="submit">Regjistrohu</button>
            </fieldset> 
            
            <fieldset>
                <button type="reset" name="reset" value="fshij" id="submit">Fshij</button>
            </fieldset> 
                                   
        </div>       
     </fieldset>
    </form>
   </div>
       
       
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
		   
                <?php

  define ("BR","<BR>");

  // define a custom function to sanitize the user input data as a precuation from any malicious attacks
  function test_input($data) {

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  //initialize variables for value as well as errors
  $name=$email=$gender=$comment=$website="";
  $name_err=$email_err=$gender_err=$comment_err=$website_err="";

  // Check if coming from submitted form and do the validations on user inputs in form
  if ($_SERVER["REQUEST_METHOD"]=="POST") {
    if (empty($_POST["name"])) {
      $name_err = "Name cannot be left blank.";
    }
    else {
      $name = test_input($_POST["name"]);
      // check for correctness of name or validate our name test_input
      if (!preg_match("/^[a-zA-z ]*$/",$name)) {
        $name_err = "Name is not in valid format, can contain only letters.";
      }
    }

    if (empty($_POST["email"])) {
      $email_err = "Email cannot be left blank.";
    }
    else {
      $email = test_input($_POST["email"]);
      if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $email_err = "Email format is not correct.";
      }
    }
    if (!empty($_POST["website"])) {
      $website = test_input($_POST["website"]);

     if (!filter_var($website,FILTER_VALIDATE_URL)){
        $website_err = "Website format is not correct.";
      }

    }
    if (!empty($_POST["comment"])) {
      $comment = test_input($_POST["comment"]);
    }
    if (!empty($_POST["gender"])) {
      $gender = test_input($_POST["gender"]);
    }

  }
 ?>
<body>

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


                                                                                                                 

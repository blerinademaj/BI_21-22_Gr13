<!DOCTYPE html>
<html lang="en">
<head>
 <link rel="shortcut icon"  type="image/x-icon" href="img/favicon.png" />
  <meta charset="utf-8">
  <title>Na kontaktoni këtu</title>
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" type="text/css" href="style/contact.css">
  <link rel="stylesheet" href="style/responsive.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600;700&display=swap"> 
  <link rel="stylesheet" href="style/contact.css">
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
 <style type="text/css">

   @font-face 
  {
    font-family: myFirstFont;
    src: url(doc/Ubuntu-Italic.ttf);
  }

  
  .container{
  background: white;
  border-radius: 1.2rem;
  border-radius: 5px;
  box-shadow: 4px 4px 2px #865473; 
}

.container h2
{
  font-family: myFirstFont;
  text-align: center;
  margin-bottom: 20px;
  margin-top: 20px;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: #332902;
}

.container .input_field{
  margin-bottom: 10px;
}

.container .input_field input[type="text"],
.container textarea{
  border: 1px solid #e0e0e0;
  width: 100%;
  padding: 10px;
  background: white;
  color: black;
}

.container textarea{
  /*resize: none;*/
  height: 80px;

}

.container .btn input[type="submit"]{
  border: 0px;
  margin-top: 15px;
  margin-bottom: 40px;
  padding: 10px;
  text-align: center;
  width: 100%;
  background: #c495b2;
  color: black;
  text-transform: uppercase;
  letter-spacing: 5px;
  font-weight: bold;
  border-radius: 25px;
  cursor: pointer;
}
.container .btn input[type="submit"]:hover{
  background: #cfa9c0;
}

#error_message{
  margin-bottom: 20px;
  background: #fe8b8e;
  padding: 0px;
  text-align: center;
  font-size: 14px;
  transition: all 0.5s ease;
}
</style>
<script type="text/javascript">
  function validate(){
  var name = document.getElementById("name").value;
  var subject = document.getElementById("subject").value;
  var phone = document.getElementById("phone").value;
  var email = document.getElementById("email").value;
  var message = document.getElementById("message").value;
  var error_message = document.getElementById("error_message");
  
  error_message.style.padding = "10px";
  
  var text;
  if(name.length < 3){
    text = "Ju lutem vendosni emrin tuaj të plotë";
    error_message.innerHTML = text;
    return false;
  }
  if(subject.length < 5){
    text = "Tema duhet të përmbajë të paktën 5 shkronja";
    error_message.innerHTML = text;
    return false;
  }
  if(isNaN(phone) || phone.length < 9){
    text = "Ju lutem vendosni numër telefoni valid";
    error_message.innerHTML = text;
    return false;
  }
  if(email.indexOf("@") == -1 || email.length < 6){
    text = "Ju lutem vendosni e-mail adresë valide";
    error_message.innerHTML = text;
    return false;
  }
  if(message.length <= 10){
    text = "Ju lutem përdorni te pakten 10 shkronja në mesazhin tuaj";
    error_message.innerHTML = text;
    return false;
  }
  alert("Forma e kontaktit u dërgua me sukses! :)");
  return true;
}
</script>
</head>
<body>
  <div id="wrapper" class="wrapper">
    <header id="head">
      <div class="wrapper1">
        <div class="logo">
          <a href="#">Kontakti</a>
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
              </li>
          

                 </ul>
                </nav>
        </div>  
      </header>
      
                  
    <main>

       <div class="container" style="margin-bottom: 20px;">  
  <h2>Na kontaktoni këtu</h2>
  <div id="error_message"></div>
  <form id="myform" onsubmit="return validate();" style="padding: 20px;">
    <div class="input_field">
        <input type="text" placeholder="Emri*" name="username" id="name" required autofocus>
    </div>
    <div class="input_field">
        <input type="text" placeholder="Tema*" name="tema" id="subject">
    </div>
    <div class="input_field">
        <input type="text" placeholder="Numri i telefonit*" name="nrtel" id="phone">
    </div>
    <div class="input_field">
        <input type="text" placeholder="E-mail adresa*" name="email" id="email">
    </div>
    <div class="input_field">
        <textarea placeholder="Mesazhi*" name="mesazhi" id="message"></textarea>
    </div>
    <div class="btn">
        <input type="submit">
    </div>
    <p>Fushat me "*" janë obligative për tu plotësuar</p>
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

                                                                              

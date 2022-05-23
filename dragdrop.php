<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/dragdrop.css">
    <script type="text/javascript" src="skript/dragdrop.js"></script>
    <title> A jeni robot? </title>
</head>

<body onload="addVisitForPage('captcha')">
    
    <div class="wrapper fadeInDown">
        <p class="fadeIn first" id="info">
            <!--ksort i array -->
        	 <?php
				$sorting=array(4=>"figurën",2=>"Vendos",5=>"brenda",6=>"kornizës",7=>"që",5=>"brenda",13=>"te forma për kycje",9=>"të",11=>"kaloni");
				  ksort($sorting);
				  foreach ($sorting as $key => $name) {
				  	echo $name.' ';
				  }					
        	?></p>

        <div class="fadeIn second" id="container" ondrop="drop(event)" ondragover="allowDrop(event)"></div>

        <img class="fadeIn third" id="drag1" src="img/robot.jpg" draggable="true" ondragstart="drag(event)" width="235px" height="140px">
    </div>
</body>

</html>

<?php   session_start();  ?>
<!DOCTYPE html>
<html>
	<head>
		<title>NHS: Data Search</title>
		<link rel="shortcut icon" href="images/favicon.png">
		<link rel="stylesheet" type="text/css" href="css/stylesheet.css" media="screen"/> 
		<script type="text/javascript" src="filename.js"></script>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
        <link href="http://fonts.googleapis.com/css?family=Oswald|Open+Sans" rel="stylesheet" type="text/css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
		<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
	</head>
	
	<body>
    <?php
      if(!isset($_SESSION['use'])) { // If session is not set that redirect to Login Page  
           header("Location: php/login.php");  
       }

          echo $_SESSION['use'];


          echo "<a href='php/logout.php' style='font-family: 'Open Sans';'> Logout</a> "; 
	?>
    		<div id="LogoHeader">
            	<a href="index.html"><img id="logo" src="images/NHS Logo.png"></a>
            </div>
    	<div id="nav">
        	<ul id="navul">
            	<li class="navli"><a class="nava" href="index.html">HOME</a></li>
                <li class="navli"><a class="nava" href="gallery.html">GALLERY</a></li>
                <li class="navli"><a class="nava" href="stats.html">STATISTICS</a></li>
                <li class="navli"><a class="nava" href="datacapture.html">DATA CAPTURE</a></li>
                <li class="navli"><a class="nava-active" href="login.php">DATA SEARCH</a></li>
            </ul>
        </div>
        <div id="content">
        	<h1 class="header1">Welcome TP2AMT</h1>
            <h3 class="header3">Please enter your search terms below.</h3>
            <div id="dbsearchcenter">
                <div id="dbsearch">
                    <form>
                        <p class="FieldHeading">Surname:</p><br>   
                        <p class="FieldHeading">D.O.B:</p><br>              
                    </form>
                </div>
                <div id="dbsearch2">
                    <form action="php/datasearch.php" method="post">
                        <input type="text" id="surnamesearch" name="surname"><br>
                        <input type="text" name="dateofbirth" id="dobsearch"><br>
                        <button type="submit" name="search" id="search">Search</button>
                    </form>
                </div>
            </div>    
        </div>
	</body>
	
</html>
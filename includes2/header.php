<html>
   <head>
   <?php
   session_start();
   ?>
	<title>Banking System</title>
		
   </head>
   <link rel="stylesheet" href="includes/styleshit.css" type="text/css">
   

 <body>
	<div id="page">
       <!-- Header div-->
	   <div id="header">
		<h1><i>Bangladesh<br>Agricultural Information</i></h1>
		<h2></h2>
	   </div>
      <!-- End Header div-->
	  
	  <!-- Begain menu div -->
	   <div id="horzmenu">
		<div style="width:85%;margin:auto;">
		<ul>

		   <li><a href="index2.php">Home</a></li>		
		   <li><a href="insertDistrictInfo.php">Insert District Info</a></li>
		   <li><a href="insertCropsInfo.php">Insert CropsInfo</a></li>
		   <li><a href="editDistrictInfo.php">Edit DistrictInfo</a></li>
		   <li><a href="answer.php">Answer</a></li>
		   <li><a href="registration.php">Farmars reg</a></li>
		   <li><a href="deleteproblem.php">Delete problem</a></li>
		   <?php
		   if($_SESSION['user'])
		   {
		   echo "<li><a href='index.php'>Logout</a></li>";
		   //session_destroy();
		   }
		   ?>		   
		  
		</ul>
		</div>
		<!-- End menu div-->
           </div>
	   <div id="text" style="width:100%;margin-bottom:5px;border:solid black thin;border-top:none;"><MARQUEE WIDTH=100% BEHAVIOR=SCROLL BGColor=lightblue LOOP=3><font color=blue>Banglades Agricultural Information System</MARQUEE></div>	
	   <!-- start body  div-->
 <table width="100%" height="365px" border="0"  cellpadding="5">

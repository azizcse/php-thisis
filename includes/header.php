<html>
   <head>
	<title>Agricultural Information</title>
	<?php
	include("config.php");
	session_start();
	?>
		
   </head>
   <link rel="stylesheet" href="includes/styleshit.css" type="text/css">
   
 <style type="text/css">
 .login{
 background: #97AFD9;
 width:100%;}
 </style>
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
		<div style="width:75%;margin:auto;">
		<ul>

		   <li><a href="index.php">Home</a></li>		
		   <li><a href="districtinfo.php">District Info</a></li>
		   <li><a href="cropsinfo.php">Crops Information</a></li>
		   <li><a href="farmarInfo.php">Farmars Info</a></li>
		   <li><a href="newcrops.php">New crops</a></li>
		   <li><a href="FarmarsProblems.php">Submit Your Problems</a></li>
		   

		</ul>
		</div>
		<!-- End menu div-->
           </div>
	   <div id="text" style="width:100%;margin-bottom:5px;border:solid black thin;border-top:none; text-decoration:none;"><MARQUEE WIDTH=100% BEHAVIOR=SCROLL BGColor=lightblue loop="-1" onMouseUp="stop"><font color="#B50423">
	   <?php
		$link=connect_db();
		$sql="SELECT * FROM districtinfo";
		$result=mysql_query($sql,$link);
		while($row=mysql_fetch_array($result))
		{
		echo "<a style='text-decoration:none' href='DisplaydistrictInfo.php?district_id=$row[id]'>$row[districtName] &nbsp;&nbsp;&nbsp;&nbsp;</a>";
		
		}
		?>
		
	   
	   
	   
	  </font> </MARQUEE></div>	
	   <!-- start body  div-->
 <table width="100%" height="365px" border="0"  cellpadding="5">
<tr><td width="200" height="365" bgcolor="#CCCCCC" valign="top" align="center">
<form action="login.php" method="post">
<table class="login"><tr><td>User Name</td></tr>
<tr><td><input type="text" name="userName"></td></tr>
<tr><td>Passwoard</td></tr><tr><td><input type="password" name="password"></td></tr>
<tr><td><input type="submit" value="Login"></td></tr>
</table>
</form>
<br>
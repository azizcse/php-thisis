<?php
include("includes2/header.php");
include("includes2/config.php");
?>	   

<td width="200" height="365" bgcolor="#CCCCCC" valign="top">


</td>
<td  height="365" background="images/untitled.JPG" valign="top">
<?php
if(isset($_GET['districtInfoInputForm']))
{
$link=connect_db();
$districtName=$_GET['distictName'];
$division=$_GET['divisionName'];
$area=$_GET['area'];
$image=$_GET['image'];
$description=$_GET['description'];
$climate=$_GET['climate'];
$land=$_GET['land'];
$crop=$_GET['crops'];
$fruit=$_GET['fruits'];
//****************
    // NOTE: This is where a lot of people make mistakes.
	    // We are *not* putting the image into the database; we are putting a reference to the file's location on the server
if ( $districtName != "" and $division != "" and $description!= "" )
{ 
$sql = "insert into districtinfo (districtName, division,area,image) values ('$districtName', '$division','$area','$image')";
 $result = mysql_query($sql,$link) or die ("Could not insert data into DB: " . mysql_error());
	
 $sqle="INSERT INTO  districtdescription(districtInfo,climate,landuse,maincrop,mainfruit)         		  VALUES('$description','$climate','$land','$crop','$fruit')";
 $resute=mysql_query($sqle,$link)or die("Could not insert data into DB: " . mysql_error());
 echo"<a href='insertDistrictInfo.php'>Click here for back</a>Data upload successful";
}
	  

//***********************
}
else
{
?>

<center><font size="5">Insert District Information</font><br><br>
<form action="insertDistrictInfo.php" method="get">
<input type="hidden" name="districtInfoInputForm" value="true">
<table cellpadding="2" cellspacing="3">
<tr><td>Enter Disrict Name</td><td><input type="text" name="distictName" size="30"></td></tr>
<tr><td>Enter Division</td><td><input type="text" name="divisionName" size="30"></td></tr>
<tr><td>Enter Area</td><td><input type="text" name="area" size="30"></td></tr>
<tr><td>Upload Image</td><td><input  type="file" name="image" size="30" ></td></tr>
<tr><td>Description of the District</td><td><textarea name="description" rows="8" cols="50"></textarea></td></tr>
<tr><td>Climate Condition</td><td><textarea name="climate" rows="5" cols="50"></textarea></td></tr>
<tr><td>Land used for Cultivation</td><td><textarea name="land" rows="5" cols="50"></textarea></td></tr>
<tr><td>Manin Crops</td><td><textarea name="crops" rows="5" cols="50"></textarea></td></tr>
<tr><td>Main Fruits</td><td><textarea name="fruits" rows="5" cols="50"></textarea></td></tr>
</table>
<input type="submit" value="Upload">
</form>
</center>

<?php
}
include("includes/footer.php");
?>
<?php
include("includes2/header.php");
include("includes2/config.php");
?>


<SCRIPT LANGUAGE="JavaScript">
function Show(id){
document.getElementById(id).style.display = "block";

 }
function Hide(id){
document.getElementById(id).style.display = "none"; }
</script>
<tr><td width="200" height="365" bgcolor="#CCCCCC">
</td>

<td  height="365" background="images/untitled.JPG" valign="top">
<?php
if(isset($_POST['registration']))
{
session_start();
$link=connect_db();
$fname=$_POST['fname'];
$address=$_POST['address'];
$districtNmae=$_POST['districtName'];
$id=$_POST['id'];
//echo $fname."\n".$address."\n".$districtNmae;

function is_valid_type($file)
	{
	    // This is an array that holds all the valid image MIME types
	    $valid_types = array("image/jpg", "image/jpeg", "image/bmp", "image/gif");
	 
	    if (in_array($file['type'], $valid_types))
	        return 1;
	    return 0;
	}
$TARGET_PATH = "images/";
$image = $_FILES['image'];	
$TARGET_PATH .= $image['name'];
if ( $image['name'] == ""|| $fname==""|| $address==""|| $districtNmae==""|| $id=="")
	{
	    $_SESSION['error'] = "All fields are required";
	   echo "".$_SESSION['error'];
	    exit;
	}
if (!is_valid_type($image))
   {
	    $_SESSION['error'] = "You must upload a jpeg, gif, or bmp";
	   echo "".$_SESSION['error'];
	   // header("Location: index.php");
	    exit;
	}
	
if (file_exists($TARGET_PATH))
	{
	    $_SESSION['error'] = "A file with that name already exists";
	   echo "".$_SESSION['error'];
	   // header("Location: index.php");
	    exit;
	}
	//$fimage=$image['name'];
	
if (move_uploaded_file($image['tmp_name'], $TARGET_PATH))
	{
	    // NOTE: This is where a lot of people make mistakes.
	    // We are *not* putting the image into the database; we are putting a reference to the file's location on the server
$sql = "insert into registration (name, id, address, districtName, image) values ('$fname', '$id', '$address', '$districtNmae','".$image['name']."')";
	  $result = mysql_query($sql,$link) or die ("Could not insert data into DB: " . mysql_error());
	   // header("Location: first.php");
	   echo "<center><h1 style='background-color:#808080;align:center;'>User ".$fname." is registraed</h1></center>";
	   // exit;
	}
	
}


if(isset($_POST['farmarsinfo']))
{
$link=connect_db();
$id=$_POST['id'];
$land=$_POST['land'];
$year=$_POST['year'];
$crops=$_POST['crops'];
$production=$_POST['production'];
$cost=$_POST['cost'];
if($production!=""|| $cost!="")
{

$sql="INSERT into farmarsinfo(id,land,year,crops,totalamount,cost) VALUES('$id','$land','$year','$crops','$production','$cost')";
$result=mysql_query($sql,$link) or die("You should inter correct value");
if($result)
echo "<center><h1 style='background-color:#808080;align:center;'>Data is uploaded</h1></center>";

}

}

?>
<center>
<input type="button" onclick="Show('reginfo');" value="Show registration form">
<input type="button" onclick="Hide('reginfo');" value="Hide Area">
<br>
<div id="reginfo" style="display:none;">
<form action="registration.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="registration" value="true">
<table align="center" width="80%" cellspacing="5">
<caption><h1 style="background-color:#808080">Farmars Registration Form</h1></caption>
<tr><td>Enter Farmars Name</td><td><input type="text" name="fname" size="40"/></td></tr>
<tr><td>Select district name</td><td><select name="districtName" title="Dstrict">
<?php
$link=connect_db();
$temp=1;
$sql="SELECT districtName from districtinfo";
$result=mysql_query($sql,$link)or die("No databases selected".mysql_error());

while($row=mysql_fetch_array($result))
{

echo"<option>".$row['districtName']."</option>";

}
?>
</select></td></tr>
<tr><td>Input address</td><td><textarea name="address" rows="3" cols="30"></textarea></td></tr>
<tr><td>Enter farmars ID</td><td><input type="text" name="id" size="40"/></td></tr>
<tr><td>Upload Image</td><td>
	                    <input type="file" name="image" /><br /><br/>
	                    <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
	           </td></tr>
			   <tr><td></td><td><input type="submit" value="Submit"/></td></tr>
</table>

</form>
</div></center>
<hr color="#2A3F00"><br>
<center><input type="button" onclick="Show('cropinfo');" value="Show Insert Information form">
<input type="button" onclick="Hide('cropinfo');" value="Hide Area">
<div id="cropinfo" style="display:none">


<form action="registration.php" method="post">
<input type="hidden" name="farmarsinfo" value="true">
<table width="80%" cellspacing="5"><caption><h1 style="background-color:#808080"> Annual crops Information form</h1></caption>
<tr><td>Select Farmars ID</td><td><select name="id">
<?php
$link=connect_db();
$sql="SELECT id from registration";
$result=mysql_query($sql,$link)or die("No databases selected".mysql_error());

while($row=mysql_fetch_array($result))
{

echo"<option>".$row['id']."</option>";

}

?>
</select></td></tr>
<tr><td>Enter cultivable land in hectares</td><td><input type="text" name="land" size="40"/></td></tr>
<tr><td>Select Year</td><td><select name="year">
<option>2005</option>
<option>2006</option>
<option>2008</option>
<option>2009</option>
<option>2010</option>
<option>2011</option>
<option>2012</option>
<option>2013</option>
<option>2014</option>
<option>2015</option>
<option>2016</option>
<option>2017</option>
<option>2018</option><option>2019</option>
<option>2020</option>
<option>2021</option>
<option>2023</option>
<option>2024</option>
</select></td></tr>
<tr><td>Enter crops name</td><td><textarea name="crops" rows="2" cols="30"/></textarea></td></tr>
<tr><td>Enter amount of production in TK</td><td><input type="text" name="production" size="40"/></td></tr>
<tr><td>Enter total cost</td><td><input type="text" name="cost" size="40"></td></tr>
<tr><td></td><td><input type="submit" value="submit"/></td></tr>
</table>
</form>
</div></center>
<?php

include("includes/footer.php");
?>
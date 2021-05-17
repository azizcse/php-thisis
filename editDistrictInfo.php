<?php
include("includes2/header.php");
include("includes2/config.php");
?>	   

<td width="200" height="365" bgcolor="#CCCCCC" valign="top" align="center">

<?php
		$link=connect_db();
		$sql="SELECT * FROM districtinfo";
		$result=mysql_query($sql,$link);
		while($row=mysql_fetch_array($result))
		{
		echo "<a href='editDistrictInfo.php?district_id=$row[id]'>$row[districtName] Edit</a><br><hr>";
		
		}
		?>
</td>
<td  height="365" background="images/untitled.JPG" valign="top">

<?php
if(isset($_GET['district_id']))
{
$id=$_GET['district_id'];
$linke=connect_db();
$sql="SELECT a.id, a.districtName, a.image,a.area,a.division, b.districtInfo,b.climate,b.landuse,b.maincrop,b.mainfruit FROM districtinfo a, districtdescription b WHERE a.id=b.id and a.id=".$id;
		$result=mysql_query($sql,$linke);
		echo"<form action='editDistrictInfo.php' method='GET'>";
		echo"<input type='hidden' name='editInfo' value='true'>";
		echo"<table width='80%' cellspacing='10'bgcolor='#DDDDE8'>";
		while($row=mysql_fetch_array($result))
		{
		
		echo"<caption><h2 align='left'>".$row['districtName'];
		echo"</caption>";
		echo"<input type='hidden' name='id' value='".$row[id]."'>";
		echo"<tr><td>District Name</td><td><input type='text' name='districtName' value='".$row[districtName]."'/></td></tr>";
		echo"<tr><td>Area</td><td><input type='text' name='area' value='".$row[area]."'/></td></tr>";
		echo"<tr><td>Division</td><td><input type='text' name='division' value='".$row[division]."'/></td></tr>";
		echo"<tr><td>District Information</td><td><input type='text' name='districtInfo' value='".$row[districtInfo]."'/ size='70'></td></tr>";
		echo"<tr><td>Climate Condition</td><td><input type='text' name='climate' value='".$row[climate]."'/ size='70'></td></tr>";
		echo"<tr><td>Cultivable Land</td><td><input type='text' name='landuse' value='".$row[landuse]."'/ size='70'></td></tr>";
		echo"<tr><td>Main Crops</td><td><input type='text' name='maincrops' value='".$row[maincrop]."'/ size='70'></td></tr>";
		echo"<tr><td>Main Fruits</td><td><input type='text' name='mainfruits' value='".$row[mainfruit]."'/ size='70'></td></tr>";
		}
		echo"</table>";
		echo"<center><input type='submit' value='--Edit--'/></center></form>";
}
?>
<?php
if(isset($_GET['editInfo']))
{
$districtName=$_GET['districtName'];
$area=$_GET['area'];
$division=$_GET['division'];
$districtInfo=$_GET['districtInfo'];
$climate=$_GET['climate'];
$landuse=$_GET['landuse'];
$maincrops=$_GET['maincrops'];
$mainfruits=$_GET['mainfruits'];
$linkupdate=connect_db();

$id=$_GET['id'];
$sqlquery="UPDATE districtdescription SET districtInfo ='$districtInfo',climate='$climate',landuse='$landuse',maincrop='$maincrops',mainfruit='$mainfruits' WHERE id='$id'";
$runquery=mysql_query($sqlquery,$linkupdate) or die("Database Error".mysql_error());
echo"Update Successful";
}
?>




<?php
include("includes/footer.php");
?>

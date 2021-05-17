<?php
include("includes2/header.php");
include("includes2/config.php");
?>	   

<td width="200" height="365" bgcolor="#CCCCCC">


</td>
<td  height="365" background="images/untitled.JPG" valign="top">

<?php
if(isset($_GET['cropsInfo']))
{
$link=connect_db();
$districtName=$_GET['districtName'];
$year=$_GET['year'];
$crops=$_GET['cropsName'];
$amount=$_GET['amount'];
$require=$_GET['require'];
$purchage=$_GET['purchage'];

$sql="INSERT INTO cropsinfo(district_name,year,crops,amount_products,required,purchage) VALUES ('$districtName','$year','$crops','$amount','$require','$purchage')";
$result=mysql_query($sql,$link)or die("Database error".mysql_error());
echo"<center>Data insert successful</center>";
}

?>
<form name="cropsInfo" action="insertCropsInfo.php" method="get">
<input type="hidden" name="cropsInfo" value="true">
<table cellspacing="20"><caption>Insert Crops Info</caption>
<tr><td>Select District Name</td><td>
<select name="districtName" >
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
</select></td></tr><tr><td>
Select Year</td><td><select name="year"><option>1998</option><option>1999</option><option>2000</option><option>2001</option><option>2002</option><option>2003</option><option>2004</option><option>2005</option><option>2006</option><option>2007</option><option>2008</option><option>2009</option><option>2010</option><option>2011</option><option>2012</option><option>2013</option><option>2014</option><option>2015</option><option>2016</option><option>2017</option></select></td></tr>
<tr><td>Select Crops Name</td>
<td><select name="cropsName"><option>Paddy</option><option>Jute</option><option>Potato</option><option>Sugarcane</option><option>Ground nut</option><option>Oil Seed</option><option>Betel leaf</option><option>Wheat</option><option>Onion</option><option>Garlic</option><option>Vegetables</option><option>Chilli</option><option>Mustard seed</option><option>Banana</option></select></td></tr>
<tr><td>Amounts of Production</td><td><input type="text" size="30" name="amount"></td></tr>
<tr><td>Yearly Require</td><td><input type="text" name="require" size="30"></td></tr>
<tr><td>Yearly purchage or sale</td><td><input type="text" size="30" name="purchage"></td></tr>
<tr><td></td><td><input type="submit" value="Submit"></td></tr>
</table>
</form>

<?php
include("includes/footer.php");
?>

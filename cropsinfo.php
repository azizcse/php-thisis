<?php
include("includes/header.php");
//include("includes/config.php");
?>	   
<!--<td width="200" height="365"  bgcolor="#CCCCCC" valign="top" align="center">-->

</td><td  height="365" background="images/untitled.JPG" align="left" valign="top">

<form action="cropsinfo.php" method="get">
Select district name
&nbsp&nbsp&nbsp
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
echo"</select>";
echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSelect year";
echo"&nbsp&nbsp&nbsp&nbsp&nbsp<select name='year'>";
echo"<option>All</option><option>1998</option><option>1999</option><option>2000</option><option>2001</option><option>2002</option><option>2003</option><option>2004</option><option>2005</option><option>2006</option><option>2007</option><option>2008</option><option>2009</option><option>2010</option><option>2011</option><option>2012</option><option>2013</option><option>2014</option><option>2015</option><option>2016</option><option>2017</option></select>";
echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type='submit' value='Submit'>";
echo"<br><br><hr style='background:#666666' size='1'><hr></form>";
?>
<?php
if(isset($_GET['districtName']))

{
$name=$_GET['districtName'];
$year=$_GET['year'];
if($year=='All')
$sql="SELECT * from cropsinfo where district_name='$name' order by year";//district_name,crops,amount_products,required,purchage FROM cropsinfo WHERE district_name=".$name;
else
$sql="SELECT * from cropsinfo where district_name='$name' and year='$year'order by year";
$result=mysql_query($sql,$link)or die("Database Error".mysql_error());
while($row=mysql_fetch_array($result))
{
if($temp==1)
{
echo"<table cellpadding='0' cellspacing='30' border='0'bgcolor='#2f6a38'><caption>";
echo "<font size=5 color='blue'>".$row['district_name']."</font>";
echo "</caption><tr><th>Year</th><th>Crops Name</th><th>Amount</th><th>Required</th><th>Purchase/Sale</th></tr>";
$temp++;

}
echo "<tr><td>$row[year]</td><td>$row[crops]</td><td>$row[amount_products]</td><td>$row[required]</td><td>$row[purchage]";

}
echo"</table>";
}
?>
<?php
include("includes/footer.php");
?>
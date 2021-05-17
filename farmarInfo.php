<?php
include("includes/header.php");
?>	
   
<?php

if(isset($_GET['district_id']))
{
    $id=$_GET['district_id'];
	$subid=substr($id,0,6);
	$lenid=strlen($subid);
	$part=strstr($id," ");
	$len=strlen($part);
	$sub=substr($part,1,$len);

 
 
 if($sub!="")
	{
	
		$link=connect_db();
	    $sql="Select * from registration where districtName='$sub'";
		$resulte=mysql_query($sql,$link)or die("Database erroe");
		while($row=mysql_fetch_array($resulte))
		{
		echo "<a style='text-decoration:none;' href='farmarInfo.php?district_id=$row[id] $row[districtName]'>$row[name]<br><hr>";
		
		}
	}	
}
     if(isset($_POST['hidden']))
	 {
	    $district=$_POST['districtNmae'];
		$link=connect_db();
		$sql="SELECT name, id, districtName FROM registration WHERE districtName='$district'";
		$result=mysql_query($sql,$link);
		while($row=mysql_fetch_array($result))
		{
		echo "<a style='text-decoration:none;' href='farmarInfo.php?district_id=$row[id] $row[districtName]'>$row[name]<br><hr>";
		
		}
	}
	
	
	
	
		?>
		
		
</td>
<td  height="365" background="images/untitled.JPG" valign="top">
<?php

?>
<center><font size="+4">Farmer Information</font></center>
<center>
<form action="farmarInfo.php" method="post">
<input type="hidden" name="hidden" value="true">
Select district &nbsp;&nbsp;&nbsp;<select name="districtNmae">
<?php
$link=connect_db();
$sql="SELECT districtName from registration";
$result=mysql_query($sql,$link)or die("No databases selected".mysql_error());

while($row=mysql_fetch_array($result))
{

echo"<option>".$row['districtName']."</option>";

}
?>
</select>
&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Submit">
</form></center>
<hr color="#2A1F00"/>
<script type="text/javascript" src="jquery.min.js"></script>

<script type="text/javascript" src="jquery.magnifier.js">
</script>

<?php
if($subid!="")
{
$link=connect_db();
$sql="SELECT name, districtName, image from registration WHERE id='$subid'";
$result=mysql_query($sql,$link)or die("Database error".mysql_error());
while($row=mysql_fetch_array($result))
{
echo "<div><img src='images/$row[image]' width='200px' height='180px' align='right' class='magnify' border='1'\></div>";
echo "<font color='lightfreen'><h2><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Farmars name: ".$row[name];
echo"<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;District name: ".$row[districtName];
echo"</h2></font>";
}
$sql="Select land,year,crops,totalamount,cost from farmarsinfo WHERE id='$subid'";
$value=mysql_query($sql,$link)or die("Database error");
echo "<br><br><br><table cellspacing='5' width='100%' style='border:thin solid #808080;background:#C1C1C1;'><caption><h2><font color='red'>Production information</font></h2></caption><th>Year</th><th>Land used</th><th>Crops name</th><th>Total production in Tk</th><th>Cost</th><th>Income/Loss</th>";
while($row=mysql_fetch_array($value))
{
echo "<tr><td>".$row['year']."</td><td>".$row['land']."</td><td>".$row['crops']."</td><td>".$row['totalamount']."</td><td>".$row['cost']."</td><td>".($row['totalamount']-$row['cost'])."</td></tr>";
}
echo"</table>";
}

?>

<?php
include("includes/footer.php");
?>
<?php
include("includes/header.php");
//include("includes/config.php");
?>	   
	  
<script type="text/javascript" src="jquery.min.js"></script>

<script type="text/javascript" src="jquery.magnifier.js">
</script>
<style type="text/css">
.style{
width:90%;
border:thin solid #000000;
font:"Times New Roman", Times, serif;
font-size: 16px;

}
</style>
<!--<td width="200" height="365" bgcolor="#CCCCCC" valign="top" align="center">-->
<?php
		$link=connect_db();
		$sql="SELECT * FROM districtinfo";
		$result=mysql_query($sql,$link);
		while($row=mysql_fetch_array($result))
		{
		echo "<a style='text-decoration:none; text-align:justify;' href='DisplaydistrictInfo.php?district_id=$row[id]'>$row[districtName]</a><br><hr color='#045B02'>";
		
		}
		?>
</td>

<td  height="365" background="images/untitled.JPG" align="left" valign="top" >
		<?php
		$district_id=$_GET['district_id'];
		$link=connect_db();
$sql="SELECT a.id, a.districtName, a.image,a.area,a.division, b.districtInfo,b.climate,b.landuse,b.maincrop,b.mainfruit FROM districtinfo a, districtdescription b WHERE a.id=b.id and a.id=".$district_id;
		$result=mysql_query($sql,$link);
		while($row=mysql_fetch_array($result))
		{
	
		echo "<p><center><font size='12' color='blue'>$row[districtName]</font></center><br>";
		
		echo"<div style='margin-left:5px;'><img  width='200px' height='180px'  align='right' class='magnify' border='1'   src='images/$row[image]' /></div>";
		echo "<div style='text-align:justify; margin:5px;'><font color='blue'>".$row['districtInfo']."</font></div>";
		echo"</p><br><br><br><br><br><br>";
		
		echo "<font size='5'><center>Agricultural Information of $row[districtName]</center></font>";
		echo"<center><table class='style'  cellpadding='10' cellspacing='0'border='thin solid #000000'><tr><td>District Name</td><td>$row[districtName]</td></tr><tr> <td>Divosion</td><td>$row[division]</td></tr><tr> <td>Total Area</td><td>$row[area]</td></tr><tr> <td>Climate Condition</td><td>$row[climate]</td></tr><tr> <td>Cultivable Land</td><td>$row[landuse]</td></tr><tr> <td>Main Crops</td><td>$row[maincrop]</td></tr><tr> <td>Main Fruits</td><td>$row[mainfruit]</td></tr></table></center>";
		
		}
		?>
<?php
include("includes/footer.php");
?>
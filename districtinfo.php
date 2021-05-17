<?php
include("includes/header.php");
//include("includes/config.php");
?>	   
	  
<!--<td width="200" height="365"  bgcolor="#CCCCCC" valign="top" align="center">-->


		
		<?php
		$link=connect_db();
		$sql="SELECT * FROM districtinfo";
		$result=mysql_query($sql,$link);
		while($row=mysql_fetch_array($result))
		{
		echo "<a style='text-decoration:none;' href='DisplaydistrictInfo.php?district_id=$row[id]'>$row[districtName]<br><hr color='#2A3F00'>";
		
		}
		?>
	
  </td>	
  <td  height="365" background="images/untitled.JPG" align="left" valign="top">
<?php
include("includes/footer.php");
?>
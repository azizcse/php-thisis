<?php
include("includes2/header.php");
include("includes2/config.php");
?>
<td width="200" height="365" bgcolor="#CCCCCC">


</td>
<td  height="365" background="images/untitled.JPG" valign="top">
<table cellspacing="5" bgcolor="#BBB6D6">
<?php
if(isset($_GET['delete']))
{
$id=$_GET['delete'];
$link=connect_db();
$result=mysql_query("DELETE FROM problems WHERE id='$id'",$link)or die("Database error");
}
?>

<?php
$link=connect_db();
$sql = "SELECT * FROM problems";
$result = mysql_query($sql,$link) or die(mysql_error());

while ($row = mysql_fetch_array($result)) {
echo"<table cellspacing='5' bgcolor='#BBB6D6'><tr><td>Name:</td><td>".$row['name']."</td></tr>";
echo "<tr><td>Address:</td><td>".$row['address']."</td><tr>";
echo"<tr><td>Date:</td><td>".$row['date']."</td></tr>";
echo"<tr><td>Problem:</td><td>".$row['problem']."</td><tr>";
echo"<tr><td>Solution:</td><td>".$row['solution']."</td></tr>";
echo"<form action='deleteproblem.php' method='get'>";
echo"<input type='hidden' name='delete' value='".$row['id']."'>";
echo"<tr><td></td><td><input type='submit' value='Delete'></td></tr></form>";

echo "</table><br/><br/>";
      
	}
	?>

<?php
include("includes2/footer.php");
?>
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
<td width="200" height="365" bgcolor="#CCCCCC">


</td>
<td  height="365" background="images/untitled.JPG" valign="top">


<?php

if(isset($_GET['ansform']))
{
$link1=connect_db();
$hidden=$_GET['ansform'];
$answer=$_GET['answer'];
if($answer!=""){
$sql1=$sqlquery="UPDATE problems SET solution ='$answer' WHERE id='$hidden'";
$reault=mysql_query($sql1,$link1) or die("database error".mysql_error());
}
}
echo"<center><font size='5'>New Problems</font></center>";
$link=connect_db();
$value=NULL;
$sql="SELECT id, name, address, date, problem FROM problems where solution='yes'";
$result=mysql_query($sql,$link)or die("No database selected".mysql_query());
while($row=mysql_fetch_array($result))
{
echo"<table width='100%' class='problem'cellspacing='5' bgcolor='#E8E8E8'><tr><td>Name of the farmar</td><td>$row[name]</td></tr>";
echo"<tr><td>Farmars Address</td><td>$row[address]</td></tr>";
echo"<tr><td>Date</td><td>$row[date]</td></tr>";
echo"<tr><td>My Problem</td><td>$row[problem]</td></tr>";

echo"</table>";
echo"$nbsp$nbsp<input type='button' onclick='Show($row[id]);' value='Show Answer Area'>";
echo"<input type='button' onclick='Hide($row[id]);' value='Hide Answer Area'><br><br>";
echo"<form action='answer.php' method='get'>";
echo"<input type='hidden' name='ansform' value='".$row['id']."'>";
echo"<div id='".$row[id]."' style='display:none'>";
echo"<textarea name='answer' rows='5' cols='85'></textarea>";
echo"<br><br><center><input type='submit' value='Submt'></center>";
echo"</div>";
echo"</form>";
echo"<br>";
}
?>


<?php
include("includes/footer.php");
?>
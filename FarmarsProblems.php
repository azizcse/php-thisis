<?php
include("includes/header.php");
//include("includes/config.php");
?>	   
<script language="javascript" type="text/javascript" src="datetimepicker.js">
</script>
<style type="text/css">
.problem{
border:thin solid #553FAA;
background:center;
background:#A6CAF0;
}
.comment{

text-align:center;
border: solid thin #000000;
border-bottom-style:double;
background:#D4BFFF;
text-shadow:#008080;
font-size: 24px;
margin:5px;
margin-left:100px;
margin-right:100px;}
.answer{
border:thin solid #808080;
margin:5px; 
border-left:none;
border-right:none;
}
</style>
<!--<td width="200" height="365" bgcolor="#CCCCCC">-->

</td>

<td  height="365" background="images/untitled.JPG" valign="top">
<div class="comment">Posted Problems</div>
<?php
$link=connect_db();
if(isset($_GET['problem']))
{
$date=$_GET['date'];
$name=$_GET['framarName'];
$address=$_GET['address'];
$problem=$_GET['problem'];
$temp="yes";
if($problem!="")
{
$sql="INSERT INTO problems (name,address,date,problem,solution) VALUES('$name','$address','$date','$problem','$temp')";
$result=mysql_query($sql,$link)or die("Database Error".mysql_error());
}
}
$sql="SELECT * FROM problems";
$result=mysql_query($sql,$link)or die("No database selected".mysql_query());
while($row=mysql_fetch_array($result))
{
echo"<table width='100%' class='problem'cellspacing='5'><tr><td>Name of the farmar</td><td>$row[name]</td></tr>";
echo"<tr><td>Farmars Address</td><td>$row[address]</td></tr>";
echo"<tr><td>Date</td><td>$row[date]</td></tr>";
echo"<tr><td>My Problem</td><td>$row[problem]</td></tr>";
echo"</table>";
echo"<div class='answer'> <b>Your possible solution</b><br>";
echo $row['solution'];
echo"</div>";
echo"<br>";
}
?>
<form action="FarmarsProblems.php" method="get">
<input type="hidden" name="problem" value="true">
<table width="100%" cellspacing="5"><caption><font size="+3" color="#112295">Inform us About our Problems</font></caption>
<tr><td>Enter Your name</td><td><input type="text" name="framarName" size="40"></td></tr>
<tr><td>Enter your address</td><td><input type="text" name="address" size="40"></td></tr>
<tr><td>Select Date</td><td><input id="demo1" type="text" size="25" name="date"><a href="javascript:NewCal('demo1','MMMddyyyy')"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a></td></tr>
<tr><td>Your Problems details</td><td><textarea name="problem" cols="50" rows="5"></textarea></td></tr>
</table>
<center><input type="submit" value="Upload"></center></form>

<?php
include("includes/footer.php");
?>
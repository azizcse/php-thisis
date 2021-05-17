<?php
include("includes/header.php");
?>	
<?php

$user=$_POST['userName'];
$password=$_POST['password'];
if($user=="admin"&& $password=="admin")
{
$_SESSION['user']=$user;
header("location:index2.php");
}
else 
header("location:index.php");
?>
</td>
<td  height="365" background="images/untitled.JPG">
<?php
include("includes/footer.php");
?>
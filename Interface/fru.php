<?php
$u=$_POST["t1"];
$c=mysqli_connect("localhost","root","","fruits");
$q="select *from fruit";
$r=mysqli_query($c,$q);
if(mysqli_num_rows($r)>0)
{
while($z=mysqli_fetch_assoc($r)){
 echo $z['fadv'];
 echo $z['fimg'];
}
}
else
die('error');
?>



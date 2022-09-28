<?php

$n=$_POST['sname'];
$e=$_POST['semail'];
$k=$_POST['sphone'];
$d=$_POST['sdate'];
$t=$_POST['stime'];
$p=$_POST['speople'];
$m=$_POST['smessage'];


$conn=mysqli_connect("localhost","root","","resturent");
$q="INSERT INTO booktable (name,email,number,ddate,ttime,people,msg)VALUES('$n','$e','$k','$d','$t','$p','$m')";
$result=mysqli_query($conn,$q);
if(mysqli_affected_rows($conn)>0){
	echo "insert";
}else{
	echo"not";
}

?>
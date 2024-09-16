<?php

$feedback=$_POST['suggestion'];

 
$srvr="localhost";
$usr="root";
$pwd="";
$db="bcaproject";

$con = new mysqli($srvr,$usr,$pwd,$db);
if($con->connect_error)
{
    die("connection failed".$con->connect_error);
}
$qry="insert into fdbck(feedback)
            values('$feedback')";
if($con->query($qry))
    echo "'Thank you for your feedback. We'll appreciate!'";
else
   die("Something terrible happened. Please try again. ");
    include("dashboard.html");   
$con->close();
   


?>
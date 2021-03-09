<?php

  session_start();
 $server="localhost";
 $username="root";
 $password="";
 $dbName="nti2";

 $con=mysqli_connect( $server,$username,$password,$dbName);
 if(!$con){
     die('error: '.mysqli_connect_error());
 }
?>
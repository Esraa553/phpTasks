<?php 

     require 'dbConnection.php';

        if($_SERVER["REQUEST_METHOD"] == "POST"){

        $name = strip_tags(htmlspecialchars(trim($_POST['txtname'])));
        if(empty($name)){
            echo"please enter your name </br>";
        } 
        elseif (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            echo " Incorrect Name,please enter letters and white space Only </br>";
           }
        else{
            echo"Correct Name </br>";
        }  

        
        $password = md5(trim($_POST['password']));   
        $email = strip_tags(trim($_POST['email'])); 
        $phone =$_POST['phonenumber'];

     if(empty($name)  ||  empty($password)  || empty($email) || empty($phone)  ){
            echo 'empty field';
  }
      else {
          $sql=" insert into users(name,email,password,phone) values ('$name','$email','$password','$phone')";
          $op =  mysqli_query($con,$sql);

          if($op){
              echo 'Data inserted';
          }
      }

 }


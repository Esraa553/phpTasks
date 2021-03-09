<?php
  require 'dbConnection.php';
if($_SERVER['REQUEST_METHOD']== "POST"){
    $email = strip_tags(trim($_POST['email']));
    $password = $_POST['password'];

    $sql =" select * from users where email='".$email."' and password='".md5($password)."' ";
    $op  = mysqli_query($con,$sql);
    $data =mysqli_fetch_assoc($op);

    if(mysqli_num_rows($op)==1){
        $_SESSION['id'] = $data['id'];
        echo "login succses";
        header("Location:profile.php");

    }
    else {
        echo "error in login";
        header("Location:login.php");

    }
}

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<form action ="<?php $_SERVER['PHP_SELF']?>" method="Post">
<div class="container">
        <center>
        <h1> login page </h1>
        </center>
</div>
<div>
<label>Enter your Email</label>
<input placeholder="Enter your Email" type="email" required class="form-control" name="email">
</div>

<div>
<label>Password</label>
<input placeholder="Enter Password" required  type="password" class="form-control" name="password">
</div>

<input type="submit" value="login" name="btn" class="btn btn-success">
</form>
</body>
</html>


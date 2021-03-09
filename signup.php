<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<form action ="add.php" method="Post">
<div class="container">
        <center>
        <h1> Sign Up </h1>
        </center>
</div>
<label>Name</label>
<input placeholder="Enter your Name" required type="txt" class="form-control" name="txtname">
</br>
<label>Enter your Email</label>
<input placeholder="Enter your Email" type="email" required class="form-control" name="email">
</br>
<label>Phone Number</label>
<input placeholder="Enter Namber of subject" type="number" required class="form-control" name="phonenumber">
</br>
<label>Password</label>
<input placeholder="Enter Password" required  type="password" class="form-control" name="password">
</br>
<input type="submit" value="submit" name="btn" class="btn btn-success">
</form>
</body>
</html>
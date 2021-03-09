<?php
  require 'dbConnection.php';
  if(isset($_SESSION['id'])){
  $sql= " select * from users";
  $op = mysqli_query($con,$sql);

?>
<!DOCTYPE HTML
<html>

<head>
    <title>profile page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

</head>

<body>
    <div class="container">
        <div class="page-header">
            <h1>profile page ||  <a href="logout.php">LogOut</a>  </h1>

        </div>
        <table class='table table-hover table-responsive table-bordered'>
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>email</th>
                <th>phone</th>
                <th>Action</th>
            </tr>
<?php 
             while($data = mysqli_fetch_assoc($op)){

                echo '<tr>';
            
                echo '<td>'.$data["id"].'</td>';
                echo '<td>'.$data["name"].'</td>';
                echo '<td>'.$data["email"].'</td>';
                echo '<td>'.$data["phone"].'</td>';
                echo "<td>";
                // echo "<a href='delete.php?id=".$data['id']."' class='btn btn-danger m-r-1em'>Delete</a>";
                // echo "<a href='edit.php?id=".$data['id']."' class='btn btn-primary m-r-1em'>Edit</a> ";
                echo "</td>";

                echo '</tr>';
              }
?>
        </table>

    </div>
</body>
</html>

<?php 
   }
else{
    header("Location: login.php");
}
?>
</HTml>
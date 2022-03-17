<?php 
session_start();
include 'db_connect.php';
if(!empty($_REQUEST)){
    
  $sql="SELECT * from users where email='".$_REQUEST['email']."' and password='".md5($_REQUEST['password'])."'" ;

  if($result=mysqli_query($conn, $sql)){
    $row = $result->fetch_assoc();
    $_SESSION["user_id"]=$row['id'];
    $_SESSION["name"]=$row['firstname'];
    header("location:index.php");
  }else{
    $error="Wrong email/password ";
  }

}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- google foonts -->
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">
  <!-- custome css -->
  <link rel="stylesheet" href="../css/styleTwo.css">
  <!-- Font Awseam -->
  <link rel="stylesheet" href="../css/all.min.css">
  <title>login</title>
</head>

<body>
  <div class="test">
    <div class="container">
      <form action="login.php" method="post">
        <h3>King Marriott Course</h3>
        <div class="data">
          <i class="fa-solid fa-user"></i>
          <input type="email" required placeholder="Email" name="email"/>
        </div>
        <div class="data">
          <i class="fa-solid fa-key"></i>
          <input type="password" required placeholder="password" name="password"/>
        </div>
        <div class="buttom">
          <input type="submit" name="SubmitButton" value="login"/>
        </div>
        
      </form>
    </div>
  </div>
  <script src="../javascipt/script2.js"></script>
</body>

</html>
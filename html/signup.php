<?php 
session_start();
include 'db_connect.php';
if(!empty($_REQUEST)){
  if($_REQUEST['password'] != $_REQUEST['confirm_password'] ){
    $error="Password and confirm password doesn't match ";
  }else{
    $error='';
  }
  
  $dateOfBirth=$_REQUEST['day'].'-'.$_REQUEST['month'].'-'.$_REQUEST['year'];
  
  $sql="INSERT INTO `users`( `firstname`, `surname`, `email`, `password`, `gender`, `date_of_birth`) VALUES ('".$_REQUEST['firstname']."','".$_REQUEST['surname']."','".$_REQUEST['email']."','".md5($_REQUEST['password'])."','".$_REQUEST['gender']."','".$dateOfBirth."')";
  if($result=mysqli_query($conn, $sql)){
    $success="User created successful";
    $last_id = mysqli_insert_id($conn);
    $_SESSION["user_id"]=$last_id;
    $_SESSION["name"]=$_REQUEST['firstname'];
    header("location:index.php");
  }else{
    $success="";
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
  <link rel="stylesheet" href="../css/styleThree.css">
  <!-- Font Awseam -->
  <link rel="stylesheet" href="../css/all.min.css">
  <title>Sign up </title>
</head>

<body>
  <div class="sign-up">
    <div class="container">
      <form action="signup.php" method="post">
        <h2>sign up</h2>
        <span style="color:red">
        <?php
          if(!empty($error)){
           echo $error;
          }
        ?>
         </span>

         <span style="color:green">
        <?php
          if(!empty($success)){
           echo $success;
          }
        ?>
         </span>
        <div class="first">
          <input type="text" placeholder="First Name" name="firstname" required/>
          <input type="text" placeholder="Last Name"  name="surname" required/>
        </div>
        <div class="data">
          <input type="email" placeholder="Email"  name="email" required/>
          <input type="password" placeholder="Password"  name="password" required/>
          <input type="password" placeholder="Confirm Password"  name="confirm_password" required/>
        </div>
        <div class="radios">
          <h3>gender</h3>
          <div class="hendle">
            <div class="one">
              <label for="one">Male</label>
              <input type="radio" id="one" name="gender" value="male" required>
            </div>
            <div class="two">
              <label for="two">female</label>
              <input type="radio" id="two" name="gender" value="female"  required>
            </div>
            <div class="">
           
            </div>
          </div>
        </div>
        <div class="date">
          <h3>date of birth</h3>
          <div class="handel">
            <div class="one">
              <select name="day" id="day"  required>Day</select>
            </div>
            <div class="two">
              <select name="month" id="month"  required>Month</select>
            </div>
            <div class="three">
              <select name="year" id="years"  required>Year</select>
            </div>
          </div>
        </div>
        <div class="buttom">
          <input type="submit" name="SubmitButton" value="sign up"/>
        </div>
      </form>
    </div>
  </div>
  <script src="../javascipt/script3.js"></script>
</body>

</html>
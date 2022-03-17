<?php 
session_start();
$bookArray=[];
include 'db_connect.php';

$sql="SELECT * from courses" ;

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $resultArray[]=[
            "title"=>$row["title"]
            ,"description"=>$row["description"]
            ,"image"=>$row["image"]
            ,"link"=>$row["link"]
            ,"id"=>$row["id"]
        ];
    }
} 


$bookSql="SELECT * from user_courses where user_id='".$_SESSION["user_id"]."'" ;

$bookResult = $conn->query($bookSql);

if ($bookResult->num_rows > 0) {
    while($row = $bookResult->fetch_assoc()) {
        $bookArray[]=$row["id"];
    }
} 





if(!empty($_REQUEST['course_id'])){
  $course_id=$_REQUEST['course_id'];
  $user_id=$_SESSION['user_id'];

  $sql="INSERT INTO `user_courses` ( `user_id` , `course_id` ) VALUES ( '".$user_id."', '".$course_id."' );";
  
  $result = $conn->query($sql);

  header("location:my-courses.php");
  
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- font aweasom -->
  <link rel="stylesheet" href="../css/all.min.css">
  <!-- google foonts -->
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">
  <!-- custome css -->
  <link rel="stylesheet" href="../css/four.css">
  <title>King Marriott Course</title>
</head>

<body>
  <div class="container">

    <?php
    foreach($resultArray as $result){
    ?>

    <div class="slide " style="background-image: url(../image/<?php echo $result['image']; ?>);">
        <div class="content">
          <div class="text" style="background-color:black;">
            <h2 style="background-color:yellow;"><?php echo $result['title']; ?></h2>
            <p ><?php echo $result['description']; ?></p>

            <?php 
            if(in_array($result['id'], $bookArray)){
              echo '<p style="color:blue;">Already booked</p>';
            }else{
              ?>
              <form method="POST" class="form1" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <input type="hidden" name="course_id" value="<?php echo $result['id']; ?>">
          <button type="submit" style=" padding: 8px 50px;
  border-radius: 20px;
  font-size: 15px;
  border: 1px solid #ddd;
  outline: none;
  font-weight: bold;
  background-color: #03a9f4;
  color: white;
  cursor: pointer;">Book Course</button>
          </form>
            <?php
              
            }
              ?>

          </div>
        </div>
      </div>

      <?php
  }

      ?>
<!--
    
-->

    
  </div>
  
  <script src="../javascipt/script4.js"></script>
</body>

</html>

<?php 
session_start();
include 'db_connect.php';

$sql="SELECT a.* , c.id as user_id from courses a ,user_courses b , users c where a.id = b.course_id and c.id = b.user_id" ;

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
  

  echo '<div class="slide " style="background-image: url(../image/'.$result['image'].');">
      <div class="content">
        <div class="text">
          <h2>'.$result['title'].'</h2>
          <p>'.$result['description'].'</p>
          <a href="" data-link="'.$result['link'].'">Watch Now</a>
        </div>
      </div>
    </div>';

  }
  ?>
    
  </div>
  <script src="../javascipt/script4.js"></script>
</body>

</html>
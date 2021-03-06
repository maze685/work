<?php 
session_start();
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
  <link rel="stylesheet" href="../css/style.css">
  <title>King Marriott Course</title>
</head>

<body>
  <!-- Start Setting Box -->
  <div class="setting-box">
    <div class="toggle-cont">
      <i class="fa fa-gear setting"></i>
    </div>
    <div class="setting-container">
      <div class="option-box">
        <h4>Colors</h4>
        <ul class="colors-list">
          <li class="activee" data-color="#f44336"></li>
          <li data-color="#e91e63"></li>
          <li data-color="#9c27b0"></li>
          <li data-color="#673ab7"></li>
          <li data-color="#3f51b5"></li>
          <li data-color="#03A9F4"></li>
          <li data-color="#00bcd4"></li>
          <li data-color="#009688"></li>
          <li data-color="#4caf50"></li>
          <li data-color="#8bc34a"></li>
          <li data-color="#cddc39"></li>
          <li data-color="#ffc107"></li>
          <li data-color="#ff9800"></li>
          <li data-color="#ff5722"></li>
          <li data-color="#795548"></li>
          <li data-color="#9e9e9e"></li>
          <li data-color="#607d8b"></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End Setting Box -->
  <!-- Start NavBar -->
  <div class="navbar">
    <div class="container">
      <div class="logo">
        <img src="../image/cropped-logo-1-1.png" alt="">
        <h3>king marriott</h3>
      </div>
      <ul class="links">
        <li><a href="" class="active">من نحن </a></li>
        <li><a href="">التخصصات التي تتوافر في الأكادمية</a></li>


        <?php 
        if(!empty($_SESSION["name"])){
          ?>
          <li><a href="course.php">Course</a></li>
          <li><a href="my-courses.php">My Courses</a></li>
          <li>Hello <?php echo " ".$_SESSION["name"]." , "; ?><a href="logout.php">Logout?</a></li>
          <?php
        }
        ?>
      </ul>
    </div>
  </div>
  <!-- End NavBar -->
  <!-- Start Landing -->
  <div class="landing">
    <div class="container">
      <div class="content">
        <div class="text">
          <h1>King Marriott Course</h1>
          <p>                </p>
            <?php if(empty($_SESSION["name"])){ ?>
          <div class="buttom">
            <a href="login.php"><button>login</button></a>
            <a href="signup.php"><button>sign up</button></a>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  <!-- End Landing -->
  <!-- start about -->
  <div class="about">
    <div class="container">
      <span> <h1>من نحن </h1></span>
    
      <h1>فى ظل التقدم المعلوماتى اليوم أصبح الإنترنت جٌزءً من المنظومة التعليمية لدى الجميع بل أكثر من ذلك! حيث يعتمد البعض فى تعليمه إعتمادً كلياً على الإنترنت ولذالك راودنا فكره ان نقوم بأعداد 
ويب يجعل الطالب يتأقلم علي نظام التعليم و الاجتماعات اون لاين كما يعمل علي زيادة المهارات التكنولوجيا  لدي للطلبة ويساعده علي اكتساب مهارات مختلفة لتعدد و كثرة المحتويات المعروضة علي الموقع
 وهو يقوم علي عرض مجموعة من
الكورسات التي تساعد الطالب علي مواكبه سوق العمل  
كما تساعد علي الحدمن مشكلة البطالة 
</h1>
      
      
      </div>
      <div class="">
        <div class="   ">
          
        </div>
        <div>
        </div><div>
      </div>
    </div>
  </div>
  <div class="icon-font">
    <i class="fa-solid fa-angles-up"></i>
  </div>
  <!-- end about -->
  <!-- Start Progress -->
  <section class="one">
    <h2 class="special-heading"> التخصصات التي تتوافر في الأكادمية</h2>
    <p> </p>
    <div class="container">
      <div class="skillss">
        <h3>المعهد العالي للحاسب الآلي</h3>
        <div class="progress">
          <span style="width: 0;" data-width="95%"></span>
        </div>
        <h3>المعهد العالي للهندسة والتكنولوجيا   </h3>
        <div class="progress">
          <span style="width: 0;" data-width="80%"></span>
        </div>
        <h3>المعهد العالي للسياحة والفنادق </h3>
        <div class="progress">
          <span style="width: 0;" data-width="66%"></span>
        </div>
        <h3>المعهد العالي للسياحة والفنادق </h3>
        <div class="progress">
          <span style="width: 0;" data-width="90%"></span>
        </div>
      </div>
    </div>
  </section>
  <!-- End Progress -->
  <!-- start team section -->
  <div class="team">
    <div class="container">
      <h2 class="special-heading">فريقى العمل </h2>
      <p></p>
      <div class="team-box">
        <div class="box">
          <img src="../image/4.jpeg" alt="">
          <div class="box-text">
            <h4>designer</h4>

            <span>designer</span>
            <div class="box-icon">
              <i class="fa-brands fa-facebook"></i>
              <i class="fa-brands fa-twitter"></i>
              <i class="fa-brands fa-linkedin"></i>
            </div>
          </div>
        </div>
        <div class="box">
          <img src="../image/1.jpeg" alt="">
          <div class="box-text">
            <h4>designer</h4>

            <span>designer</span>
            <div class="box-icon">
              <i class="fa-brands fa-facebook"></i>
              <i class="fa-brands fa-twitter"></i>
              <i class="fa-brands fa-linkedin"></i>
            </div>
          </div>
        </div>
        <div class="box">
          <img src="../image/6.jpeg" alt="">
          <div class="box-text">
            <h4>Back End</h4>
            <span>designer</span>
            <div class="box-icon">
              <i class="fa-brands fa-facebook"></i>
              <i class="fa-brands fa-twitter"></i>
              <i class="fa-brands fa-linkedin"></i>
            </div>
          </div>
        </div>
        <div class="box">
          <img src="../image/article.jpg" alt="">
          <div class="box-text">
            <h4>Back End</h4>
            <span>     </span>
            <div class="box-icon">
              <i class="fa-brands fa-facebook"></i>
              <i class="fa-brands fa-twitter"></i>
              <i class="fa-brands fa-linkedin"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end team section -->

  <!-- start portfolio section -->
  <div class="portfolio">
  <div class="footer">
    &copy; 2022 <span>king meriotia</span> All Right Reserved
  </div>
  <!-- end footer -->
  <script src="../javascipt/script.js"></script>
</body>

</html>
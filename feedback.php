<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/main.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">Inland Tours & Travels</a>

   <nav class="navbar">
      <a href="index.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>feedback</h1>
</div>

<!-- booking section starts  -->

<section class="feedback">

   <h1 class="heading-title">We value your feedbak!</h1>

   <form action="feedback_form.php" method="post" class="feedback-form">
      <div class="flex">
         <div class="inputBox">
            <span>first name :</span>
            <input type="text" placeholder="enter your name" name="fname">
         </div>
         <div class="inputBox">
            <span>last name :</span>
            <input type="text" placeholder="enter your name" name="lname">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>country :</span>
            <input type="text" placeholder="enter your country" name="country">
         </div>
         <div class="inputBox">
            <span>feedback :</span>
            <input type="text" placeholder="enter your feedback" name="subject">
         </div>
      </div>

      <input type="submit" value="submit" class="btn" name="send">
   

   </form>

</section>

<!-- booking section ends -->

















<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="index.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="./privacy.php#privacy"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="./terms.php#terms"><i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="tel:+91-9847449044"> <i class="fas fa-phone"></i> +91-9847449044 </a>
         <a href="tel:+91-8848474994"> <i class="fas fa-phone"></i> +91-8848474994 </a>
         <a href="mailto: info@inlandtours.in "> <i class="fas fa-envelope"></i>  Info@Inlandtours.In </a>
         <a href="#"> <i class="fas fa-map"></i> Nilambur, india - 679331 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="https://www.facebook.com/profile.php?id=100086423054721"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="https://www.instagram.com/invites/contact/?i=msrdweo0egra&utm_content=pqfzh7y"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="rights flex-row">
      <h3 class="text-gray">
         Copyright ©2022 All rights reserved | made by
         <a href="home.php" target="_black"><span>InLand Tours & Travels </span></a>
         <a href="#" target="_black">(Alwyn Sebastian)</a>
      </h3>
   </div>
   <div class="call">
      <button class="btn form-btn"><a href="tel:+91-9847449044">Talk with our Travel Expert</a></button>
   </div>
</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
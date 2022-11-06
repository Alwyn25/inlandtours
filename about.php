<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/about.css">

</head>

<style>
.container{
  box-sizing: border-box;
  width:100%;
}

img {
  vertical-align: middle;
  height: 25%;
}

/* Position the image container (needed to position the left and right arrows) */
.box-container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}
.mySlides .head{
   font-size:30px;
}
.mySlides .para{
   font-size:15px;
}


.content1{
   display: block;
   justify-content: center;
   align-items: center;
   position: absolute;
   top:20%;
   left:20%;
   width:100%;
   background-color: none;
   color: white;
}
.content2{
   display: block;
   justify-content: center;
   align-items: center;
   position: absolute;
   top:30%;
   left:3%;
   width:100%;
   background-color: none;
   color: white;
}
.content3{
   display: block;
   justify-content: center;
   align-items: center;
   position: absolute;
   top:30%;
   left:40%;
   width:100%;
   background-color: none;
   color: white;
}


/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

@media (max-width:450px){

   .mySlides .head{
      font-size:1.5rem;
   }
   .mySlides .para{
      font-size:1rem;
   }

}
</style>

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

<div class="heading" style="background:url(images/header-bg-1.png) no-repeat">
   <h1>about us</h1>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="image">
      <img src="images/about-image.jpg" alt="">
   </div>

   <div class="content">
      <h3>why choose us?</h3>
      <p>Your time is valuable. When you pick Inland tours & travels, we devote time to organising a first-rate experience based on our local knowledge, allowing you to spend your free time as you see fit. And once you're on the road, each day of your personalised schedule is designed to be unforgettable.</p>
      <div class="icons-container">
      <div class="icons">
            <span>Experience</span>
         </div>
         <div class="icons">
            <span>Advocate</span>
         </div>
         <div class="icons">
            <span>Resources</span>
         </div>
         <div class="icons">
            <span>Convenience</span>
         </div>
         <div class="icons">
            <span>Added Value</span>
         </div>
         <div class="icons">
            <span>Because we Are Awesome</span>
         </div>
         <div class="icons">
            <i class="fas fa-universal-access"></i>
            <span>Exclusive Access</span>
         </div>
         <div class="icons">
            <i class="fas fa-piggy-bank"></i>
            <span>save money</span>
         </div>
         <div class="icons">
            <i class="fas fa-heart"></i>
            <span>Good Relationship</span>
         </div>
         <div class="icons">
            <i class="fas fa-map"></i>
            <span>top destinations</span>
         </div>
         <div class="icons">
            <i class="fas fa-hand-holding-usd"></i>
            <span>affordable price</span>
         </div>
         <div class="icons">
            <i class="fas fa-headset"></i>
            <span>24/7 guide service</span>
         </div>
      </div>
   </div>

</section>

<!-- about section ends -->

<section class="staty">
   <div class="statistics">
         <h1 class="head"> We are InLand Tours & Travels</h1>
         <div class="stat">
            <div class="act">
               <h1>200+</h1>
               <h3>A C T I V I T I E S</h3>
            </div>
            <div class="dest">
               <h1>200+</h1>
               <h3>D E S T I N A T I O N S</h3>
            </div>
            <div class="supply">
               <h1>200+</h1>
               <h3>S U P P L I E R S</h3>
            </div>
         </div>
   </div>
</section>

<section class="container">
   <!-- Container for the image gallery -->
   <div class="box-container">

      <!-- Full-width images with number text -->
      <div class="mySlides">
         <div class="numbertext">1 / 6</div>
         <div class="content1">
            <h1 class="head">Our Values</h1>
            <p class="para">
            Dare to live the life you've always wanted.
            </p>
         </div>
         <img src="images\bg-1.jpg" style="width:100%">
      </div>

      <div class="mySlides">
         <div class="numbertext">2 / 6</div>
         <div class="content2">
            <h1 class="head" >01 . Structuring / Choice / Agglomerate</h1>
            <p class="para">
            The greatest part of travelling is having new experiences, and at Inland Tours & Travels, <br>
            our product team handpicks not only the most well-liked but also the most unusual ones to <br>
            guarantee that your trip will be one to remember.
            </p>
         </div>
         <img src="images\bg-2.jpg" style="width:100%">
      </div>

      <div class="mySlides">
         <div class="numbertext">3 / 6</div>
         <div class="content2">
            <h1 class="head">02 . Excellent Assurance of Quality</h1>
            <p class="para">
            The outdoor team at Inland Tours & Travels makes sure that only reputable, high-caliber <br> providers
            are included for the experiences. We conduct unexpected audits, establish SOPs, <br> and use a thorough 
            evaluation system to highlight the integrity of on-the-ground service delivery.
            </p>
         </div>
         <img src="images\bg-3.jpg" style="width:100%">
         
      </div>

      <div class="mySlides">
         <div class="numbertext">4 / 6</div>
         <div class="content2">
            <h1 class="head">03 . Best Price</h1>
            <p class="para">
            The best things do have a cost, but the cost must be reasonable. With Inland Tours & Travels, <br>
            you get what you pay for and you know what you're getting. </p>
            </p>
         </div>
         <img src="images\bg-4.jpg" style="width:100%">
      </div>

      <div class="mySlides">
         <div class="numbertext">5 / 6</div>
         <div class="content2">
            <h1 class="head">Accessibility</h1>
            <p class="para">
            Our team explores the greatest accessible opportunities. They handpick the most interesting,<br> 
            unknown, and local experiences from genuine operators.
            </p>
         </div>
         <img src="images\bg-5.jpg" style="width:100%">
      </div>

      <div class="mySlides">
         <div class="numbertext">6 / 6</div>
         <div class="content3">
            <h1 class="head">Thank You</h1>
            <p class="para">
            &nbsp; &nbsp; for choosing us
            </p>
         </div>
         <img src="images\bg-6.jpg" style="width:100%">
      </div>

      <!-- Next and previous buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>


      <!-- Thumbnail images -->
      <div class="row">
         <div class="column">
            <img class="demo cursor" src="images\bg-1.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
         </div>
         <div class="column">
            <img class="demo cursor" src="images\bg-2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
         </div>
         <div class="column">
            <img class="demo cursor" src="images\bg-3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
         </div>
         <div class="column">
            <img class="demo cursor" src="images\bg-4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
         </div>
         <div class="column">
            <img class="demo cursor" src="images\bg-5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
         </div>
         <div class="column">
            <img class="demo cursor" src="images\bg-6.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
         </div>
      </div>
   </div>
</section>
<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
// </script>
// <!-- reviews section starts  -->

// <section class="reviews">

//    <h1 class="heading-title"> clients reviews </h1>

//    <div class="swiper reviews-slider">

//       <div class="swiper-wrapper">

//          <div class="swiper-slide slide">
//             <div class="stars">
//                <i class="fas fa-star"></i>
//                <i class="fas fa-star"></i>
//                <i class="fas fa-star"></i>
//                <i class="fas fa-star"></i>
//                <i class="fas fa-star"></i>
//             </div>
//             <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus facilis laudantium magnam saepe magni ullam possimus laborum voluptas, veniam ipsum officiis quae doloribus minima ut quis. Molestiae qui distinctio possimus?</p>
//             <h3>john deo</h3>
//             <span>traveler</span>
//             <img src="images/pic-1.png" alt="">
//          </div>

//          <div class="swiper-slide slide">
//             <div class="stars">
//                <i class="fas fa-star"></i>
//                <i class="fas fa-star"></i>
//                <i class="fas fa-star"></i>
//                <i class="fas fa-star"></i>
//             </div>
//             <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus repellendus et suscipit optio similique totam aut laborum ullam sequi! In!</p>
//             <h3>john deo</h3>
//             <span>traveler</span>
//             <img src="images/pic-2.png" alt="">
//          </div>

//          <div class="swiper-slide slide">
//             <div class="stars">
//                <i class="fas fa-star"></i>
//                <i class="fas fa-star"></i>
//                <i class="fas fa-star"></i>
//             </div>
//             <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus enim deserunt, ab at ea iste odio placeat doloribus eum dolores tempore obcaecati, dolore esse aperiam. Excepturi ad quo distinctio, dignissimos voluptate, dolores, saepe animi eum atque sint esse ab exercitationem!</p>
//             <h3>john deo</h3>
//             <span>traveler</span>
//             <img src="images/pic-3.png" alt="">
//          </div>

//          <div class="swiper-slide slide">
//             <div class="stars">
//                <i class="fas fa-star"></i>
//                <i class="fas fa-star"></i>
//                <i class="fas fa-star"></i>
//                <i class="fas fa-star"></i>
//                <i class="fas fa-star"></i>
//             </div>
//             <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus recusandae cum quibusdam odio dignissimos nemo?</p>
//             <h3>john deo</h3>
//             <span>traveler</span>
//             <img src="images/pic-4.png" alt="">
//          </div>

//          <div class="swiper-slide slide">
//             <div class="stars">
//                <i class="fas fa-star"></i>
//                <i class="fas fa-star"></i>
//                <i class="fas fa-star"></i>
//             </div>
//             <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus facilis laudantium magnam saepe magni ullam possimus laborum voluptas, veniam ipsum officiis quae doloribus minima ut quis. Molestiae qui distinctio possimus?</p>
//             <h3>john deo</h3>
//             <span>traveler</span>
//             <img src="images/pic-5.png" alt="">
//          </div>

//          <div class="swiper-slide slide">
//             <div class="stars">
//                <i class="fas fa-star"></i>
//                <i class="fas fa-star"></i>
//                <i class="fas fa-star"></i>
//                <i class="fas fa-star"></i>
//             </div>
//             <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus facilis laudantium magnam saepe magni ullam possimus laborum voluptas, veniam ipsum officiis quae doloribus minima ut quis. Molestiae qui distinctio possimus?</p>
//             <h3>john deo</h3>
//             <span>traveler</span>
//             <img src="images/pic-6.png" alt="">
//          </div>

//       </div>

//    </div>

// </section>


<!-- <section class="feedback-title">
   <div class="site-background" id="home">
         <h1 class="heading-title">We value your feedback</h1>
         <a href="feedback.php"><button class="btn feedback-btn">Write your experience with Inland tours & travels</button></a>
   </div>
</section> -->

<!-- reviews section ends -->















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
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
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

<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>
<?php include('includes/banner.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
    <link rel="stylesheet" href="assets/css/style.css"> 
    <style>
    /* html{
   font-size: 62.5%;
   overflow-x: hidden;
} */
</style>

</head>
<body>
   
<section class="about" style>

   <div class="row">

      <div class="image">
         <img src="images/UTHM.png" alt="">
      </div>

      <div class="content">
         <h3>Dedication from Group 13 to our Beloved University</h3>
         <p>Group 13's Dedication website stands as a testament to our profound gratitude and appreciation for our beloved university. Create with heartfelt dedication, this platform symbolizes our admiration and respect for the institution that has nurtured our growth and shaped our academic journey. It serves as a digital homage, showcasing our collective gratitude through personalized messages, memorable anecdotes, and vibrant visuals. Every pixel and line of code reflects our deep-seated appreciation, aiming to immortalize our bond with the university and express our unwavering loyalty for years to come.</p>
         <a href="https://chat.whatsapp.com/ESfK950cJZ9E2zDWKtGnkp" class="btn">contact us</a>
      </div>

   </div>

</section>
<br><br>
<br>
<br>

<section class="reviews">
   
   <h1 class="heading">Developers</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img  src="images/1.jpg" alt="">
         <p></p>
         <p>Major: BIW </p>
         <p>Semster : 5 </p>
         <p>Matric : AI210012</p>
         <h3>Mohammed Taresh Alqadasi</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/2.jpg" alt="">
         <p></p>
         <p>Major: BIM </p>
         <p>Semster : 5 </p>
         <p>Matric : AI210028</p>
         <h3>Ali Mohamed Elhefnawy</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/3.jpg" alt="">
         <p></p>
         <p>Major: BIM </p>
         <p>Semster : 5 </p>
         <p>Matric : AI210169</p>
         <h3>NUR ZAHRAH BINTI MOHD ZAIN</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/4.jpg" alt="">
         <p> </p>
         <p>Major: BIM</p>
         <p>Semster : 5 </p>
         <p>Matric : AI210220</p>
         <h3>NUR SYAFIQAH SYAHIRA BINTI AB RAHMAN</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/5.jpg" alt="">
         <p></p>
         <p>Major: BIM </p>
         <p>Semster : 5 </p>
         <p>Matric : AI210169</p>
         <h3>Chiew Mei Chun</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/6.jpg" alt="">
         <p> </p>
         <p>Major : BIM </p>
         <p>Semster : 5 </p>
         <p>Matric : AI210321</p>
         <h3>Yuki Kot</h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>










<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>
<?php include('includes/footer.php'); ?>
</body>
</html>

























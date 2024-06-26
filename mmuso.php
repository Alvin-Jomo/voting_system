<?php

$conn = mysqli_connect('localhost','root','','vote') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>mmuso page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/folio.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<!-- header section starts  -->

<header class="header">

   <div id="menu-btn" class="fas fa-bars"></div>

 <div class="user">
   <img src="img/h.jpg">
   <h3 class="name">MMUSO</h3>
   <p class="post">Council</p>
<div id="#menu" class="fas fa-bars"></div>
   <nav class="navbar">
      <a href="#home" class="active">Home</a>
      <a href="#about">About</a>
      <a href="#portfolio">Pictures</a>
      <a href="#contact">Contact</a>
   </nav>

   <div class="follow">
      <a href="https://m.facebook.com/google.api" class="fab fa-facebook-f"></a>
      <a href="" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="img/council.jpeg" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up"> WELCOME TO MMUSO COUNCIL</h3>
      <span data-aos="fade-up">University of Choice</span>
      <p data-aos="fade-up">located around Kakamega town</p>
      <a data-aos="fade-up" href="#about" class="btn">about the university</a>
   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>UNIVERSITY INFORMATION</span> </h1>

   <div class="biography">

      <p data-aos="fade-up">University Contact Information.</p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span> Masinde Muliro University Of Science And technology </h3>
         <h3 data-aos="zoom-in"> <span>email : </span> info@mmust.ac.ke </h3>
         <h3 data-aos="zoom-in"> <span>address : </span>PO Box 190-50100, Kakamega </h3>
         <h3 data-aos="zoom-in"> <span>phone : </span> +057-2505222/3,0702597360 </h3>
         <h3 data-aos="zoom-in"> <span>fax : </span> +056-30153 </h3>
         <h3 data-aos="zoom-in"> <span>web : </span> www.mmust.ac.ke </h3>
      </div>



<section class="portfolio" id="portfolio">

   <h1 class="heading" data-aos="fade-up"> <span>University Pictures</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <img src="img/library.jpeg" alt="">
         <h3>Library</h3>
        
      </div>

      <div class="box" data-aos="zoom">
         <img src="img/spd.jpeg" alt="">
        <h3>SPD building</h3>
         
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="img/hostel.jpeg" alt="">
         <h3>Hostel</h3>        
        
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="img/admin.jpeg" alt="">
         <h3>Administration Block</h3>
       
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="img/mmust.jpeg" alt="">
        <h3>University Logo</h3>
        
      </div>


</section>

<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>contact Us</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
   </form>

   <div class="box-container">

   <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>phone</h3>
         <p>+057-2505222/3,0702597360</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>info@mmust.ac.ke</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>address</h3>
         <p>PO Box 190-50100, Kakamega </p>
      </div>
   

</section>

<!-- contact section ends -->

<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Alioya Jomo Alvin</span> </div>












<!-- custom js file link  -->
<script src="js/folio.js"></script>

<!-- aos js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
   
</body>
</html>
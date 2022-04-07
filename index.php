<?php

$conn = mysqli_connect('localhost','root','','portfolio') or die('connection failed');

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
   <title>Personal Portfolio</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

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

   <a href="#home" class="logo">Portfolio</a>

   <nav class="navbar">
      <a href="#home" class="active">Home</a>
      <a href="#about">About</a>
      <a href="#services">Services</a>
      <a href="#portfolio">Projects</a>
      <a href="#contact">Contact</a>
   </nav>

   <div class="follow">
      <a href="#" class="fab fa-vercel"></a>
      <a href="https://www.instagram.com/pdm_242/" class="fab fa-instagram"></a>
      <a href="https://www.linkedin.com/in/priyanka-mane" class="fab fa-linkedin"></a>
      <a href="https://github.com/pd-11" class="fab fa-github"></a>
   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">
<!--
   <div class="image" data-aos="fade-right">
      <img src="images/user-img.jpg" alt="">
   </div>
-->
   <div class="content">
      <h3 data-aos="fade-up">Hi, I am Priyanka Mane</h3>
      <span data-aos="fade-up">BE CSE Student</span>
      <h1 data-aos="fade-up">My three major interests and passions are Computer Science, Maths and Music, and I believe that there is a creative fusion between all these disciplines</h1>
      <a data-aos="fade-up" href="#about" class="btn">About me</a>
   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>About me</span> </h1>

   <div class="biography">

      <p data-aos="fade-up"></p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span> Priyanka Mane</h3>
         <h3 data-aos="zoom-in"> <span>email : </span> pdmane242@gmail.com </h3>
         <h3 data-aos="zoom-in"> <span>address : </span> Belagavi, Karnataka, India </h3>
         <h3 data-aos="zoom-in"> <span>phone : </span> +91 9686241323 </h3>
         <h3 data-aos="zoom-in"> <span>age : </span> 21 years </h3>
         <h3 data-aos="zoom-in"> <span>experience : </span> 2 months as intern</h3>
      </div>

      <a href="PRIYANKA_MANE_Resume.pdf" class= "btn" data-aos="fade-up"><i class="fa fa-download"></i> RESUME </a>

   </div>
   
   <div class="skills" data-aos="fade-up">

      <h1 class="heading"> <span>skills</span> </h1>

      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3><span>HTML</span> <span>95%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>CSS</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>JavaScript</span> <span>85%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>Sql</span> <span>70%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>Java</span> <span>85%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>Python</span> <span>60%</span></h3> </div>
      </div>

   </div>

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span>education & experience</span> </h1>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-right">education</h3>

            <div class="box" data-aos="fade-right">
               <span>(2017)</span>
               <h3>SSLC</h3>
               <p>Jawahar  Navodaya Vidyalaya Kothali Belagavi 590008
               </p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2017 - 2019 )</span>
               <h3>PUC</h3>
               <p>KLE G I  Bagewadi College Nipani 591237
               </p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2019 - 2023 )</span>
               <h3>BE CSE</h3>
               <p>KLS  Gogte Institute  of Technology, Belagavi 590008
               </p>
            </div>

         </div>

         <div class="box-container">

            <h3 class="title" data-aos="fade-left">experience</h3>

            <div class="box" data-aos="fade-left">
               <span>(2022)</span>
               <h3>Software developer (Intern)</h3>
               <p>Interned as Software developer at stige and explored the frameworks of javascript and on nosql database using mongoDB. Build some projects based on the knowledge gained.</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>(2020)</span>
               <h3>Data analytics (Intern)</h3>
               <p>Worked on excel, Tableau for data visualization and analysed the data</p>
            </div>

         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading" data-aos="fade-up"> <span>projects</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         
         <h3>Online movie ticket booking system</h3>
         <p>It is  a website designed for online booking the seats for cinema halls.Also user can select theathre, book seats and make online payment. It is designed and developed using HTML, CSS, Javascript, php and mysql database.</p>
         
      </div>

      <div class="box" data-aos="zoom-in">
         
         <h3>Weather App</h3>
         <p>App takes a location from the user and then it gives it’s current weather forecast.The Open Weather Map API is used for weather information.This app is designed and developed using node.js and express.js as backend</p>
      </div>

      <div class="box" data-aos="zoom-in">
        
         <h3>Learning management system</h3>
         <p>This is the online Learning website where the user can login and learn from anywhere and anytime. Also user can manage his own tasks.It is designed and developed using HTML, CSS, Javascript, react, node.js, express.js and mangodb for database.</p>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="5"></textarea>
      <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
   </form>
   
</section>
   <div class="follow">
      <a href="#" class="fab fa-vercel"></a>
      <a href="https://www.instagram.com/pdm_242/" class="fab fa-instagram"></a>
      <a href="https://www.linkedin.com/in/priyanka-mane" class="fab fa-linkedin"></a>
      <a href="https://github.com/pd-11"  class="fab fa-github"></a>
   </div>
<!-- contact section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>

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
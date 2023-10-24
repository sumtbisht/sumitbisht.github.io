<?php
include('db.php');

$sql = "SELECT * FROM `user` WHERE `user`.`id` = 1";
$result = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($result);

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $data['name']?> - <?php echo $data['title']?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal
  * Updated: Jun 18 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <h1><a href="index.php"><?php echo $data['name']?></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2>I'm a passionate <span><?php echo $data['title']?></span> from <?php echo $data['place']?></h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Home</a></li>
          <li><a class="nav-link" href="#about">About</a></li>
          <li><a class="nav-link" href="#resume">Resume</a></li>
          <li><a class="nav-link" href="#services">Services</a></li>
          <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        <?php
        if($data["twitter"]){
          ?>
        <a href="<?php echo $data['twitter'] ?>" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
          <?php
        }
        
        ?>


        <a href="<?php echo $data ['facebook']?>" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="<?php echo $data ['instagram']?>" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="<?php echo $data ['linkedin']?>" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
        <a href="<?php echo $data ['youtube']?>" target="_blank" class="youtube"><i class="bi bi-youtube"></i></a>
        <a href="<?php echo $data ['github']?>" target="_blank" class="github"><i class="bi bi-github"></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">
    <?php
      $about = "SELECT * FROM `about` WHERE `about`.`id` = 1";
      $about_result = mysqli_query($con,$about);
      $about_data = mysqli_fetch_assoc($about_result);
      
      ?>
     

      <div class="section-title">
        <h2>About</h2>
        <p>Learn more about me</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/me.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3><?php echo $data ['title']?></h3>
          <p class="fst-italic">
       
            <?php echo $about_data['slogan']?>
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span><?php echo $about_data['birthday']?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span><?php echo $about_data['website']?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><?php echo $about_data['phone']?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><?php echo $about_data['city']?></span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?php echo $about_data['age']?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span><?php echo $about_data['degree']?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span><?php echo $about_data['phemailone']?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span><?php echo $about_data['freelance']?></span></li>
              </ul>
            </div>
          </div>
        
        </div>
      </div>

    </div><!-- End About Me -->

    <!-- ======= Counts ======= -->

    <?php
    $counter = "SELECT * FROM `count`";
    $counter_result = mysqli_query($con, $counter);
    ?>
     <div class="counts container">

<div class="row">
    <?php
    // $counter_data = mysqli_fetch_assoc($counter_result);
    if($counter_result ->num_rows > 0){
      while($row = $counter_result -> fetch_assoc()){
        ?>
        
        <div class="col-lg-3 col-md-6 mt-5">
        <div class="count-box">
          <i class="<?php echo $row['icon']?>"></i>
          <span data-purecounter-start="<?php echo $row['pre']?>" data-purecounter-end="<?php echo $row['post']?>" data-purecounter-duration="1" class="purecounter"></span>
          <p><?php echo $row['title']?></p>
        </div>
      </div>
      <?php

      }
    }
    ?>
   

       


      </div>

    </div><!-- End Counts -->

    <!-- ======= Skills  ======= -->
    <div class="skills container">

      <div class="section-title">
        <h2>Skills</h2>
      </div>

      <div class="row skills-content">

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">HTML <i class="val">100%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">CSS <i class="val">90%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">JavaScript <i class="val">75%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">PHP <i class="val">80%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">MYSQL <i class="val">90%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

         

        </div>

      </div>

    </div><!-- End Skills -->

    <!-- ======= Interests ======= -->
   
              <div class="interests container">
              <div class="section-title">
                <h2>Interests</h2>
              </div>
              <div class="row">
              <?php
                    $skill = "SELECT * FROM `skills`";
                    $skill_result = mysqli_query($con,$skill);
                    ?>
              <?php
     

      if($skill_result ->num_rows > 0){
        while($skill_row = $skill_result -> fetch_assoc()){
          ?>
          
          <div class="col-lg-3 col-md-4 mt-3">
          <div class="icon-box">
            <i class="<?php echo $skill_row['icon']?>" style="color: #<?php echo $skill_row['color']?>;"></i>
            <h3><?php echo $skill_row['title']?></h3>
          </div>
          </div>

          <?php

        }
      }
      
      ?>
      </div>


        </div>



   
    <!-- End Interests -->

    <!-- ======= Testimonials ======= -->
    <div class="testimonials container">

      <div class="section-title">
        <h2>Testimonials</h2>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">
          <?php
          $qotes = "SELECT * FROM `test`";
          $qotes_results = mysqli_query($con,$qotes);

          if($qotes_results -> num_rows >0){
            while($qotes_row = $qotes_results -> fetch_assoc()){
              ?>
              <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
               <?php echo $qotes_row['qote']?>
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3><?php echo $qotes_row['name']?></h3>
              <h4><?php echo $qotes_row['title']?></h4>
            </div>
          </div><!-- End testimonial item -->


              <?php
            }
          }
          
          
          ?>

          

          

        </div>
        <div class="swiper-pagination"></div>
      </div>

      <div class="owl-carousel testimonials-carousel">

      </div>

    </div><!-- End Testimonials  -->

  </section><!-- End About Section -->

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Resume</h2>
        <p>Check My Resume</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="resume-title">Sumary</h3>
          <div class="resume-item pb-0">
            <h4>Sumit Bisht</h4>
            <p><em>Web Developer <br>
              I am a web developer know the knowledge of both frontend and backend.

            </em></p>
          
          </div>

          <h3 class="resume-title">Education</h3>
          <div class="resume-item">
            <h4>Bachelor's Of Science</h4>
            <h5>2015 - 2018</h5>
            <p><em>Swami Vivekanand Shubharti University</em></p>
          
          </div>
         
        </div>
        <div class="col-lg-6">
          <h3 class="resume-title">Skills</h3>
          <div class="resume-item">
            <h4>Web Developer</h4>
           
              <li>Front-end : HTML5 , CSS3 , BOOTSTRAP4 , </li>
              <li>Back-end : PHP , MYSQL </li>
              
            
            </p>
          </div>
          
        </div>
      </div>

    </div>
  </section><!-- End Resume Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Services</h2>
        <p>My Services</p>
      </div>
      <?php
      $service = "SELECT * FROM `service`";
      $service_result = mysqli_query($con,$service);
      ?>
           <div class="row">
          <?php
          if($service_result -> num_rows > 0){
            while($service_row = $service_result ->fetch_assoc()){
              ?>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-3">
          <div class="icon-box">
            <div class="icon"><i class="<?php echo $service_row['icon']?>"></i></div>
            <h4><a href=""><?php echo $service_row['title']?></a></h4>
            <p><?php echo $service_row['text']?></p>
          </div>
        </div>
        <?php
            }
          }
          else{
            echo "no result found";
          }
          ?>
      </div>
      </div>
  </section><!-- End Services Section -->
  <!-- ======= Portfolio Section ======= -->
          




  <section id="portfolio" class="portfolio">
    <div class="container">
      <div class="section-title">
        <h2>Portfolio</h2>
        <p>My Works</p>
      </div>
      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <?php
             $cat_list = "SELECT * FROM `category`";
             $cat_result = mysqli_query($con,$cat_list);
             if($cat_result ->num_rows){
              while($cat_row = $cat_result-> fetch_assoc()){
                ?>
                   <li data-filter=".<?php echo $cat_row['name']?>"><?php echo $cat_row['name']?></li>
                   <?php
              }
             }
             
             
             ?>
                 
          </ul>
        </div>
      </div>
      <div class="row portfolio-container">
      <?php
            $portfolio = "SELECT * FROM `portfolio`";
            $portfolio_result = mysqli_query($con, $portfolio);


            if($portfolio_result -> num_rows >0){
              while($portfolio_row = $portfolio_result ->fetch_assoc()){
               $category= $portfolio_row['category'];
               $category_sql = "SELECT * FROM `category` WHERE `category`.`id`='$category'";
               $category_result = mysqli_query($con,$category_sql);
               $category_row =mysqli_fetch_assoc($category_result); 
              ?>
                 <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo $category_row['name']?>">
          <div class="portfolio-wrap">
            <img src=<?php echo $portfolio_row['image']?> class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?php echo $portfolio_row['title']?></h4>
              <p><?php echo $category_row['name']?></p>
              <div class="portfolio-links">
                <a href="<?php echo $portfolio_row['image']?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $portfolio_row['title']?>"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.php?id=<?php echo $portfolio_row['id']?>" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>
        <?php
      }

            }
             ?>
            

     
       
      </div>
    
  </section><!-- End Portfolio Section -->
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">
      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>
      <div class="row mt-2">
        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p><?php echo $data['place']?></p>
          </div>
        </div>
        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">
              <a href="<?php echo $data['twitter']?>" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="<?php echo $data['facebook']?>"   class="facebook"> <i class="bi bi-facebook"></i></a>
              <a href="<?php echo $data['instagram']?>" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="<?php echo $data['linkedin']?>" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p><?php echo $data['email']?></p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p><?php echo $about_data['phone']?></p>
          </div>
        </div>
      </div>
      <?php
      // include('db.php');
      if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email =$_POST['email'];
        $subject =$_POST['subject'];
        $message =$_POST['message'];
        $contact = "INSERT INTO `contact`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";
        
        $query = mysqli_query($con,$contact);
               if($query){
        echo "data sent";
          }else {
        echo "data not sent";
            }

      }
      ?>
      <form  method="post" role="form" class="php-email-form mt-4">
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
        </div>
        <div class="form-group mt-3">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="text-center mt-3">
          <button type="submit" name="submit">Send Message</button></div>
      </form>
    </div>
  </section><!-- End Contact Section -->
  <div class="credits">
  <?php
  $detail= "SELECT * FROM `detail` WHERE `detail`.`id`= 1";
  $dresult = mysqli_query($con,$detail);
  $detail_data = mysqli_fetch_assoc($dresult);
  
  ?>
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
    Designed by <a href="<?php echo $detail_data['url']?>" target="_blank"><?php echo $detail_data['company']?></a>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>KIU | IPD</title>
  <link rel="stylesheet" href="./bootstrap-4.6.1-dist/css/bootstrap.css" />
  <link rel="stylesheet" href="./fontawesome-free-6.1.1-web/css/all.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
  <!-- <script src="./js/home.js"></script> -->
  <script src="./counter/counter-up/jquery.counterup.min.js"></script>
</head>

<body class="">
  <!-- header starts here -->
  <div class="container-fluid p-4">
    <div class="d-flex justify-content-between ">
      <div class="d-flex">
        <img src="./assets/logo/KIU LOGO (1).png" class="w-20" alt="">
        <img src="./assets/logo/IPD LOGO.png" class="w-20" alt="">
      </div>
      <div class=" ">
        <div class="d-flex mt-3">
          <a href="#" class="text-white pr-3"><i class="fab lead text-primary rounded-circle fa-facebook"></i></a>
          <a href="#" class="text-white pr-3"><i class="fab lead text-primary rounded-circle fa-twitter"></i></a>
          <a href="#" class="text-white pr-3"><i class="fab lead text-primary rounded-circle fa-linkedin-in"></i></a>
          <a href="#" class="text-white pr-3"><i class="fab lead text-danger rounded-circle fa-youtube"></i></a>
        </div>
      </div>
    </div>
  </div>
  <!-- header ends here -->

  <!-- navbar starts here -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light py-3 w-100 navigation shadow justify-content-around">
    <!-- <a class="navbar-brand mr-5 text-white ml-5 w-20" href="#" data-value="home"><img src="./assets/logo/logo.svg"
        alt="brand img" /></a> -->
    <div class="d-flex align-items-center w-100">
      <button class="navbar-toggler bg-primary" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        <i class="fas fa-align-justify text-white"></i>
      </button>
      <div class="collapse navbar-collapse menu-bar w-100 justify-content-end">
        <ul class="navbar-nav justify-content-between">
          <li class="nav-item active">
            <a class="h5" href="#" data-value="about">
              <button type="button" class="font-weight-normal btn nav-btn text-dark px-lg-4">
                Home</button><span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="h5" href="aboutus.php" data-value="Portfolio">
              <button type="button" class="font-weight-normal btn nav-btn text-dark px-lg-4">
                About Us
              </button>
            </a>
            <div class="sub-menu-1">
              <ul>
                <li><a href="staff.php" class="d-block">Meet Our Team</a></li>
                <li><a href="aboutus.php" class="d-block">Our Vision</a></li>
                <li><a href="aboutus.php" class="d-block">Our Culture</a></li>
                <li>
                  <a href="aboutus.php" class="d-block">Our Services</a>
                </li>
                <li>
                  <a href="aboutus.php" class="d-block">Our Facilities</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="h5" href="courses.php" data-value="blog">
              <button type="button" class="font-weight-normal btn nav-btn text-dark px-lg-4">
                Courses
              </button>
            </a>
            <div class="sub-menu-1">
              <ul>
                <li class="hover-me">
                  <a href="#">IT Courses <i class="fas fa-angle-right text-dark"></i></a>
                  <div class="sub-menu-2">
                    <ul>
                      <li><a href="webdiv.php">Web Development</a></li>
                      <li><a href="graphic_d.php">Graphic Desiging</a></li>
                      <li><a href="python.php">Python Programming</a></li>
                    </ul>
                  </div>
                </li>
                <li class="hover-me">
                  <a href="#">Language Courses
                    <i class="fas fa-angle-right text-dark"></i></a>
                  <div class="sub-menu-2">
                    <ul>
                      <li><a href="#">English Language</a></li>
                      <li>
                        <a href="#">Chinnese Language
                          <i class="fas fa-angle-right text-dark"></i></a>
                        <div class="sub-menu-3">
                          <ul>
                            <li><a href="hsk_I.php">HSK I</a></li>
                            <li><a href="hsk_II.php">HSK II</a></li>
                            <li><a href="hsk_III.php">HSK III</a></li>
                            <li><a href="hsk_IV.php">HSK IV</a></li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="hover-me">
                  <a href="#">Other Courses <i class="fas fa-angle-right text-dark"></i></a>
                  <div class="sub-menu-2">
                    <ul>
                      <li><a href="shorthand.php">Shorthand Writing</a></li>
                      <li><a href="ielts.php">IELTS Preparatory </a></li>
                      <li><a href="huawei.php">Huawei Mechatronics </a></li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="h5" href="blogs.php" data-value="blog">
              <button type="button" class="font-weight-normal btn nav-btn text-dark px-lg-4">
                Blogs
              </button>
            </a>
          </li>
          <li class="nav-item">
            <a class="h5" href="contact.php" data-value="blog">
              <button type="button" class="font-weight-normal btn nav-btn text-dark px-lg-4">
                Contact Us
              </button>
            </a>
          </li>
          <li class="nav-item">
            <a class="h5" href="#" data-value="blog">
              <button type="button" class="font-weight-normal btn btn-success nav-btn text-white px-lg-4">
                Enroll Now
              </button>
            </a>
            <div class="sub-menu-1">
              <ul>
                <li><a href="enroll.php">As Student</a></li>
                <li><a href="trainer.php">As trainer</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar ends here -->
  <div class="container-fluid p-0">
    <!-- slider starts here -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./assets/img/final/short_hand_writing.png" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="./assets/img/final/python_programming.png" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="./assets/img/final/ielts_peparatory_classes.png" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="./assets/img/final/graphic_designing.png" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="./assets/img/final/web_development.png" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="./assets/img/final/chineese_language.png" class="d-block w-100" alt="..." />
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </button>
    </div>
    <!-- slider ends here -->

    <!-- students comments starts here -->
    <div class="container-fluid px-0 py-5 bg-light">
      <div class="container p-0 py-5">
        <h1 class="card-title font-weight-light display-4 mb-2 text-center">
          STUDENTS REVIEWS
        </h1>
        <h4 class="card-title font-weight-normal text-info text-center">
          Our previous batch students reviews
        </h4>
        <!-- Reviews-students-slider starts here -->

        <!-- review no.01 -->
        <div id="carouselExampleIndicatorscomments" class="carousel slide mt-5" data-ride="carousel">
          <div class="carousel-inner">
            <div class="card border-0 mb-3 bg-light carousel-item active">
              <div class="row no-gutters d-block w-100">
                <div class="col-md-12 p-0 text-center">
                  <img src="./assets/img/students/client-1.jpg" class="card-img rounded-circle w-10" alt="sports car half img" />
                </div>
                <div class="offset-md-1 col-md-10 d-flex flex-column text-center p-0">
                  <div class="card-body">
                    <h2 class="card-title font-weight-normal m-0">
                      Elissa Sane
                    </h2>
                    <p class="card-text lead py-3">
                      Personally I have no idea about web development, but I
                      had gained alot of skills in development. If anyone
                      wants to grow their web skills than he or she must visit
                      this great institute.
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <!-- review no.02 -->
            <div class="card border-0 mb-3 bg-light carousel-item">
              <div class="row no-gutters d-block w-100">
                <div class="col-md-12 p-0 text-center">
                  <img src="./assets/img/students/client-2.jpg" class="card-img rounded-circle w-10" alt="sports car half img" />
                </div>
                <div class="offset-md-1 col-md-10 d-flex flex-column text-center p-0">
                  <div class="card-body">
                    <h2 class="card-title font-weight-normal m-0">
                      Shahvaiz
                    </h2>
                    <p class="card-text lead py-3">
                      Hello I'm Shahvaiz after completing my fsc i decided to
                      join the institute of professional development for
                      Chineese language of HSK I and HSK II. One of the
                      greatest institute in gilgit city for chineese language.
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <!-- review no.03 -->
            <div class="card border-0 mb-3 bg-light carousel-item">
              <div class="row no-gutters d-block w-100">
                <div class="col-md-12 p-0 text-center">
                  <img src="./assets/img/students/client-3.jpg" class="card-img rounded-circle w-10" alt="sports car half img" />
                </div>
                <div class="offset-md-1 col-md-10 d-flex flex-column text-center p-0">
                  <div class="card-body">
                    <h2 class="card-title font-weight-normal m-0">
                      Zoya khan
                    </h2>
                    <p class="card-text lead py-3">
                      Hello friends I'm a Graphic designer I have completed
                      the NAVTTAC course from institute of professional
                      development KIU. Making alot of hardwork I have made
                      myself compatible to work as freelancer Currently I am
                      working on different freelance marketplaces like Fiverr
                      and Upwork and making 50k per month.
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <!-- review no.04 -->
            <div class="card border-0 mb-3 bg-light carousel-item">
              <div class="row no-gutters d-block w-100">
                <div class="col-md-12 p-0 text-center">
                  <img src="./assets/img/students/client-4.jpg" class="card-img rounded-circle w-10" alt="sports car half img" />
                </div>
                <div class="offset-md-1 col-md-10 d-flex flex-column text-center p-0">
                  <div class="card-body">
                    <h2 class="card-title font-weight-normal m-0">
                      Sunaila shah
                    </h2>
                    <p class="card-text lead py-3">
                      Hello friends I'm a Graphic designer I have completed
                      the NAVTTAC course from institute of professional
                      development KIU. Making alot of hardwork I have made
                      myself compatible to work as freelancer Currently I am
                      working on different freelance marketplaces as graphic
                      des and making 50k per month. .
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicatorscomments" data-slide="prev">
            <span class="h3 text-danger fas fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicatorscomments" data-slide="next">
            <span class="h3 text-danger fas fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </button>
        </div>

        <!-- Reviews-students-slider ends here -->
      </div>
    </div>
    <!-- students comments ends here -->

    <!--counter starts here  -->
    <div class="container-fluid p-0 counters">
      <div class="container text-white text-center d-flex flex-column flex-md-row py-5 justify-content-between align-items-center counter-inner">
        <div class="std-enrolled">
          <i class="fas fa-user-group h1"></i>
          <h4 class="">Students Enroll</h4>
          <p class="counter d-inline">12472</p>
          <p class="d-inline">+</p>
        </div>
        <div class="success-rate">
          <i class="fas fa-user-graduate h1"></i>
          <h4 class="">graduated</h4>
          <p class="counter d-inline">9923</p>
          <p class="d-inline">+</p>
        </div>
        <div class="success-rate">
          <i class="fas fa-medal h1"></i>
          <h4 class="">Success Rate</h4>
          <p class="counter d-inline">80</p>
          <p class="d-inline">%</p>
        </div>
        <div class="success-rate">
          <i class="fas fa-book-journal-whills h1"></i>
          <h4 class="">Courses</h4>
          <p class="counter d-inline">30</p>
          <p class="d-inline">+</p>
        </div>
      </div>
    </div>
    <!--counter ends here  -->

    <!-- partnerships section starts here -->
    <div class="container p-0 py-5 my-5">
      <h1 class="text-center text-dark font-weight-normal">
        COLLABRATIONS AND PARTNERSHIPS
      </h1>
      <div class="container d-flex flex-sm-row flex-column align-items-center justify-content-around d-lg-block">
        <div class="text-center d-flex flex-column flex-lg-row align-items-center mt-4">
          <a href="#" class="border partners p-4 d-flex">
            <img src="./assets/img/hec-logo.webp" alt="" class="w-100" />
          </a>
          <a href="#" class="border partners p-2 d-flex">
            <img src="./assets/img/uni-of-central-asia.webp" alt="" class="w-100" />
          </a>
          <a href="#" class="border partners p-3 d-flex">
            <img src="./assets/img/uni-of-oregon.webp" alt="" class="w-100" />
          </a>
          <a href="#" class="border partners p-3 d-flex">
            <img src="./assets/img/akrsp.webp" alt="" class="w-100" />
          </a>
        </div>
        <div class="text-center d-flex flex-column flex-lg-row align-items-center justify-content-between mt-4">
          <a href="#" class="border partners p-4 d-flex">
            <img src="./assets/img/usaid-logo.webp" alt="" class="w-100" />
          </a>
          <a href="#" class="border partners p-4 d-flex">
            <img src="./assets/img/huawei.webp" alt="" class="w-100" />
          </a>
          <a href="#" class="border partners p-4 d-flex">
            <img src="./assets/img/BF-technologies.webp" alt="" class="w-100" />
          </a>
          <a href="#" class="border partners p-4 d-flex">
            <img src="./assets/img/navttc.webp" alt="" class="w-100" />
          </a>
        </div>
      </div>
    </div>
    <!-- partnerships section ends here -->

    <!-- donation section starts here -->
    <div class="container-fluid donation p-0">
        <div class="donation-inner py-5">
        <div class="container text-center py-5">
          <h1 class="text-white text-center font-weight-bolder mb-5">No one has ever become poor by giving</h1>
          <p class="lead text-center text-white w-75 mx-auto">Donate now to help out a student to make his future brighter by giving his fees. There are alot of students who need financial support to make their dreams come true, and they have hope that a kind hearted human as like you can help them out. </p>
          <button class="btn btn-primary rounded-pill px-4 py-2 mt-4">
            <h4>Donate Now</h4>
          </button>
        </div>
      </div>
    </div>
    <!-- donation section ends here -->

    <!-- footer starts here -->
    <div class="container-fluid p-0 bg-dark pt-5">
      <div class="container d-flex flex-column justify-content-between flex-md-row py-4">
        <div class="container d-flex flex-column text-white">
          <img src="./assets/logo/logo.svg" class="w-50" alt="" />
          <p class="lead text-white py-4 m-0 w-50">
            <i class="fas fa-location-pin"></i> opposite to Karakorum
            international university Gilgit Main Branch
          </p>
          <i class="fas fa-phone-alt py-2">&nbsp; &nbsp; &nbsp; 05811456789</i>
          <i class="fas fa-envelope py-2">&nbsp; &nbsp; &nbsp; ipd@gmail.com</i>
          <div class="d-flex mt-3">
            <a href="#" class="text-white pr-4"><i class="fab lead p-2 bg-primary rounded-circle fa-facebook"></i></a>
            <a href="#" class="text-white pr-4"><i class="fab lead p-2 bg-primary rounded-circle fa-twitter"></i></a>
            <a href="#" class="text-white pr-4"><i class="fab lead p-2 bg-success rounded-circle fa-google"></i></a>
            <a href="#" class="text-white pr-4"><i class="fab lead p-2 bg-white text-danger rounded-circle fa-youtube"></i></a>
          </div>
        </div>

        <div class="text-white">
          <h3 class="text-white py-3 font-weight-bolder ml-md-5 ml-0 text-info">
            Quick links
          </h3>
          <div class="d-flex justify-content-between">
            <div class="d-flex flex-column mx-md-5 ml-0">
              <a href="#" class="text-white lead py-2">Home</a>
              <a href="#" class="text-white lead py-2">About Us</a>
              <a href="#" class="text-white lead py-2">Our Team</a>
              <a href="#" class="text-white lead py-2">Courses</a>
              <a href="#" class="text-white lead py-2">Blogs</a>
            </div>
            <div class="d-flex flex-column mx-md-5 ml-0">
              <a href="#" class="text-white lead py-2">Trainers</a>
              <a href="#" class="text-white lead py-2">Developers</a>
              <a href="#" class="text-white lead py-2">Testimonials</a>
              <a href="#" class="text-white lead py-2">Services</a>
              <a href="#" class="text-white lead py-2">FAQ'S</a>
            </div>
          </div>
        </div>
      </div>
      <hr class="bg-white w-75 mx-auto" />
      <div class="container">
        <p class="text-center lead text-white py-4 m-0">
          © 2022 Copyright KIU. All Rights Reserved | Developed by IT Section
          KIU
        </p>
      </div>
    </div>
    <!-- footer ends here -->
  </div>
</body>
<script>
  $(document).ready(function() {
    $(".counter").counterUp({
      delay: 10,
      time: 1200,
    });
  });
</script>

</html>
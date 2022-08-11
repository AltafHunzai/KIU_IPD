<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us </title>
    <link rel="stylesheet" href="./bootstrap-4.6.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="./fontawesome-free-6.1.1-web/css/all.css">
    <link rel="stylesheet" href="./css/about_us.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
</head>
<body>
    
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
    <nav class=" navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-between navigation shadow">
            <a class="navbar-brand mr-5 text-white ml-5 w-20" href="#" data-value="home"><img src="./assets/logo/logo.svg" alt="brand img"></a>
            <div class=" d-flex align-items-center">
            <button class="navbar-toggler bg-primary" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <i class="fas fa-align-justify text-white"></i>
            </button>
            <div class="collapse navbar-collapse menu-bar">
                <ul class=" navbar-nav">
                    <li class="nav-item active ">
                        <a class="h5 " href="index.php" data-value="about">
                            <button type="button" class=" font-weight-normal btn nav-btn text-dark px-lg-4">Home</button><span  class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="h5  " href="aboutus.php" data-value="Portfolio">
                            <button type="button" class=" font-weight-normal btn nav-btn text-dark px-lg-4">About Us</button>
                        </a>
                        <div class="sub-menu-1">
                          <ul>
                              <li><a href="staff.php" class="d-block">Meet Our Team</a></li>
                              <li><a href="aboutus.php" class="d-block">Our Vision</a></li>
                              <li><a href="aboutus.php" class="d-block">Our Culture</a></li>
                              <li><a href="aboutus.php" class="d-block">Our Services</a></li>
                              <li><a href="aboutus.php" class="d-block">Our Facilities</a></li>
                          </ul>
                      </div>
                    </li>
                    <li class="nav-item ">
                        <a class="h5 "href="courses.php" data-value="blog">
                            <button type="button" class=" font-weight-normal btn nav-btn text-dark px-lg-4">Courses</button>
                        </a>
                        <div class="sub-menu-1">
                          <ul>
                              <li class="hover-me"><a href="#">IT Courses <i class="fas fa-angle-right text-dark"></i></a>
                                  <div class="sub-menu-2">
                                      <ul>
                                          <li><a href="webdiv.php">Web Development</a></li>
                                          <li><a href="graphic_d.php">Graphic Desiging</a></li>
                                          <li><a href="python.php">Python Programming</a></li>
                                      </ul>
                                  </div>
                              </li>
                              <li class="hover-me"><a href="#">Language Courses <i class="fas fa-angle-right text-dark"></i></a>
                                  <div class="sub-menu-2">
                                      <ul>
                                          <li><a href="#">English Language</a></li>
                                          <li><a href="#">Chinnese Language <i class="fas fa-angle-right text-dark"></i></a>
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
                              <li class="hover-me"><a href="#">Other Courses <i class="fas fa-angle-right text-dark"></i></a>
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
                    <li class="nav-item ">
                      <a class="h5 "href="blogs.php" data-value="blog">
                          <button type="button" class=" font-weight-normal btn nav-btn text-dark px-lg-4">Blogs</button>
                      </a>
                    </li>
                    <li class="nav-item ">
                      <a class="h5 "href="contact.php" data-value="blog">
                          <button type="button" class=" font-weight-normal btn nav-btn text-dark px-lg-4">Contact Us</button>
                      </a>
                    </li>
                    <li class="nav-item ">
                      <a class="h5 "href="#" data-value="blog">
                          <button type="button" class=" font-weight-normal btn btn-success nav-btn text-white px-lg-4">Enroll Now</button>
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

    <!-- page content starts here -->
    <div class="container-fluid p-0 pt-5 home-intro">
        <div class="container p-0">
            <!-- main heading goes here -->
            <h1 class="text-center my-5 font-weight-lighter text-dark ">ABOUT US</h1>
            <!-- main paragraph goes here -->
            <p class="lead text-justify px-3">Institute of Professional Development, Karakoram International University offers training and skills to its students as well as in the community, who cannot afford to register for regular University programmes. The Institute is established in 2008. The aim of IPD is to provide professional training in light engineering, construction, agriculture farming and mining sectors at all level of community. IPD has actively conducted short-term training programmes in agriculture, mining, electrical and mechanical works, civil, forestry, fisheries, IT, entrepreneurship and life skills. The major emphasis, however, is made in vocational programmes on the utilization of local resources like gemstone cutting, polishing and marketing, jewelry design, wood cutting, crafting and carving, fruit processing and preservation, herbal medicines and related products. The trainees in these trades supposed not only to improve their employment opportunities but also can be ready for carrying any entrepreneurship activities and starting their own businesses. Conducting the courses is meant to contribute to alleviating of unemployment and promoting economic development.</p>
        </div>
        
        
    <!-- director message starts here -->
    <div class="card border-0 mb-3">
      <div class="row no-gutters">
        <div class="col-md-6 d-flex align-items-center p-lg-5">
          <div class="card-body">
            <h1 class="card-title font-weight-lighter display-4 mb-0">
              DIRECTOR MESSAGE
            </h1>
            <h3 class="card-title font-weight-normal text-info">
              <span class="pb-2 sub-heading-first">Seek Some</span> Motivation
            </h3>
            <p class="card-text lead my-lg-5 pt-lg-4 pt-3">
              I am incredibly grateful and humbled to begin as the Faculty
              Director of institute of professional development karakorum
              international University. I inevitably draw on my personal
              journey that guides my values, research, and teaching, and
              ultimately, also my vision for institute of professional
              development KIU. Central to this journey is a sobering reminder
              about how much of a role luck has played in my life. This
              compels me in two ways. First, it makes me thankful for what I
              have and reminds us, especially those with privilege, of our
              responsibility to give back. Second, it offers a clear and
              unwavering goal: enabling individuals – no matter where they are
              born and what circumstances they are in – to have access to the
              resources and opportunities they need, when they need them, to
              reach their full potential.
            </p>
          </div>
        </div>
        <div class="col-md-6 p-lg-5 p-lg-4">
          <img src="./assets/img/director.jpg" class="director-msg card-img rounded-edge position-relative" alt="director video" />
          <a href="#" class="position-absolute director-msgs-video rounded-circle">
            <i class="fas fa-play-circle text-info display-3"></i>
          </a>
        </div>
      </div>
    </div>
    <!-- director message ends here -->
        
        <!-- our mission starts here -->
        <div class="container-fluid py-5 px-0 bg-light">
            <div class=" p-0">
                <h1 class="text-center text-dark my-5 font-weight-light " id="mission">OUR MISSION</h1>
                <div class="d-lg-flex text-center justify-content-between align-items-center">
                    <p class="lead text-center px-4">The mission of the IPD is to cater the learning and training needs of the mountain communities living in GB region. Harnessing KIU resources in various fields of knowledge, IPD will offer a variety of customized non-degree programs designed to enhance professional and technical skills and address the needs for personal development for learners of all ages.”</p>
                    <img src="./assets/img/alex-shute-eVhVt7YcMfM-unsplash.jpg" alt="" class="w-50">
                </div>
            </div>
        </div>
        <!-- our mission ends here -->

        <!-- our vision starts here -->
        <div class="container-fluid p-0 py-5 bg-white">
            <div class="">
                <h1 class="text-center text-dark my-5 font-weight-lighter">OUR VISION</h1>
                <div class="d-lg-flex text-center justify-content-between align-items-center">
                    <img src="./assets/img/pipeline.jpg" alt="" class="w-50">
                    <p class="lead text-center p-4">“Institute of Professional Development aspires to become a center of excellence in providing quality education and training in a variety of fields to a diverse population of learners in the mountain communities.”</p>
                </div>>
            </div>
        </div>
        <!-- our vision ends here -->
        
        <!-- our culture starts here -->
        <div class="container-fluid p-0 py-5 bg-light">
            <div class="">
                <h1 class="text-center text-dark my-5 font-weight-lighter">OUR CULTURE</h1>
                <div class="d-lg-flex justify-content-between align-items-center text-center">
                    <p class="lead text-center  px-4">We offer a friendly, cooperative, practical and creative environment in the institute that welcomes a varied group of trainees from all academic background, culture, and walk of life.</p>
                    <img src="./assets/img/umberlla_in_streets.jpg" alt="" class="w-50">
                </div>
            </div>
        </div>
        <!-- our culture ends here -->

        <!-- services section starts here -->
        <div class="container-fluid py-5">
            <div class="container p-0">
                <h1 class="text-center text-dark my-5 font-weight-lighter ">KEY SERVICES WE PROVIDE</h1>
                <div class="d-lg-flex flex-column justify-content-between">
                    <div class="d-lg-flex justify-content-between my-4">
                        <div class="card mx-auto my-4" style="width: 22rem;">
                            <img src="./assets/img/training.jpg" class="card-img-top" alt="...">
                            <div class="card-body pb-0 mt-2">
                              <h5 class="card-title text-primary text-center">Training and Development</h5>
                            </div>
                        </div>
                        <div class="card mx-auto my-4" style="width: 22rem;">
                            <img src="./assets/img/customized_training.avif" class="card-img-top" alt="...">
                            <div class="card-body pb-0 mt-2">
                              <h5 class="card-title text-primary text-center">Customized training</h5>
                            </div>
                        </div>
                        <div class="card mx-auto my-4" style="width: 22rem;">
                            <img src="./assets/img/training.jpg" class="card-img-top" alt="...">
                            <div class="card-body pb-0 mt-2">
                              <h5 class="card-title text-primary text-center">Training needs analysis</h5>
                            </div>
                        </div>
                    </div>
                    <div class="d-lg-flex justify-content-between my-4">
                        <div class="card mx-auto my-4" style="width: 22rem;">
                            <img src="./assets/img/coachingg.avif" class="card-img-top" alt="...">
                            <div class="card-body pb-0 mt-2">
                              <h5 class="card-title text-primary text-center">Coaching and mentoring</h5>
                            </div>
                        </div>
                        <div class="card mx-auto my-4" style="width: 22rem;">
                            <img src="./assets/img/seminar&coaching.avif" class="card-img-top" alt="...">
                            <div class="card-body pb-0 mt-2">
                              <h5 class="card-title text-primary text-center">Seminars and symposiums</h5>
                            </div>
                        </div>
                        <div class="card mx-auto my-4" style="width: 22rem;">
                            <img src="./assets/img/consultancy.jpg" class="card-img-top" alt="...">
                            <div class="card-body pb-0 mt-2">
                              <h5 class="card-title text-primary text-center">Consultancy Services</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- services section starts here -->
        
        <!-- our facilities starts here -->
        <div class="container-fluid py-5 bg-light">
            <div class="container p-0">
                <h1 class="text-center text-dark my-5 font-weight-lighter">OUR FACILITIES</h1>
                <div class="d-lg-flex flex-column justify-content-between">
                    <div class="d-lg-flex justify-content-between my-4">
                        <div class="card mx-auto my-4" style="width: 23rem;">
                            <img src="./assets/img/computer_lab.jpg" class="card-img-top" alt="...">
                            <div class="card-body p-0">
                              <h5 class="card-title  py-3 m-0 card-heading text-center">Modern Training faclitites</h5>
                            </div>
                        </div>
                        <div class="card mx-auto my-4" style="width: 23rem;">
                            <img src="./assets/img/digital_library.jpg" class="card-img-top" alt="...">
                            <div class="card-body p-0">
                              <h5 class="card-title  py-3 m-0 card-heading text-center">Digital Library</h5>
                            </div>
                        </div>
                        <div class="card mx-auto my-4" style="width: 23rem;">
                            <img src="./assets/img/workshops_training.jpg" class="card-img-top" alt="...">
                            <div class="card-body p-0">
                              <h5 class="card-title  py-3 m-0 card-heading text-center">Workshops for TVETTA courses</h5>
                            </div>
                        </div>
                    </div>
                    <div class="d-lg-flex justify-content-around my-4">
                        <div class="card mx-auto my-4" style="width: 23rem;">
                            <img src="./assets/img/Cafeteria.jpg" class="card-img-top" alt="...">
                            <div class="card-body p-0">
                              <h5 class="card-title  py-3 m-0 card-heading text-center">Cafeteria</h5>
                            </div>
                        </div>
                        <div class="card mx-auto my-4" style="width: 23rem;">
                            <img src="./assets/img/consultancy.jpg" class="card-img-top" alt="...">
                            <div class="card-body p-0">
                              <h5 class="card-title  py-3 m-0 card-heading text-center">Consultancy Services</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- our facilities starts here -->
    </div>
        <!-- footer starts here -->
        <div class="container-fluid p-0 bg-dark pt-5">
        <div class="container d-flex flex-column justify-content-between flex-md-row py-4">
        <div class="container d-flex flex-column  text-white">
                <img src="./assets/logo/logo.svg" class="w-50" alt="">
                <p class="lead text-white py-4 m-0 w-50"> <i class="fas fa-location-pin"></i> opposite to Karakorum international university Gilgit Main Branch</p>
                <i class="fas fa-phone-alt py-2">&nbsp; &nbsp; &nbsp; 05811456789</i>
                <i class="fas fa-envelope py-2">&nbsp; &nbsp; &nbsp; ipd@gmail.com</i>
                <div class="d-flex mt-3">
                    <a href="#" class="text-white pr-4"><i class="fab lead p-2 bg-primary rounded-circle fa-facebook"></i></a>
                    <a href="#" class="text-white pr-4"><i class="fab lead p-2 bg-primary rounded-circle fa-twitter"></i></a>
                    <a href="#" class="text-white pr-4"><i class="fab lead p-2 bg-success rounded-circle fa-google"></i></a>
                    <a href="#" class="text-white pr-4"><i class="fab lead p-2 bg-white text-danger rounded-circle fa-youtube"></i></a>
                </div>
            </div>

            <div class=" text-white">
                <h3 class="text-white py-3 font-weight-bolder ml-md-5 ml-0 text-info">Quick links</h3>
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
        <hr class="bg-white w-75 mx-auto">
        <div class="container">
            <p class=" text-center lead text-white py-4 m-0">© 2022 Copyright KIU. All Rights Reserved | Developed by IT Section KIU</p>
        </div>
    </div>
    <!-- footer ends here -->
    <!-- page content ends here -->
</body>
</html>
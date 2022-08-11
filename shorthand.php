<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shorthand Detail</title>
    <link rel="stylesheet" href="./bootstrap-4.6.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="./fontawesome-free-6.1.1-web/css/all.css">
    <link rel="stylesheet" href="./css/courses.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- navbar starts here -->
    <nav class=" navbar navbar-expand-lg navbar-light bg-white d-flex justify-content-between navigation shadow fixed-top">
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
                                          <li><a href="#">Shorthand Writing</a></li>
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
    <div class="container p-0 home-intro">
        <h1 class="text-center py-5">Shorthand Writing</h1>
        <div class="card mt-5 rounded-edge my-5" >
            <div class="row no-gutters ">
            <div class="col-md-6 d-flex flex-fill">
                <img src="./assets/img/1.png" class="w-100" alt="...">
              </div>
              <div class="col-md-6">
                <div class="card-body bg-light p-5">
                  <h4 class="card-title font-weight-bold my-4">Shorthand Writing Training</h4>
                  <p class="card-text lead"><span class="font-weight-bold">Duration :</span> 06 Months</p>
                  <p class="card-text lead"><span class="font-weight-bold">Instructor :</span>  Muhammad Mir</p>
                  <p class="card-text lead"><span class="font-weight-bold">Reg. last Date :</span> 31 Mar 2023</p>
                  <p class="card-text lead"><span class="font-weight-bold">Start of Class :</span> 04 April 2023</p>
                  <p class="card-text lead"><span class="font-weight-bold">Course Fee :</span> <span class="bg-warning rounded p-1">Rs.2500 Per Month /-</span></p>
                  <a href="./enroll.php">
                      <button class="btn btn-success w-100">Apply Online</button>
                  </a>
                </div>
              </div>
            </div>
        </div>
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
</body>
</html>
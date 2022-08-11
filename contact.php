<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPD KIU COURSES</title>
    <link rel="stylesheet" href="./bootstrap-4.6.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="./fontawesome-free-6.1.1-web/css/all.css">
    <link rel="stylesheet" href="./css/contact.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
    
</head>
<body>
    <?php
    if ($message_sent):
    ?>

    <h3>Thanks! Your message has been submitted successfully</h3>

    <?php
    else:
    ?>
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
                      <a class="h5 "href="#" data-value="blog">
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

    <!-- contact us form starts here -->
    <div class="container-fluid home-intro">
        <!-- <h1 class="text-center py-md-5 font-weight-lighter display-4 py-2">Contact Us</h1> -->
        <div class="row ">
            <div class="col-12 col-md-6 p-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d960.5362322033054!2d74.3669210719977!3d35.92627184170987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e637ffc804d485%3A0x57b30b12920a05b0!2sInstitute%20of%20Professional%20Development%2C!5e0!3m2!1sen!2snl!4v1656487463339!5m2!1sen!2snl" width="750" height="650" class="border-0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-12 col-md-6 bg-dark form-main-div">
                <div class="container p-2 p-md-5 ">
                <h1 class="my-2 my-md-4 text-white font-weight-bolder">Get in Touch</h1>
                <form action="./contact.php" method="POST" class=" d-flex flex-column ">
                        <input placeholder="Full Name" id="name" type="text" class="m-2 bg-secondary text-light lead p-2 border-0 w-75 inputs">
                        <input placeholder="Email Address" id="email" type="email" class="m-2 bg-secondary text-light lead p-2 border-0 w-75 inputs">
                        <input placeholder="Subject" id="message" type="text" class="m-2 bg-secondary text-light lead p-2 border-0 w-75 inputs">
                    <!-- <div class="d-flex justify-content-between"> -->
                        <textarea placeholder="Your Message" name="" rows="6" id="" class="m-2 bg-secondary text-light lead p-2 border-0 w-75 inputs"></textarea>
                    <!-- </div> -->
                    <buttton type="submit" class="btn btn-info py-2 m-2 w-75"><p class="lead d-inline">Send Message</p></buttton>
                </form>
                </div>
            </div>
        </div>
    </div>
    <!-- contact us form ends here -->
    <?php
        $message_sent = false;
        if (isset($_POST['email']) && $_POST['email'] !='') {

            if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                
                $userName = $_POST['name'];
                $useremail = $_POST['email'];
                $usersubject = $_POST['suubject'];
                $usermessage = $_POST['message'];
                
                
                $to = "ah5509092@gmail.com";
                $body = "";
                $body .= "From: ".$userName. "r/n";
                $body .= "Email: ".$useremail. "r/n";
                $body .= "Subject: ".$usersubject. "r/n";
                $body .= "Message: ".$message. "r/n";
                
                mail($to,$usersubject,$usermessage);
             
                $message_sent = true;
            }
        }
    ?>

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

    <?php
    endif;
    ?>
</body>
</html>
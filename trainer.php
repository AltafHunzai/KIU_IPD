<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> trainer form KIU IPD</title>
    <link rel="stylesheet" href="./bootstrap-4.6.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="./fontawesome-free-6.1.1-web/css/all.css">
    <link rel="stylesheet" href="./css/trainer.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <script src="./js/trainer.js"></script>
    <script src="./counter/counter-up/jquery.counterup.min.js"></script>
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
                          <li><a href="#">As trainer</a></li>
                        </ul>
                      </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar ends here -->

    <!-- forms starts here -->
    <div class="container-fluid bg-white p-0 home-intro">
        <h2 class="text-center ml-5 py-5 text-dark font-weight-bolder"><span class="border-bottom-2 pb-2">Trainer Application Form</span></h2>
        <div class=" mb-5 py-5 bg-light">
            <form class=" mx-auto text-center needs-validatio" novalidate>

                <!-- personal information starts here -->
                <h2 class="text-left p-3 text-dark "><span class="border-bottom-2 pb-2">Personal Information</span></h2>
                <div class="row">
                    <div class="col-md-6">
                        <input required type="text" name="Trainer_name" id="Trainer_name" placeholder="Your Name" class=" bg-secondary text-white w-100 p-2 my-2 border-0 lead rounded">
                    </div>
                    <div class="col-md-6">
                        <input required type="text" name="Father_name" id="Father_name" placeholder="Father Name" class="bg-secondary text-white w-100 p-2 my-2 border-0 lead rounded">
                    </div>
                    <div class="col-md-6">
                        <select required name="Trainer_Gender" id="Trainer_Gender" class="bg-secondary text-white w-100 p-2 my-2 border-0 lead rounded">
                            <option value="">Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <input required type="text" name="Trainer_qualification" id="Trainer_qualification" placeholder="Qualification" class="bg-secondary text-white w-100 p-2 my-2 border-0 lead rounded">
                    </div>
                    <div class="col-md-6">
                        <input required type="email" name="Trainer_email" id="Trainer_email" placeholder="Email" class="bg-secondary text-white w-100 p-2 my-2 border-0 lead rounded">
                    </div>
                    <div class="col-md-6">
                        <input required type="number" name="Student_CNIC" id="Student_CNIC" placeholder="CNIC" class="bg-secondary text-white w-100 p-2 my-2 border-0 lead rounded">
                    </div>
                    <div class="col-md-6">
                        <input required type="number" name="Trainer_contact" id="Trainer_contact" placeholder="Contact" class="bg-secondary text-white w-100 p-2 my-2 border-0 lead rounded">
                    </div>
                    <div class="col-md-6">
                        <input required type="number" name="Trainer_domicle" id="Trainer_domicle" placeholder="Domiclie" class="bg-secondary text-white w-100 p-2 my-2 border-0 lead rounded">
                    </div>
                    <div class="col-md-12">
                        <textarea type="text" name="Trainer_Comment" rows="5" id="Trainer_Comment" placeholder="Comment" class="bg-secondary text-white w-100 p-2 my-2 border-0 lead rounded"></textarea>
                    </div>
                    <h2 class="col-md-12 text-left p-3 text-dark mt-5"><span class="border-bottom-2 pb-2">Experience details</span></h2>
                    <div class="col-md-6">
                        <input required type="text" name="Company_Name" id="Company_Name" placeholder="Company Name" class="bg-secondary text-white w-100 p-2 my-2 border-0 lead rounded">
                    </div>
                    <div class="col-md-6">
                        <input required type="text" name="trainer_Position" id="trainer_Position" placeholder="Position" class="bg-secondary text-white w-100 p-2 my-2 border-0 lead rounded">
                    </div>
                    <div class="col-md-12">
                        <p for="Duration" class="lead d-block d-md-inline">Duration :</p>
                        <label for="From" class="lead m-1 m-md-3">From </label>
                        <input required type="date" name="From" id="From" placeholder="From" class="bg-secondary text-white w-30 p-2 my-2 border-0 lead rounded">
                        <label for="to" class="lead m-1 m-md-3">To </label>
                        <input required type="date" name="to" id="to" placeholder="to" class="bg-secondary text-white w-30 p-2 my-2 border-0 lead rounded">
                    </div>
                    <h2 class="col-md-12 text-left p-3 text-dark mt-5"><span class="border-bottom-2 pb-2">Applicant Documents</span></h2>
                    <div class=" my-2 col-md-6 rounded bg-secondary">
                        <label for="resume" class=" text-white d-inline">Upload Resume : </label>
                        <input required type="file" name="resume" id="resume" class="bg-secondary w-50 text-white border-0 py-2 rounded">
                    </div>
                    <div class=" my-2 offset-md-1 col-md-5 rounded bg-secondary">
                        <label for="Photo" class=" text-white d-inline">Upload Photo : </label>
                        <input required type="file" name="Photo" id="Photo" class="bg-secondary w-50 text-white border-0 py-2 rounded">
                    </div>
                    <div class=" my-2 col-md-6 rounded bg-secondary">
                        <label for="CNIC_f" class=" text-white d-inline">CNIC Front : </label>
                        <input required type="file" name="CNIC_f" id="CNIC_f" class="bg-secondary w-50 text-white border-0 py-2 rounded">
                    </div>
                    <div class=" my-2 offset-md-1 col-md-5 rounded bg-secondary">
                        <label for="CNIC_b" class=" text-white d-inline">CNIC back : </label>
                        <input required type="file" name="CNIC_b" id="CNIC_b" class="bg-secondary w-50 text-white border-0 py-2 rounded">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary text-white px-3 py-2 mt-5 mx-auto d-block rounded font-weight-bold">Submit Form</button>
            </form>
        </div>
    </div>
    <!-- form ends here -->

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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPD KIU COURSES</title>
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
                          <li><a href="#">As Student</a></li>
                          <li><a href="trainer.php">As trainer</a></li>
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
        <h2 class="text-center ml-5 py-5 text-dark font-weight-bolder"><span class="border-bottom-2 pb-2">Student Application Form</span></h2>
        <div class="container-fluid mb-5 py-5 bg-light">
            <form class="w-90 mx-auto text-center" action="./enroll.php" method="POST">

                <!-- personal information starts here -->
                <h2 class="text-left ml-5 p-3 text-dark">Personal Information</h2>
                <input required type="text" name="Student_f_name" id="Student_f_name" placeholder="First Name" class="bg-secondary text-white w-30 p-2 my-2 border-0 lead rounded">
                <input required type="text" name="Student_l_name" id="Student_l_name" placeholder="Last Name" class="bg-secondary text-white w-30 p-2 my-2 border-0 lead rounded">
                <select required name="Student_Gender" id="Student_Gender" class="bg-secondary text-white w-30 p-2 my-2 border-0 lead rounded">
                    <option value="">Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <select required name="Student_Course" id="Student_Course" class="bg-secondary text-white w-30 p-2 my-2 border-0 lead rounded">
                    <option value="">Select Course</option>
                    <option value="Shorthand Writing">Shorthand Writing</option>
                    <option value="Python Programming">Python Programming</option>
                    <option value="IELTS Preparatory class">IELTS Preparatory class</option>
                    <option value="Chineese Language HSK I">Chineese Language HSK I</option>
                    <option value="Chineese Language HSK II">Chineese Language HSK II</option>
                    <option value="Graphic Designing">Graphic Designing</option>
                    <option value="Web Development">Web Development</option>
                    <option value="and many More..">and many More..</option>
                </select>
                <select required name="Student_Religion" id="Student_Religion" class="bg-secondary text-white w-30 p-2 my-2 border-0 lead rounded">
                    <option value="">Religion</option>
                    <option value="Islam">Islam</option>
                    <option value="Christian">Christian</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Sikh">Sikh</option>
                    <option value="Buddhist">Buddhist</option>
                    <option value="Atheist">Atheist</option>
                </select>
                <input required type="text" name="Student_D_O_B" placeholder="Date Of Birth 0000-00-00" id="Student_D_O_B" class="bg-secondary text-white w-30 p-2 my-2 border-0 lead rounded">
                <input required type="number" name="Student_number" id="Student_number" placeholder="Mobile No." class="bg-secondary text-white w-30 p-2 my-2 border-0 lead rounded">
                <input required type="email" name="Student_email" id="Student_email" placeholder="Email" class="bg-secondary text-white w-30 p-2 my-2 border-0 lead rounded">
                <input required type="number" name="Student_CNIC" id="Student_CNIC" placeholder="CNIC" class="bg-secondary text-white w-30 p-2 my-2 border-0 lead rounded">
                <input required type="text" name="Student_Nationality" id="Student_Nationality" placeholder="Nationality" class="bg-secondary text-white w-30 p-2 my-2 border-0 lead rounded">
                <input required type="text" name="Student_Current_address" id="Student_Current_address" placeholder="Current Address" class="bg-secondary text-white w-30 p-2 my-2 border-0 lead rounded">
                <select required name="Course_Knowledge" id="Course_Knowledge" class="bg-secondary text-white w-30 p-2 my-2 border-0 lead rounded">
                    <option value="">Course Knowledge</option>
                    <option value="Beginner">Beginner</option>
                    <option value="Intermediate">Intermediate</option>
                    <option value="Advance">Advance</option>
                </select>
                <div class="d-inline border py-2  bg-secondary">
                    <label for="Student_Image" class=" text-white h5">Passport size pic :</label>
                    <input required type="file" name="Student_Image" class="w-20 text-white" id="Student_Image">
                </div>
                <div class="d-inline border py-2 bg-secondary">
                    <label for="Student_domicile" class="text-white h5">Domicile :</label>
                    <input required type="file" name="Student_domicile" class="w-20 text-white" id="Student_domicile">
                </div>
                <hr class="w-90 mx-auto">
                <!-- personal information starts here -->
                
                <!-- father information starts here -->
                <h2 class="text-left ml-5 p-3 text-dark">Father Information</h2>
                <input required type="text" name="Father_Name" id="Father_Name" placeholder="Father Name" class="bg-secondary text-white w-30 p-2 my-2 border-0 lead rounded">
                <input required type="text" name="Father_occupation" id="Father_occupation" placeholder="Father's Occupation" class="bg-secondary text-white w-30 p-2 my-2 border-0 lead rounded">
                <select required name="Father_Religion" id="Father_Religion" class="bg-secondary text-white w-30 p-2 my-2 border-0 lead rounded">
                    <option value="">Father Religion</option>
                    <option value="Islam">Islam</option>
                    <option value="Christian">Christian</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Sikh">Sikh</option>
                    <option value="Buddhist">Buddhist</option>
                    <option value="Atheist">Atheist</option>
                </select>
                <input required type="number" name="Father_CNIC" id="Father_CNIC" placeholder="CNIC" class="bg-secondary text-white w-30 p-2 my-2 border-0 lead rounded">
                <input required type="number" name="Father_Number" id="Father_Number" placeholder="Mobile No." class="bg-secondary text-white w-30 p-2 my-2 border-0 lead rounded">
                <input required type="email" name="Father_email" id="Father_email" placeholder="Email" class="bg-secondary text-white w-30 p-2 my-2 border-0 lead rounded">
                <input required type="text" name="Father_D_O_B" placeholder="Father_D_O_B" id="" class="bg-secondary text-white w-30 p-2 my-2 border-0 lead rounded">
                <input required type="address" name="Father_Current_Address" id="Father_Current_Address" placeholder="Current Address" class="bg-secondary text-white w-30 p-2 my-2 border-0 lead rounded">
                <!-- father information ends here -->
                <hr class="w-90 mx-auto">
                
                <!-- educational information starts here -->
                <h2 class="text-left ml-5 p-3 text-dark">Education Information</h2>
                <p class="lead text-left ml-5 pl-3">NOTE! Please enter your latest Qualification.</p>
                <select required name="Student_Qualification" id="Student_Qualification" class="bg-secondary text-white w-30 p-2 my-2 border-0 lead rounded">
                    <option value="">Education level</option>
                    <option value="Secondary">Secondary</option>
                    <option value="Diploma">Diploma</option>
                    <option value="Matric">Matric</option>
                    <option value="Intermediate">Intermediate</option>
                    <option value="Bachelor">Bachelor</option>
                    <option value="Masters">Masters</option>
                    <option value="p.h.d">p.h.d</option>
                </select>
                <input required type="text" name="Institution" placeholder="institution" id="Institution" class="bg-secondary text-white w-30 p-2 my-2 border-0 lead rounded">
                <input required type="datetime" name="Year_of_Passing" id="Year_of_Passing" placeholder="Year Of Passing" class="bg-secondary text-white w-30 p-2 my-2 border-0 lead rounded">
                <!-- <button class="btn btn-primary p-2 font-weight-bold">Add Record</button> -->
                <!-- education information ends here -->
                <button type="submit" class="btn btn-primary text-white px-3 py-2 mt-5 mx-auto d-block rounded font-weight-bold">Submit Form</button>
            </form>

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // fetching data from form
                $Student_f_name = $_POST['Student_f_name'];
                $Student_l_name = $_POST['Student_l_name'];
                $Student_Gender = $_POST['Student_Gender'];
                $Student_Course = $_POST['Student_Course'];
                $Student_Religion = $_POST['Student_Religion'];
                $Student_D_O_B = $_POST['Student_D_O_B'];
                $Student_number = $_POST['Student_number'];
                $Student_email = $_POST['Student_email'];
                $Student_CNIC = $_POST['Student_CNIC'];
                $Student_Nationality = $_POST['Student_Nationality'];
                $Student_Current_address = $_POST['Student_Current_address'];
                $Course_Knowledge = $_POST['Course_Knowledge'];
                $Student_Image = $_POST['Student_Image'];
                $Student_domicile = $_POST['Student_domicile'];
                $Father_Name = $_POST['Father_Name'];
                $Father_occupation = $_POST['Father_occupation'];
                $Father_Religion = $_POST['Father_Religion'];
                $Father_CNIC = $_POST['Father_CNIC'];
                $Father_Number = $_POST['Father_Number'];
                $Father_email = $_POST['Father_email'];
                $Father_D_O_B = $_POST['Father_D_O_B'];
                $Father_Current_Address = $_POST['Father_Current_Address'];
                $Student_Qualification = $_POST['Student_Qualification'];
                $Institution = $_POST['Institution'];
                $Year_of_Passing = $_POST['Year_of_Passing'];
                
                // Connecting to  MySQL DataBase
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "kiu_ipd-form";
                // create connecttion here
                $myconn = mysqli_connect($servername, $username, $password, $database);

                if (!$myconn) {
                    die("Sorry! we are unable to connect" .mysqli_connect_error());
                } else {
                    echo 'Your are connected to the server Successfully';
                    echo "<br>";
                }
                $sql = "INSERT INTO `ipd enroll students` (`Student_f_name`, `Student_l_name`, `Student_Gender`, `Selected_Course`, `Student_Religion`, `Student_D_O_B`, `Student_number`, `Student_email`, `Student_CNIC`, `Student_Nationality`, `Student_Current_address`, `Course_Knowledge`, `Student_Image`, `Student_domicile`, `Father_Name`, `Father_occupation`, `Father_Religion`, `Father_CNIC`, `Father_Number`, `Father_email`, `Father_D_O_B`, `Father_Current_Address`, `Student_Qualification`, `Institution`, `Year_of_Passing`) VALUES ('$Student_f_name', '$Student_l_name','$Student_Gender','$Student_Course','$Student_Religion','$Student_D_O_B','$Student_number','$Student_email','$Student_CNIC','$Student_Nationality','$Student_Current_address','$Course_Knowledge','$Student_Image','$Student_domicile','$Father_Name','$Father_occupation','$Father_Religion','$Father_CNIC','$Father_Number','$Father_email','$Father_D_O_B','$Father_Current_Address','$Student_Qualification','$Institution','$Year_of_Passing')";
                $result = mysqli_query($myconn, $sql);

                if ($result) {
                    echo '<div class="alert alert-warning fixed-top alert-dismissible fade show" role="alert">
                        <strong>Success!</strong>Your form has been submitted Successfully
                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                      </div>';
                } else {
                    echo "Unable to connect Database Please try Again." .mysqli_error($myconn);
                }
                }
            ?>
    
        </div>
    </div>
    <!-- forms ends here -->
    
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
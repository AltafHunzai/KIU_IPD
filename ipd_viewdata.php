<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View data</title>
    <link rel="stylesheet" href="./fontawesome-free-5.15.4-web/css/all.css">
    <link rel="stylesheet" href="./bootstrap-4.6.1-dist/css/bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
    <style type="text/css">
        *{
            margin: 0 auto;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
            font-size: 1.1rem;
        }
        div{
            margin: 1rem auto;
        }
        body{
            width: 100%;
            min-height: 90vh;
            background-color: #fff;
        }
        .main_heading{
          text-align: center;
          margin: 4rem 0rem 2rem 0rem;
          font-weight: 100;
        }
        .main_heading span{
          padding-bottom: 0.6rem;
          font-size: 2rem;
          border-bottom: 4px solid #17a2b8;
        }
        table td{
            padding: 12px;
            background: #fff;
            text-align: center;
        }
        table tr:nth-child(odd){
            background-color: #dd0000;
        }
        /* td button .fa-exchange-alt:hover{
            content: 'update data';
        } */
    </style>
</head>
<body>
    <div class="container my-5 ml-0 p-0">
        <h1 class="main_heading"><span>Institute Of Professional Development KIU Registration data</span></h1>
        <table border="1">
            <tr>
                <th class="bg-success py-2 px-3 text-center ">Serial #</th>
                <th class="bg-success py-2 px-3 text-center ">First Name</th>
                <th class="bg-success py-2 px-3 text-center ">Last Name</th>
                <th class="bg-success py-2 px-3 text-center ">Student Gender</th>
                <th class="bg-success py-2 px-3 text-center ">Student Course</th>
                <th class="bg-success py-2 px-3 text-center ">Student Religion</th>
                <th class="bg-success py-2 px-3 text-center ">Student D_O_B</th>
                <th class="bg-success py-2 px-3 text-center ">Student number</th>
                <th class="bg-success py-2 px-3 text-center ">Student email</th>
                <th class="bg-success py-2 px-3 text-center ">Student CNIC</th>
                <th class="bg-success py-2 px-3 text-center ">Student Nationality</th>
                <th class="bg-success py-2 px-3 text-center ">Student Current_Address</th>
                <th class="bg-success py-2 px-3 text-center ">Student Knowledge</th>
                <th class="bg-success py-2 px-3 text-center ">Student Image</th>
                <th class="bg-success py-2 px-3 text-center ">Student Domicile</th>
                <th class="bg-success py-2 px-3 text-center ">Father Name</th>
                <th class="bg-success py-2 px-3 text-center ">Father occupation</th>
                <th class="bg-success py-2 px-3 text-center ">Father Religion</th>
                <th class="bg-success py-2 px-3 text-center ">Father CNIC</th>
                <th class="bg-success py-2 px-3 text-center ">Father Number</th>
                <th class="bg-success py-2 px-3 text-center ">Father email</th>
                <th class="bg-success py-2 px-3 text-center ">Father D_O_B</th>
                <th class="bg-success py-2 px-3 text-center ">Father current_Address</th>
                <th class="bg-success py-2 px-3 text-center ">Student Qualification</th>
                <th class="bg-success py-2 px-3 text-center ">Institution</th>
                <th class="bg-success py-2 px-3 text-center ">Year of Passing</th>
            </tr>
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "kiu_ipd-form";
                
                $conn = mysqli_connect($servername, $username, $password, $database);
            
                $sql = "SELECT * FROM ipd enroll students;";
                // $sql = "DELETE FROM `tbl_form` WHERE `f_id` = '10'";
                $result = mysqli_query($conn, $sql);
                // $resultCheck = mysqli_num_rows($result);
             ?>
             <?php
                if ($result > 0) {
                    while ($std_data = mysqli_fetch_assoc($result)) {
                        echo '<tr>
                                <td>'.$std_data["Student_f_name"].'</td>
                                <td>'.$std_data["Student_l_name"].'</td>
                                <td>'.$std_data["Student_Gender"].'</td>
                                <td>'.$std_data["Selected_Course"].'</td>
                                <td>'.$std_data["Student_Religion"].'</td>
                                <td>'.$std_data["Student_D_O_B"].'</td>
                                <td>'.$std_data["Student_number"].'</td>
                                <td>'.$std_data["Student_email"].'</td>
                                <td>'.$std_data["Student_CNIC"].'</td>
                                <td>'.$std_data["Student_Nationality"].'</td>
                                <td>'.$std_data["Student_Current_address"].'</td>
                                <td>'.$std_data["Course_Knowledge"].'</td>
                                <td>'.$std_data["Student_Image"].'</td>
                                <td>'.$std_data["Student_domicile"].'</td>
                                <td>'.$std_data["Father_Name"].'</td>
                                <td>'.$std_data["Father_occupation"].'</td>
                                <td>'.$std_data["Father_Religion"].'</td>
                                <td>'.$std_data["Father_CNIC"].'</td>
                                <td>'.$std_data["Father_Number"].'</td>
                                <td>'.$std_data["Father_email"].'</td>
                                <td>'.$std_data["Father_D_O_B"].'</td>
                                <td>'.$std_data["Father_current_Address"].'</td>
                                <td>'.$std_data["Student_Qualification"].'</td>
                                <td>'.$std_data["Institution"].'</td>
                                <td>'.$std_data["Year_of_Passing"].'</td>
                                <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                                <i class="fas fa-exchange-alt"></i>
                                </button>
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content bg-light">
                                      <div class="modal-header m-0 w-100 bg-primary">
                                        <h5 class="modal-title text-white" id="exampleModalLabel">Edit Data</h5>
                                      </div>
                                      <div class="modal-body w-90">
                                        <form>
                                          <div class="form-group">
                                            <input type="text" value='.$std_data["f_name"].' class="form-control  py-4 px-3" id="recipient-name" placeholder="Name">
                                          </div>
                                          <div class="form-group">
                                            <input type="text" value='.$std_data["f_email"].' class="form-control  py-4 px-3" id="recipient-email" placeholder="Email">
                                          </div>
                                          <div class="form-group">
                                            <textarea vlaue='.$std_data["f_message"].' class="form-control  py-4 px-3" id="message-text" placeholder="Your Message"></textarea>
                                          </div>
                                          <button type="button" class="btn px-4 mr-2 btn-secondary" data-dismiss="modal">Close</button>
                                          <button type="submit" class="btn px-4 ml-2 btn-success">Update</button>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>



                                <button class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i>
                                </button>
                                <a href="delete.php?f_id=$row[f_id]" onclick="return checkdelete()">
                                </td>
                            </tr>';
                    }
                }
            ?>
        </table>
    </div>
</body>
</html>
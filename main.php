<?php
session_start()

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- icon -->
  <script src="https://kit.fontawesome.com/4f1630567e.js" crossorigin="anonymous"></script>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <link rel="stylesheet" href="http://localhost:8080/mshuari.ps/style-main.css">

  <title>mshuari.ps</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ">
    <a class="navbar-brand " href="#">MSHUARI.PS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active ml-auto mr-1" href="homePage.html">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link ml-auto mr-1" href="#">Contests</a>
      </div>
      <div class="navbar-nav ">
        <!-- <button type="button" class="btn btn-outline-secondary" href="http://localhost:80/mshuari.ps/homePage.html">SIGN OUT</button> -->
        <a href="homePage.html" class=" btn btn-outline-secondary " role="button" aria-pressed="true">Sign out</a>

        <!-- <button type="button" id="nav-sign" class="nav-item nav-link btn btn-outline-primary rounded ml-auto mr-1" href="homePage.html">Sign out</button> -->
      </div>
    </div>


  </nav>

  <div class="container-fluid h-100 mt-5 ">
    <div class="row h-100 ">
      <a class="btn btn-primary" data-toggle="collapse" href="#1" role="button" aria-expanded="false" aria-controls="collapseExample">


      </a><br>

      <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-2 collapse " id="1" style="background-color: white;">
        <!-- <div class="form-group has-search  pt-4">
          <span class="fa fa-search form-control-feedback d-inline"></span>
          <input type="text" class="form-control " placeholder="Search">
        </div> -->

        <nav>
          <div class="nav flex-column position-fixed mt-3 d-inline" id="nav-tab" role="tablist">




            <i class="fas fa-home fa-lg fa-fw mt-3 ml-2"></i>
            <a class="nav-item nav-link d-inline aa" id="nav-available-trip-tab" data-toggle="tab" href="#nav-available-trip" role="tab" aria-controls="nav-available-trip" aria-selected="false">Home</a><br />


            <i class="fas fa-user-circle fa-lg fa-fw mt-3  ml-2"></i>
            <a class="nav-item nav-link d-inline" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a><br />


            <i class="fas fa-taxi fa-lg fa-fw mt-3 ml-2"></i>
            <a class="nav-item nav-link d-inline" id="nav-create-trip-tab" data-toggle="tab" href="#nav-creat-trip" role="tab" aria-controls="nav-create-trip" aria-selected="false">Create Trip</a><br />



            <i class="fas fa-book fa-lg fa-fw mt-3 ml-2"></i>
            <a class="nav-item nav-link  d-inline " id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="false">
              History</a><br>

          </div>

        </nav>
      </div>
      <div class="col pt-3" style="background-color: whitesmoke;">
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade  " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="card">
              <div class="card-header">
                <p class="display-4">History of your trips - when passengaer</p>
              </div>
              <div class="card-body">
                <?php

                $servername = "127.0.0.1";
                $username = "root";
                $password = "";
                $dbname = "mshwari.ps";
                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error)
                  die("Connection failed: " . $conn->connect_error);

                $sql = "SELECT * FROM history,trips,user WHERE history.user=" . $_SESSION["id"] . " AND trips.id = history.trip  AND userid=user.id";

                $result = $conn->query($sql);
                $f = false;
                if ($result->num_rows > 0) {
                  // output data of each row

                  echo '
                   <table class="table">
                   <thead class="thead-dark">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First Name</th>
                      <th scope="col">Last Name</th>
                      <th scope="col">From</th>
                      <th scope="col">To</th>
                      <th scope="col">Time</th>
                      <th scope="col">Date</th>
                      <th scope="col">Undo</th>
                    </tr>
                   </thead>
                   ';
                  $c = 1;
                  while ($row = $result->fetch_assoc()) {
                    //   echo '
                    //   <div class="card my-3">
                    //   <div class="card-body"> ';
                    //   echo "<p> Driver name :" . $row['first_name'] . " " . $row['last_name'] . "  &nbsp;&nbsp;&nbsp; Date :" . $row['date1'] . " &nbsp;&nbsp;&nbsp;  
                    //   time :" . $row['time1'] . "  &nbsp;&nbsp;&nbsp; From :"
                    //     . $row['from1'] . "  &nbsp;&nbsp;&nbsp; To :" . $row['to1'] . "</p>";
                    //   echo ' 
                    //   <button type="button" class="btn btn-danger">Undo</button>
                    //   </div>
                    //   </div>
                    //   ';

                    echo '                  
                   <tbody>
                    <tr>
                      <th scope="row">' . $c++ . '</th>
                      <td> ' . $row["first_name"] . '</td>
                      <td> ' . $row["last_name"] . '</td>
                      <td> ' . $row["date1"] . '</td>
                      <td> ' . $row["time1"] . '</td>
                      <td> ' . $row["from1"] . '</td>
                      <td> ' . $row["to1"] . '</td>
                    <td><button type="button" class="btn btn-danger">Undo</button>
                    </td>

                    </tr>                                    
                  ';
                  }
                  echo '   
                </tbody>
               </table>

               ';
                }
                ?>
              </div>
            </div>
            <div class="card mt-5">
              <div class="card-header">
                <p class="display-4">History of your trips - when Driver</p>
              </div>
              <div class="card-body">
                <?php

                $servername = "127.0.0.1";
                $username = "root";
                $password = "";
                $dbname = "mshwari.ps";
              
                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error)
                  die("Connection failed: " . $conn->connect_error);

                  $sql = "SELECT * FROM trips WHERE trips.userid =" . $_SESSION["id"];

                $result = $conn->query($sql);
                $f = false;
                if ($result->num_rows > 0) {
                  // output data of each row

                  echo '
   <table class="table">
   <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
  
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Time</th>
      <th scope="col">Date</th>
      <th scope="col">Undo</th>
    </tr>
   </thead>
   ';
                  $c = 1;
                  while ($row = $result->fetch_assoc()) {
                    //   echo '
                    //   <div class="card my-3">
                    //   <div class="card-body"> ';
                    //   echo "<p> Driver name :" . $row['first_name'] . " " . $row['last_name'] . "  &nbsp;&nbsp;&nbsp; Date :" . $row['date1'] . " &nbsp;&nbsp;&nbsp;  
                    //   time :" . $row['time1'] . "  &nbsp;&nbsp;&nbsp; From :"
                    //     . $row['from1'] . "  &nbsp;&nbsp;&nbsp; To :" . $row['to1'] . "</p>";
                    //   echo ' 
                    //   <button type="button" class="btn btn-danger">Undo</button>
                    //   </div>
                    //   </div>
                    //   ';

                    echo '                  
                    <tbody>
                      <tr>
                        <th scope="row">' . $c++ . '</th>
                 
                        <td> ' . $row["date1"] . '</td>
                        <td> ' . $row["time1"] . '</td>
                        <td> ' . $row["from1"] . '</td>
                        <td> ' . $row["to1"] . '</td>
                        <td><button type="button" class="btn btn-danger">Undo</button>
                      
                      </tr>                                    
                    ';
                                    }
                                    echo '   
                  </tbody>
                  </table>

                  ';
                }
                ?>
              </div>
            </div>
          </div>
          
          <div class="tab-pane fade " id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <div class="card">
              <div class="card-header">
                <h1 class="display-4 text-center mb-4">My Profile</h1>
              </div>
              <div class="card-body">


                <div class="container">
                  <div class="row">
                    <div class="col"></div>
                    <div class="col">
                      <div class="picture-container">
                        <div class="picture">
                          <img src="profilepic.png" class="picture-src" id="wizardPicturePreview" title="">
                          <input type="file" id="wizard-picture" class="">
                        </div>
                        <h6 class="mb-5 mt-3">Your profile picture</h6>

                      </div>
                    </div>
                    <div class="col"></div>
                  </div>

                  <?php
                  $servername = "127.0.0.1";

                  $username = "root";

                  $password = "";
                  $dbname = "mshwari.ps";
                  $conn = new mysqli($servername, $username, $password, $dbname);

                  if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                  }

                  $sql = "SELECT * FROM user WHERE id =" . $_SESSION["id"];
                  echo $sql;
                  $result = $conn->query($sql);
                  $f = false;
                  if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                      $_SESSION["fname"] = $row['first_name'];
                      $_SESSION["lname"] = $row['last_name'];
                      $_SESSION["phone"] = $row['phone'];
                      $_SESSION["email"] = $row['email'];
                      $_SESSION["birthday"] = $row['birthday'];
                      $_SESSION["pass"] = $row['pass'];
                    }
                  }


                  ?>
                  <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">

                      <form class="needs-validation" action="update.php" novalidate>

                        <div class="form-row form-group">
                          <div class="col ">

                            <label for="exampleInputEmail1">First Name</label>
                            <input name="fname" value="<?php echo $_SESSION['fname'] ?>" type="text" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="first name" required>
                            <div class="invalid-feedback">
                              Please choose a first name.
                            </div>
                          </div>
                          <div class="col">


                            <label for="exampleInputEmail1">Last Name</label>
                            <input name="lname" value="<?php echo $_SESSION['lname'] ?>" type="text" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="last name" required>
                            <div class="invalid-feedback">
                              Please choose a last name.
                            </div>
                          </div>
                        </div>
                        <div class="form-group">

                          <label for="exampleInputEmail1">Email address</label>
                          <input name="email" value="<?php echo $_SESSION['email'] ?>" type="email" class="form-control " disabled id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                          <div class="invalid-feedback">
                            Please choose a username.
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="pass">Password</label>
                          <input name="pass" value=" " type="password" class="form-control " id="pass" aria-describedby="emailHelp" placeholder="Enter Password" required>
                          <div class="invalid-feedback ">
                            Please choose a password more than 6 character.
                          </div>
                        </div>
                        <div class="form-group" style="position: relative">

                          <label for="confirmpass">Confirm Password</label>
                          <input name="pass2" type="password" class="form-control " id="confirmpass" aria-describedby="confirmpass" placeholder="rewrite your password" required>
                          <div class="invalid-feedback ">
                            Please confirm your password.
                          </div>
                        </div>
                        <div class="form-group ">


                          <label for="exampleInputEmail1">Your Phone Number</label>
                          <input name="phone" value="<?php echo $_SESSION['phone'] ?>" type="text" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="EX:059x-xx-xx-xx" required>
                          <div class="invalid-feedback">
                            Please write your phone.
                          </div>
                        </div>

                        <div class="form-row">
                          <div class="col-5 ">
                            <label for="date">Date of Birth</label>
                            <input name="birth" value="<?php echo $_SESSION['birthday'] ?>" type="date" class="form-control" id="date" required>
                            <div class="invalid-feedback">
                              Please choose a birthday.
                            </div>
                          </div>

                        </div>




                        <div class="form-row mt-4">
                          <div class="col-3 "></div>
                          <div class="col-6">
                            <button type="submit" class="btn btn-primary btn-block mt-2">Update Profile </button>


                          </div>
                          <div class="col-3"></div>

                        </div>




                      </form>
                    </div>
                    <div class="col-2"></div>
                  </div>
                </div>


              </div>
            </div>
          </div>






          <div class="tab-pane fade show active " id="nav-available-trip" role="tabpanel" aria-labelledby="nav-contact-tab">

            <div class="card">
              <div class="card-header">
                <h4 class="display-4 text-center">Here you can find all Available Trips</h4>
              </div>
              <div class="card-body">

                <!-- <p class="lead">Find your trip </p> -->
                <div class="row mb-5">
                  <form action="main.php" class="form-inline my-2 my-lg-0">
                    <div class="col">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Start city</label>
                        <input id="scity" name="scity" type="text" class="form-control w-75" id="exampleInputPassword1" placeholder="City">
                      </div>
                    </div>

                    <div class="col">
                      <div class="form-group">
                        <label for="#">End city</label>
                        <input id="ecity" name="ecity" class="form-control mr-sm-2 w-75" type="text" placeholder="City" />
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-group">

                        <label for="#">Date</label>
                        <input id="day" name='day' class="form-control mr-sm-2" type="date" placeholder="Day" />
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-group">
                        <label for="#">Time</label>
                        <input id="clock" name='clock' class="form-control mr-sm-2 w-100" type="time" placeholder="Clock" />
                      </div>
                    </div>

                    <div class="col pt-4">
                      <div class="form-group">
                        <!-- <label style="color: red;"></label> -->
                        <button class="btn btn-outline-success btn-lg my-2 my-sm-0 " type="submit">
                          Find Trip
                        </button>
                      </div>
                    </div>
                  </form>
                </div>


                <script>
                  sessionStorage.setItem("wp", 1);
                </script>


                <?php

                $servername = "127.0.0.1";

                $username = "root";

                $password = "";
                $dbname = "mshwari.ps";
                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * ,trips.id as tid FROM user,trips WHERE user.id = userid  ";

                if (isset($_GET['day']) && $_GET['day'] != '') {
                  $sql .= " and trips.date1 = '" . $_GET['day'] . "'";
                  echo '<script>  document.getElementById("day").value =\'';
                  echo   $_GET['day'];
                  echo '\' </script>';
                }
                if (isset($_GET['clock']) && $_GET['clock'] != '') {
                  $sql .= " and trips.time1 = '" . $_GET['clock'] . "'";
                  echo '<script>  document.getElementById("clock").value = \'' . $_GET['clock'] . '\'; </script>';
                }
                if (isset($_GET['scity']) && $_GET['scity'] != '') {
                  $sql .= " and trips.from1 = '" . $_GET['scity'] . "'";
                  echo '<script>  document.getElementById("scity").value = \'';
                  echo   $_GET['scity'];
                  echo '\' </script>';
                }
                if (isset($_GET['ecity']) && $_GET['ecity'] != '') {
                  echo "<script>  document.getElementById('ecity').value = '" . $_GET['ecity'] . "'; </script>";
                  $sql .= " and trips.to1 = '" . $_GET['ecity'] . "'";
                }


                echo $sql;
                $result = $conn->query($sql);
                $f = false;
                $count = 0;


                if ($result->num_rows > 0) {
                  $c = $result->num_rows;


                  echo ' <nav aria-label="Page navigation example"> 
                 <ul class="pagination justify-content-center">
                 <li class="page-item "><a data-toggle ="tab" class="page-link" href=".p0">Previous</a></li>';

                  $ce = 0;

                  $_SESSION["allpages"]=(int)( ($c / 15) + $ce);;
                  $_SESSION["wp"]=1;
                 
                 // echo  $_SESSION["allpages"];
               
                 
                  if ((int) ($c % 15) > 0)
                    $ce = 1;
                
                  for ($i = 0; $i < (int) ($c / 15) + $ce; $i++) {
                    echo '<li   class="page-item "><a class= "page-link o'.($i + 1).'"data-toggle ="tab"  href=".p'.($i + 1)."\""
                    . '">' . ($i + 1) . '</a></li>';
                  }
              //    include('main-jq.php');
                //  <li class="page-item"><a class="page-link" " href=".m11" >Previous</a></li>

                  echo ' 
                    <li class="page-item"><a data-toggle ="tab" class="page-link" href=".p-1">Next</a></li>
                    </ul>
                </nav> ';
                  echo '
                 <div   style="display: block"class="container p1 ">
                  <div class="row" >';

                  // output data of each row
                  while ($row = $result->fetch_assoc()) {
                    $count++;
                    echo '
                    <div class="col-4">
                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                        <div class="col-md-4">
                         <img src="profilepic.png" class="card-img" alt="..." />
                       </div>
                     <div class="col-md-8">
                     <div class="card-body">
                       <h5 class="card-title">';
                    echo $row['first_name'] . "  " . $row['last_name'] . '</h5>
                       <p class="card-text">';
                    echo "From : " . $row['from1'] . "\t" . "To : " . $row['to1'] . "<br>"
                      . "   Address : " . $row['address1'] . " At :  " . $row['date1'] . " " . substr($row['time1'], 0, 5) . "<br>  Price : " . $row['price'] . "  Phone : " . $row['phone'];


                    echo '</p>

                        <button class="btn btn-success">Get in the car</button>

                       <p class="card-text">
                         <small class="text-muted"
                           >Last updated 3 mins ago</small
                         >
                       </p>
                      
                     </div>
                   </div>
                 </div>
               </div> 
                </div>';
                    if (((int) ($count % 15)) == 0) {

                      echo '
                    </div >
                    </div >
                   <div style="display: none" class="container p' . ((int) ($count / 15) + 1) . '">
                   <div class="row">';
                    } else if ($count % 3 == 0) {
                      echo '
                      </div >
                     <div class="row">';
                    }
                  }
                  echo '</div>';
                  echo '</div>';

                  echo ' <nav aria-label="Page navigation example"> 
                <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href=".p0">Previous</a></li>';
                  $ce = 0;
                  if ((int) ($c % 15) > 0) {
                    $ce = 1;
                    for ($i = 0; $i < (int) ($c / 15) + $ce; $i++) {

                      echo '<li   class="page-item "><a class= "page-link o'.($i + 1).'"data-toggle ="tab"  href=".p'.($i + 1)."\""
                      . '">' . ($i + 1) . '</a></li>';
                    }
                  echo ' 
                   <li class="page-item"><a class="page-link" href=".p-1">Next</a></li>
                   </ul>
               </nav> ';  }
               
                }
                else echo "<h1>NO DATA FOUND</h1>";


                include('main-jq.php');
                ?>

                <!-- 
<script>document.getElementById('scity').value = 'dd';</script>
<script>  document.getElementById('ecity').value = "ll"; </script> -->


              </div>
            </div>

          </div>







          <div class="tab-pane fade " id="nav-creat-trip" role="tabpanel" aria-labelledby="nav-create-trip-tab">
            <div class="card">
              <h5 class="card-header display-4">Create My Trip</h5>
              <div class="card-body">
                <!-- <h5 class="card-title">Enter your car information</h5> -->
                <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                <form action="create.php">
                  <div class="row">
                    <div class="col">
                      <h4>
                        locations
                      </h4>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col">
                      <label for="#">Start Point (City)</label>
                      <input name="from1" type="text" class="form-control" id="validationDefault01" placeholder="city" required>
                    </div>
                    <div class="col">
                      <label for="validationDefault01">The address within the city</label>
                      <input name="address1" type="text" class="form-control" id="validationDefault01" placeholder="street" required>
                    </div>

                    <div class="col">
                      <label for="#">End Point (City)</label>
                      <input name="to1" type="text" class="form-control" id="validationDefault01" placeholder="city" required>
                    </div>
                  </div>
                  <div class="row ">
                    <div class="col">
                      <h4>
                        Time
                      </h4>
                    </div>
                  </div>
                  <div class="row mb-3">

                    <div class="col-4 ">

                      <label for="date">Date</label>
                      <input name="date1" type="date" class="form-control" id="date">
                    </div>



                    <div class="col-4">
                      <label for="validationDefault01">Time to go</label>
                      <input name="time1" type="time" class="form-control" id="validationDefault01" placeholder="First name" required>
                    </div>
                    <div class="col-4">
                      <label for="validationDefault01">Time of arrival</label>
                      <input type="time" class="form-control" id="validationDefault01" placeholder="First name" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <h4>
                        More details
                      </h4>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col">
                      <label for=" #">Type of car</label>
                      <input name="cartype" type="text" class="form-control" id="validationDefault01" placeholder="EX:BMW" required>
                    </div>
                    <div class="col">
                      <label for="#">Number Of Passengers</label>
                      <select name="nump" id="year" class="form-control w-50 ">
                        <option selected>4</option>
                        <?php
                        for ($i = 1; $i < 8; $i++) {
                          echo "<option>$i</option>";
                        }
                        ?>
                      </select>
                    </div>
                    <div class="col">
                      <label for=" #">Passenger price </label><br>
                      <input name="price" type="number" class="form-control w-50 d-inline" id="validationDefault01" placeholder="شيقل" required><span class="badge badge-secondary" style="font-size: 20PX;"> ‏₪</span>
                      <!-- <p class="d-inline" style="font-size: 30px; height:10px ">₪</p> -->
                    </div>
                    <div class="col-4">
                      <label class="mb-3" for="#">The gender of the passengers</label><br>
                      <div class="custom-control custom-radio  custom-control-inline">
                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio1">Male</label>
                      </div>
                      <div class="custom-control custom-radio  custom-control-inline">
                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio2">Female</label>
                      </div>
                      <div class="custom-control custom-radio  custom-control-inline">
                        <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio3">Any</label>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex flex-row-reverse mt-5">

                    <!-- <a href="#" class="btn btn-primary">Ctreate Trip</a> -->
                    <button type="submit" class="btn btn-primary">Ctreate Trip</button>

                </form>

              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <script>
    $(document).ready(function() {
      var url = document.location.toString();
      if (url.match('#')) {
        $('#nav-tab a[href="#' + url.split('#')[1] + '"]').tab('show');
      }

      // Change hash for page-reload
      $('#nav-tab a').on('shown.bs.tab', function(e) {
        //  alert(e.target.hash);
        window.location.hash = e.target.hash;
      });
    });
  </script>
  </div>

  <div class="container-fluid" style="background-color: white;">

  </div>
  </script>

  </div>

  <div class="container-fluid" style="background-color: white;">

  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>
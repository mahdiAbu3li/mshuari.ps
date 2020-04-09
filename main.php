<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- icon -->
  <script src="https://kit.fontawesome.com/4f1630567e.js" crossorigin="anonymous"></script>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <link rel="stylesheet" href="http://localhost:8080/Transfer/style-main.css">

  <title>TRANSFER.PS</title>
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

        <a id="nav-sign" class="nav-item nav-link bg-primary rounded ml-auto mr-1" href="homePage.html">Sign out</a>
      </div>
    </div>


  </nav>

  <div class="container-fluid h-100 mt-5 ">
    <div class="row h-100">
      <div class="col-5 col-sm-3 col-md-2" style="background-color: white;">
        <!-- <div class="form-group has-search  pt-4">
          <span class="fa fa-search form-control-feedback d-inline"></span>
          <input type="text" class="form-control " placeholder="Search">
        </div> -->
        <nav>
          <div class="nav flex-column position-fixed  mt-3 d-inline" id="nav-tab" role="tablist">
            <!-- <div class="row"> -->
            <i class="fas fa-home fa-lg fa-fw mt-3 ml-2"></i>
            <a class="nav-item nav-link  d-inline " id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="false">
              Home</a><br>
            <!-- </div> -->
            <!-- <p class=" d-inline">___________________________</p><br> -->
            <!-- <div class="row"> -->
            <i class="fas fa-user-circle fa-lg fa-fw mt-3  ml-2"></i>
            <a class="nav-item nav-link d-inline" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a><br />
            <!-- <p class="d-inline">___________________________</p><br> -->
            <!-- </div> -->
            <!-- <div class="row"> -->
            <i class="fas fa-taxi fa-lg fa-fw mt-3 ml-2"></i>
            <a class="nav-item nav-link d-inline" id="nav-available-trip-tab" data-toggle="tab" href="#nav-available-trip" role="tab" aria-controls="nav-available-trip" aria-selected="false">Available Trips</a><br />
            <!-- </div> -->
            <!-- <div class="row"> -->
            <!-- <p class="d-inline">___________________________</p><br> -->
            <i class="fas fa-taxi fa-lg fa-fw mt-3 ml-2"></i>
            <a class="nav-item nav-link d-inline" id="nav-create-trip-tab" data-toggle="tab" href="#nav-creat-trip" role="tab" aria-controls="nav-create-trip" aria-selected="false">Create Trip</a><br />
            <!-- </div> -->
          </div>

        </nav>
      </div>
      <div class="col-7 col-sm-9 col-md-10 pt-4" style="background-color: whitesmoke;">
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <h1>home page</h1>

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

                  <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">

                      <form>

                        <div class="form-row form-group">
                          <div class="col ">

                            <label for="exampleInputEmail1">First Name</label>
                            <input type="text" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="first name">

                          </div>
                          <div class="col">


                            <label for="exampleInputEmail1">Last Name</label>
                            <input type="text" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="last name">

                          </div>
                        </div>
                        <div class="form-group">

                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Password</label>
                          <input type="password" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Password">
                        </div>
                        <div class="form-group">

                          <label for="exampleInputEmail1">Confirm Password</label>
                          <input type="password" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="rewrite your password">
                        </div>
                        <div class="form-group ">


                          <label for="exampleInputEmail1">Your Phone Number</label>
                          <input type="text" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="EX:059x-xx-xx-xx">
                        </div>

                        <div class="form-row">
                          <div class="col-3 ">

                            <label for="day">Day</label>
                            <select id="day" class="form-control ">
                              <option selected>Day</option>
                              <?php

                              for ($i = 1; $i < 32; $i++) {
                                echo "<option>$i</option>";
                              }
                              ?>

                            </select>
                          </div>
                          <div class="col-3">
                            <label for="mounth">Mounth</label>
                            <select id="mounth" class="form-control ">
                              <option selected>Mounth</option>
                              <?php
                              $months = array(
                                'January',
                                'February',
                                'March',
                                'April',
                                'May',
                                'June',
                                'July ',
                                'August',
                                'September',
                                'October',
                                'November',
                                'December',
                              );
                              for ($i = 0; $i < 12; $i++) {
                                echo "<option>" . $months[$i] . "</option>";
                              }
                              ?>
                            </select>
                          </div>
                          <div class="col-3">
                            <label for="year">Year</label>
                            <select id="year" class="form-control ">
                              <option selected>Year</option>
                              <?php
                              for ($i = 1900; $i < 2020; $i++) {
                                echo "<option>$i</option>";
                              }
                              ?>
                            </select>
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






          <div class="tab-pane fade" id="nav-available-trip" role="tabpanel" aria-labelledby="nav-contact-tab">

            <div class="card">
              <div class="card-header">
                <h4 class="display-4 text-center">Here you can find all Available Trips</h4>
              </div>
              <div class="card-body">

                <!-- <p class="lead">Find your trip </p> -->
                <div class="row mb-5">
                  <form class="form-inline my-2 my-lg-0">
                    <div class="col">
                      <label class="form-control-lg" style="color: red;">Go to</label>
                      <input class="form-control mr-sm-2" type="search" placeholder="City" />
                    </div>

                    <div class="col">
                      <label class="form-control-lg" style="color: red;">Date</label>
                      <input class="form-control mr-sm-2" type="date" placeholder="Day" />
                    </div>
                    <div class="col">
                      <label class="form-control-lg" style="color: red;">Time</label>
                      <input class="form-control mr-sm-2" type="time" placeholder="Clock" />
                    </div>
                    <div class="col"></div>
                    <div class="col pt-4">
                      <label class="form-control-lg" style="color: red;"></label>
                      <button class="btn btn-outline-success btn-lg my-2 my-sm-0 " type="submit">
                        Find Trip
                      </button>
                    </div>
                  </form>
                </div>


                <nav aria-label="Page navigation example">
                  <ul class="pagination justify-content-center">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                  </ul>
                </nav>

                <?php

                for ($i = 0; $i < 5; $i++) {
                  echo '
               <div class="row">
                <div class="col">
                  <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                      <div class="col-md-4">
                        <img src="profilepic.png" class="card-img" alt="..." />
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">
                            This is a wider card with supporting text below as a
                            natural lead-in to additional content. This content is a
                            little bit longer.
                          </p>
                           <button class="btn btn-outline-success">Get in the car</button>
                          <p class="card-text">
                            <small class="text-muted"
                              >Last updated 3 mins ago</small
                            >
                          </p>
                         
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card mb-3 ">
                    <div class="row no-gutters">
                      <div class="col-md-4">
                        <img src="profilepic.png" class="card-img" alt="..." />
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">
                            This is a wider card with supporting text below as a
                            natural lead-in to additional content. This content is a
                            little bit longer.
                          </p>
                          <button class="btn btn-outline-success">Get in the car</button>
                          <p class="card-text">
                            <small class="text-muted"
                              >Last updated 3 mins ago</small
                            >
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="col">
                  <div class="card mb-3 ">
                    <div class="row no-gutters">
                      <div class="col-md-4">
                        <img src="profilepic.png" class="card-img" alt="..." />
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">
                            This is a wider card with supporting text below as a
                            natural lead-in to additional content. This content is a
                            little bit longer.
                          </p>
                          <button class="btn btn-outline-success">Get in the car</button>
                          <p class="card-text">
                            <small class="text-muted"
                              >Last updated 3 mins ago</small
                            >
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            
            ';
                }
                ?>

                <nav aria-label="Page navigation example">
                  <ul class="pagination justify-content-center">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                  </ul>
                </nav>



              </div>
            </div>

          </div>






          <div class="tab-pane fade show active" id="nav-creat-trip" role="tabpanel" aria-labelledby="nav-create-trip-tab">
            <div class="card">
              <h5 class="card-header">Create My Trip</h5>
              <div class="card-body">
                <h5 class="card-title">Enter your car information</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
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
                    <input type="text" class="form-control" id="validationDefault01" placeholder="city" required>
                  </div>
                  <div class="col">
                    <label for="validationDefault01">The address within the city</label>
                    <input type="text" class="form-control" id="validationDefault01" placeholder="street"  required>
                  </div>

                  <div class="col">
                    <label for="#">End Point (City)</label>
                    <input type="text" class="form-control" id="validationDefault01" placeholder="city" required>
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

                    <label for="date">Example date</label>
                    <input type="date" class="form-control" id="date">
                  </div>



                  <div class="col-4">
                    <label for="validationDefault01">Time to go</label>
                    <input type="time" class="form-control" id="validationDefault01" placeholder="First name" required>
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
                    <label " for=" #">Type of car</label>
                    <input type="text" class="form-control" id="validationDefault01" placeholder="EX:BMW" required>
                  </div>
                  <div class="col">
                    <label for="#">Number Of Passengers</label>
                    <select id="year" class="form-control w-50 ">
                      <option selected>4</option>
                      <?php
                      for ($i = 1; $i < 8; $i++) {
                        echo "<option>$i</option>";
                      }
                      ?>
                    </select>
                  </div>
                  <div class="col">
                    <label " for=" #">Passenger price </label><br>
                    <input type="text" class="form-control w-50 d-inline" id="validationDefault01" placeholder="شيقل" required><span class="badge badge-secondary" style="font-size: 20PX;"> ‏₪</span>
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
                <a href="#" class="btn btn-primary">Ctreate Trip</a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>
  <div class="container-fluid" style="background-color: white;">

  </div>

  <!-- google map -->
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7FXklT1D6RiFIOwyDi2ftF5W7AIxlMJs&callback=initMap"></script>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="main-jq.js"></script>
</body>

</html>
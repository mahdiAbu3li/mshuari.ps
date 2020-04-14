<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no ">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost:8080/mshuari.ps/style-loginAndSign.css">

    <title>PS-progect</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">




        <a class="navbar-brand" href="homePage.html">MSHUARI.PS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNavAltMarkup">

            <div class="navbar-nav ">
                <a class="nav-item nav-link active" href="homePage.html">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#">Contests</a>

            </div>

            <div class="navbar-nav">
                <a id="nav-login" class="nav-item nav-link  bg-success rounded  " href="login-ps.html">Login</a>
                <a id="nav-sign" class="nav-item nav-link bg-primary rounded " href="sign-in.php">Sign up</a>

            </div>
        </div>


    </nav>


    <div class="container h-50" style="margin-top: 100px ">
        <div class="row">
            <div class="col"></div>
            <div class="col-12 col-sm-8 col-md-6  ">
                <div class="card mb-4">
                    <div class="card-header bg-primary">
                        <h4>SIGN UP</h4>
                    </div>
                    <div class="card-body">


                        <form class="needs-validation" action="insert.php" novalidate>

                            <div class="form-row form-group">
                                <div class="col ">

                                    <label for="exampleInputEmail1">First Name</label>
                                    <input name ="fname" type="text" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="first name" required>

                                </div>
                                <div class="col">


                                    <label for="exampleInputEmail1">Last Name</label>
                                    <input name ="lname" type="text" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="last name" required>

                                </div>
                            </div>
                            <div class="form-group">

                                <label for="exampleInputEmail1">Email address</label>
                                <input name ="email" type="email" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input name ="pass" type="password" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Password" required>
                            </div>
                            <div class="form-group">

                                <label for="exampleInputEmail1">Confirm Password</label>
                                <input type="password" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="rewrite your password" required>
                            </div>
                            <div class="form-group ">


                                <label for="exampleInputEmail1">Your Phone Number</label>
                                <input name ="phone" type="number" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="EX:059x-xx-xx-xx" required>
                            </div>

                            <div class="form-row">
                                <div class="col-5 ">

                                    <label for="date">Date of Birth</label>
                                    <input name ="birth" type="date" class="form-control" id="date" required>
                                </div>
                            
                            </div>




                            <div class="form-row mt-4">
                                <div class="col-3 "></div>
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary btn-block mt-2">Sign UP </button>

                                    <a id="s" href="login-ps.html" class="btn btn-outline-success btn-block mt-2 ">LOGIN</a>
                                </div>
                                <div class="col-3"></div>

                            </div>




                        </form>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Complaint Management System</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/half-slider.css" rel="stylesheet">
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">COMPLAINT MANAGEMENT </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="http://localhost/Complaint%20Management%20System/users/">User Login</a>
                    </li>
                    <li>
                        <a href="http://localhost/Complaint%20Management%20System/users/registration.php">User Registration</a>
                    </li>
                    <li>
                        <a href="http://localhost/Complaint%20Management%20System/admin/">Admin</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Half Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">

            <div class="item active">

                <div class="fill" style="background-image: url('http://localhost/Complaint%20Management%20System/img/c2.jpg');">
                </div>
                <div class="carousel-caption">

                </div>
            </div>
            <div class="item">

                <div class="fill" style="background-image:url('http://localhost/Complaint%20Management%20System/img/2.png');"></div>
                <div class="carousel-caption">

                </div>
            </div>
            <div class="item">

                <div class="fill" style="background-image:url('http://localhost/Complaint%20Management%20System/img/1.png');"></div>
                <div class="carousel-caption">

                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="com">
                    <h1><b>WELCOME TO COMPLAINT MANAGEMENT SYSTEM</b></h1>
                    <p>
                    <h2>The Easiest Way To Complain Online </h2><br> <b><i>Tired off getting ripped off? Fight back and file a customer complaint now.Sign Up Today And You Can Leave Complaints on various topics/company.</b> </i></p>
                </div>

            </div>
        </div>
        <style>
            .com {
                text-align: center;
            }
        </style>
        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Made by Vanshika</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>
        <style>
            .col-lg-12 {
                text-align: center;
                border: 1px solid black;
            }
        </style>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })
    </script>

</body>

</html>
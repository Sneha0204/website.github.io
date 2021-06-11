 <?php 
    include 'conn.php';
    error_reporting(0);
    session_start();
    $id = $_SESSION['id'];
    $query="SELECT * FROM registration WHERE id='$id'";
    $data= mysqli_query($con, $query);
    $total=mysqli_num_rows($data);
    $result=mysqli_fetch_assoc($data);
    $name=$result['user_name'];
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title>TopHire</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>
<div class="wrapper">

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light navbar-default navbar-static-top" role="navigation">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="https://d383au3bye3rv1.cloudfront.net/static/images/logo/main.png"/></a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <ul class="navbar-nav my-2 my-lg-0">
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#">For
                                Employers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll"
                               href="#">Refer &amp; Earn
                                ₹15k</a>
                        </li>
                        <?php
                            if($id=='')
                            {
                        ?>
                                <li class="nav-item">
                                    <a id="candidate-login" class="nav-link page-scroll"
                                        href="login.php">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a id="candidate-signup" class="nav-link"
                                       href="signup.php">Sign Up</a>
                                </li>
                        <?php
                            }
                            else
                            {
                        ?>
                                <li class="nav-item">
                                    <a id="candidate-login" class="nav-link page-scroll"
                                        href="#">Welcome <?php echo $name?></a>
                                </li>
                                <li class="nav-item">
                                    <a id="candidate-signup" class="nav-link"
                                       href="logout.php">Logout</a>
                                </li>   
                        <?php
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <style type="text/css">
       .nav-link 
        {
            color:blue !important;
            font-weight: bold;
        }
    </style>
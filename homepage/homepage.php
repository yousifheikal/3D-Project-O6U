<?php
require_once "../config.php";
//include navbar;
if(isset($_SESSION['std_email']) || isset($_SESSION['dr_email']) || isset($_SESSION['visitor']))
{

}
else
{
    header("location: ".login);
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../CSS/main.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Dashboard | Home Page</title>
</head>
<body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script><?php require_once "../".navbar;?>
<!--End nav-->

<!--Start Projects-->
<!--Interior Design-->
<div class="landing">
    <div class="container">
        <div class="title">
            <p>Interior Design</p>
        </div>
        <div class="box">
            <div class="content">
                <div class="left-box">
                    <div class="card" style="width: 20rem;">
                        <img src="../images/project1.jpg" class="card-img-top" alt="project">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <h5>Dr: Rehab</h5>
                            <a href="#" class="btn " style="background: #ff8008;color: white">Display Project</a>
                        </div>
                    </div>
                </div>
                <div class="medium-box">
                    <div class="card" style="width: 20rem;">
                        <img src="../images/project1.jpg" class="card-img-top" alt="project">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <h5>Dr: Rehab</h5>
                            <a href="#" class="btn " style="background: #ff8008;color: white">Display Project</a>
                        </div>
                    </div>
                </div>

                <div class="right-box">
                    <div class="card" style="width: 20rem;">
                        <img src="../images/project1.jpg" class="card-img-top" alt="project">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <h5>Dr: Rehab</h5>
                            <a href="#" class="btn " style="background: #ff8008;color: white">Display Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Interior Design-->
<!--Advertising-->
<div class="landing">
    <div class="container">
        <div class="title">
            <p style="margin-top: 50px;">Advertising</p>
        </div>
        <div class="box">
            <div class="content">
                <div class="left-box">
                    <div class="card" style="width: 20rem;">
                        <img src="../images/project2.jpg" class="card-img-top" alt="project">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <h5>Dr: Rehab</h5>
                            <a href="#" class="btn " style="background: #ff8008;color: white">Display Project</a>
                        </div>
                    </div>
                </div>
                <div class="medium-box">
                    <div class="card" style="width: 20rem;">
                        <img src="../images/project2.jpg" class="card-img-top" alt="project">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <h5>Dr: Rehab</h5>
                            <a href="#" class="btn " style="background: #ff8008;color: white">Display Project</a>
                        </div>
                    </div>
                </div>

                <div class="right-box">
                    <div class="card" style="width: 20rem;">
                        <img src="../images/project2.jpg" class="card-img-top" alt="project">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <h5>Dr: Rehab</h5>
                            <a href="#" class="btn " style="background: #ff8008;color: white">Display Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Advertising-->
<!--End Projects-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
<?php
require_once "../config.php";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">    <title>Dashboard | Home Page</title>
</head>
<body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script><nav class="navbar navbar-expand-lg sticky-top" style="margin-bottom: 50px;">
    <div class="container">
        <a class="navbar-brand" href="">
            <img src="../images/footerlogo.png" width="100" alt="O6U" >
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php if (isset($_SESSION['std_email']) || isset($_SESSION['dr_email'])){?>
                <li class="nav-item">
                    <a class="nav-link" onclick="if(!confirm('Do you want to go the Main page ?'))return false;"
                       href="<?php echo MainPage?>">Home</a>
                </li>
                <?php }?>
                <?php if (isset($_SESSION['std_email'])){?>
                <li class="nav-item">
                    <a class="nav-link" href="#">Upload Project</a>
                </li>
                <?php }?>
                <?php if (isset($_SESSION['dr_email'])){?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            View E-mails
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo email_student."ViewStudent.php"?>">View email for student</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                        </ul>
                    </li>
                <?php }?>
                <?php if (isset($_SESSION['std_email'])){?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        View Projects
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Cinema and Photography</a></li>
                        <li><a class="dropdown-item" href="#">Products Design</a></li>
                        <li><a class="dropdown-item" href="#">Interior Design</a></li>
                        <li><a class="dropdown-item" href="#">Advertising</a></li>
                    </ul>
                </li>
                <?php }?>
                <?php if (isset($_SESSION['dr_email'])){?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Create E-mail
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo email_student."AddStudent.php"?>">Create new email for Student</a></li>
                            <li><a class="dropdown-item" href="<?php echo email_student."AddDoctor.php"?>">Create new email for Doctor</a></li>
                        </ul>
                    </li>
                <?php }?>

                <?php if (isset($_SESSION['dr_email']) || isset($_SESSION['std_email'])){?>
                <li class="nav-item">
                    <a class="nav-link" onclick="if(!confirm('Do you want log out ?'))return false;"
                       href="<?php echo login?>">Log out</a>
                </li>
                <?php }?>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-warning" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
</body>
</html>

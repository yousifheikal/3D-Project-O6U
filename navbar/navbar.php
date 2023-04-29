<?php
require_once "../config.php";
//require_once  "../".functions."Validate.php";
//$mysqli = require_once "../".functions.'db.php';
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
    <!--    CSS Link-->
    <link rel="stylesheet" href="../CSS/nav.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <script src="../Dark-Mode/dark.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
<!--    <title>Dashboard | Home Page</title>-->
</head>

<body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<div class="header" id="home">
    <div class="container">
        <div class="box">
            <div class="content">
                <div class="left-box">
                    <a href="<?php echo homepage?>"><img src="../images/header.png" alt="" width="250px"></a>
                </div>
                <div class="right-box">
                    <div class="headerSocial">
                        <a class="Social_Links fa fa-linkedin hvr-pulse" href="#"></a>
                        <a class="Social_Links fa fa-twitter hvr-pulse" href="#"></a>
                        <a class="Social_Links fa fa-facebook hvr-pulse" href="https://www.facebook.com/o6u.eg" target="_blank"></a>
                        <a class="Social_Links fa fa-google-plus hvr-pulse" href="#"></a>
                    </div>
                        <div class="logout">
                            <a href="<?php echo logout?>" onclick="if(!confirm('Do you want log out ?'))return false;">
                                Logout <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                                    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                </svg></a>
                        </div>

                        <div class="dark">
                            <i class="bi bi-brightness-high-fill" id="toggleDark"></i>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg sticky-top" style="margin-bottom: 50px;">
<!--    Start Navbar-->
    <div class="container">
        <a class="navbar-brand" href="#home">
            <img src="../images/footerlogo.png" width="100" alt="O6U" >
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php if (isset($_SESSION['std_email']) || isset($_SESSION['dr_email'])){?>
                <li class="nav-item">
                    <a style="color: #ddd0d0f7" class="nav-link"
                       href="../">Home</a>
                </li>
                <?php }?>
                <?php if (isset($_SESSION['std_email'])){?>
                <li class="nav-item">
                    <a style="color: #ddd0d0f7" class="nav-link" href="../<?php echo upload?>">Upload Project</a>
                </li>
                <?php }?>
                <?php if (isset($_SESSION['dr_email'])){?>
                    <li class="nav-item dropdown">
                        <a style="color: #ddd0d0f7" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            View
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo email_student."ViewStudent.php"?>">E-mail for student</a></li>
                            <li><a class="dropdown-item" href="<?php echo Visitor?>">Visitor</a></li>
                            <li><a class="dropdown-item" href="<?php echo publish?>">projects</a></li>
                        </ul>
                    </li>
                <?php }?>
                <?php if (isset($_SESSION['std_email']) || isset($_SESSION['dr_email']) || isset($_SESSION['visitor'])){?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" style="color: #ddd0d0f7" data-bs-toggle="dropdown" aria-expanded="false">
                        View Projects
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo viewProjects."?project_name=Cinema and photography"?>">Cinema and Photography</a></li>
                        <li><a class="dropdown-item" href="<?php echo viewProjects."?project_name=Products design"?>">Products Design</a></li>
                        <li><a class="dropdown-item" href="<?php echo viewProjects."?project_name=Interior Design"?>">Interior Design</a></li>
                        <li><a class="dropdown-item" href="<?php echo viewProjects."?project_name=advertising"?>">Advertising</a></li>
                    </ul>
                </li>
                <?php }?>
                <?php if (isset($_SESSION['dr_email'])){?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: #ddd0d0f7" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Create E-mail
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo email_student."AddStudent.php"?>">Create new email for Student</a></li>
                            <li><a class="dropdown-item" href="<?php echo email_student."AddDoctor.php"?>">Create new email for Doctor</a></li>
                        </ul>
                    </li>
                <?php }?>

            </ul>
            <?php
            $username = 'root';
            $pass = '';

            $database = new PDO("mysql:host=localhost; dbname=gallery_system;", $username, $pass);

            if (isset($_GET['btn-search']))
            {
                $search = $database->prepare("SELECT * FROM publish_project WHERE  description LIKE :value OR dr_name LIKE  :value");
                $search_value = "%".$_GET['search']."%";
                $search->bindParam("value", $search_value);
                $search->execute();
                foreach ($search as $data)
                {
                    $_SESSION['search'] = $data['dr_name'];
//                    $_SESSION['description-search'] = $data['description'];
                    //        echo $data['dr_name'];
                }
            }

            ?>
            <form class="example" action="" method="get">
                <input type="text" placeholder="Search.." name="search" style="width: 300px; height: 40px;border-radius: 3px;">
                <button type="submit" name="btn-search"><i class="fa fa-search"></i></button></a>
            </form>
<!--            <form class="d-flex" role="search">-->
<!--                <input class="form-control me-2" type="search" style="width: 350px"-->
<!--                       placeholder="Search For Projects.." aria-label="Search">-->
<!--                <button class="btn btn-warning" type="submit" style="color: #ffffffd1;background: #ff8100f0;border-radius: 23px;-->
<!--                    width: 75px;font-weight: 400;letter-spacing: 1px;-->
<!--                ">Search</button>-->
<!--            </form>-->
        </div>
    </div>
</nav>
<!--End Navbar-->
<?php //include "../".dark?>
</body>
</html>

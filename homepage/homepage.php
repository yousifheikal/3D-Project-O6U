<?php
//Require All tools to need projects
require_once "../config.php";
require_once  "../".functions."Validate.php";
$mysqli = require_once "../".functions.'db.php';

if(isset($_SESSION['std_email']) || isset($_SESSION['dr_email']) || isset($_SESSION['visitor']))
{
    //include Navbar
    include "../".navbar;
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

    <script src="../Dark-Mode/script.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

    <!--    CSS Link-->
    <link rel="stylesheet" href="../CSS/homepage.css">
    <!--    Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&family=Open+Sans:wght@400;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>معرض - كلية الفنون التطبيقية</title>
</head>
<style>
    .honey {
        /*background-image: url("../images/o6u.jpg");*/
        /*background-color: red;*/
        /*opacity 0.1;*/
        /*visibility: revert;*/

    }
</style>
<body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script><?php require_once "../".navbar;?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<!--First Section in project-->
<div class="honey">
    <div class="container">
        <div class="box">
            <div class="content">
                <div class="left-box">
                    <div class="number">Applied Arts</div>
                    <h1>Types Applied Arts</h1>

                    <p>Types in the applied arts are incredibly satisfying jobs that require creativity, good problem-solving skills, and attention to detail. They also offer opportunities for advancement in many careers due to their need for advanced skills.</p>
                    <!--                    <button type="button" class="btn btn-secondary  btn-lg">Scroll down to see all projects </button>-->
                    <?php if (isset($_SESSION['std_name'])){?>
                    <h3 style="padding-left: 5px;">Click her to see all projects <?php echo ucfirst($_SESSION['std_Firstname']);?></h3>
                    <?php }?>
                    <?php if (isset($_SESSION['dr_name'])){?>
                        <h4 style="padding-left: 5px;">Click her to see all projects <?php echo "Dr: ".ucfirst($_SESSION['dr_Firstname'])?></h4>
                    <?php }?>
                    <div style="padding-left: 150px">
                    <a href="#project" style="text-decoration: none">
                        <img src="../images/scroll%20(3).png" width="50px" alt="">
                        <img src="../images/scroll%20(3).png" width="50px" alt="">
                    </a>
                    </div>
                </div>
                <div class="right-box">
                    <a href="http://localhost/jo/3d/viewproject/view.php?project_name=advertising">
                        <img src="../images/photography.png" width="500" alt="">
                    </a>
                    <div class="specialist" style="text-align: center">
                        <a href="http://localhost/jo/3d/viewproject/view.php?project_name=Products%20design">
                            <img src="../images/pro2.png" width="100px" style="margin-right: 30px">
                        </a>
                        <a href="http://localhost/jo/3d/viewproject/view.php?project_name=Cinema%20and%20photography">
                            <img src="../images/film.png" width="100px" style="margin-right: 30px">
                        </a>
                        <a href="http://localhost/jo/3d/viewproject/view.php?project_name=Interior%20Design">
                            <img src="../images/Applied-Art-Careers.png" width="150px" style="margin-right: 30px">
                        </a>
<!--                        <img src="../images/ad.jpg" width="100px">-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/////////////////////////////////////////////////////////////////////////////////////////////////-->

<!--publish project 20 to 50 by Dark mood-->

<?php
    if (isset($_GET['search']))
    {

?>
<div class="landing">
    <div class="container">
        <div class="title">
            <!--            <p style="letter-spacing: 3px">Gallery</p>-->
            <img id="project" style="padding-top: 50px" src="../images/logo4.png" width="100px" alt="Not-Found">
            <img id="project" style="padding-top: 50px" src="../images/logo%20(1).png" width="100px" alt="Not-Found">
        </div>
        <div class="box">
            <?php
            $search = $_SESSION['search'];
//            $description = $_SESSION['description-search'];
            $projects = mysqli_query($mysqli, "SELECT * FROM publish_project WHERE dr_name='$search'");
            ?>
            <?php
            foreach ($projects as $project){
                ?>
                <div class="content">
                    <div class="left-box">

                        <div class="card" style="width: 20rem;">
                            <img src="../images/<?php echo $project['image'];?>" width="200" class="card-img-top" alt="project">
                            <div class="card-body">
                                <h5 style="font-weight: bold;color: #466262;" class="card-title"><?php echo $project['project_name']."  : "; ?></h5>
                                <p class="card-text"><?php echo $project['description']; ?></p>
                                <h5 style="font-weight: bold;color: #466262;background: yellow;border-radius: 10px;width: 100px"
                                ><?php echo "Dr: ".ucfirst($project['dr_name']); ?></h5>
                                    <a href="<?php echo displayProjects."?id=".$project['id']?>" style="text-decoration: none">
                                        <button style="background: #f1750a; border: 50px; border-radius: 50px">Display</button>
                                        <img src="../images/tap.png" width="50px" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
<?php }else{?>

        <div class="landing">
            <div class="container">
                <div class="title">
                    <!--            <p style="letter-spacing: 3px">Gallery</p>-->
                    <img id="project" style="padding-top: 50px" src="../images/logo4.png" width="100px" alt="Not-Found">
                    <img id="project" style="padding-top: 50px" src="../images/logo%20(1).png" width="100px" alt="Not-Found">
                </div>
                <div class="box">
                    <?php
                    $projects = mysqli_query($mysqli, "SELECT * FROM publish_project");
                    ?>
                    <?php
                    foreach ($projects as $project){
                        ?>
                        <div class="content">
                            <div class="left-box">

                                <div class="card" style="width: 20rem;">
                                    <img src="../images/<?php echo $project['image'];?>" width="200" class="card-img-top" alt="project">
                                    <div class="card-body">
                                        <h5 style="font-weight: bold;color: #466262;" class="card-title"><?php echo $project['project_name']."  : "; ?></h5>
                                        <p class="card-text"><?php echo $project['description']; ?></p>
                                        <h5 style="font-weight: bold;color: #466262;"><?php echo "Dr: ".ucfirst($project['dr_name']); ?></h5>
                                        <a href="<?php echo displayProjects."?id=".$project['id']?>" style="text-decoration: none">
                                            <button style="background: #f1750a; border: 50px; border-radius: 50px">Display</button>
                                            <img src="../images/tap.png" width="50px" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
<?php }?>

    </div>
</div>
<!--/////////////////////////////////////////////////////////////////////////////////////////////////-->

<!--publish project 20 to 50 by light mood-->
<div class="landing" style="" id="gallery">
    <div class="container">
        <div class="title">
            <!--            <p style="letter-spacing: 3px">Gallery</p>-->
            <img id="project" style="padding-top: 50px" src="../images/logo%20(1).png" width="100px" alt="Not-Found">
            <img id="project" style="padding-top: 50px" src="../images/logo4.png" width="100px" alt="Not-Found">

        </div>
        <div class="box">
            <!--        --><?php //if (isset($_SESSION['approve']) && $_SESSION['approve']==$_GET['id']){
            //
            //        ?>
            <?php
            $projects = mysqli_query($mysqli, "SELECT * FROM publish_project");
            ?>
            <?php
            foreach ($projects as $project){
                ?>
                <div class="content">
                    <div class="left-box">

                        <div class="card" style="width: 20rem;background: #212529">
                            <img src="../images/<?php echo $project['image'];?>" width="200" class="card-img-top" alt="project">
                            <div class="card-body">
                                <h5 style="font-weight: bold;color: #2e7a7a" class="card-title"><?php echo $project['project_name']."  : "; ?></h5>
                                <p class="card-text" style="color: #b3b3b3"><?php echo $project['description']; ?></p>
                                <h5 style="font-weight: bold;color: #2e7a7a"><?php echo "Dr: ".ucfirst($project['dr_name']); ?></h5>

                                <a href="<?php echo displayProjects."?id=".$project['id']?>" style="text-decoration: none">
                                    <button style="background: #f1750a; border: 50px; border-radius: 50px">Display</button>
                                    <img src="../images/tap.png" width="50px" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
        <!--        --><?php //}?>
    </div>
</div>
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<!-- Start Footer -->
<?php include '../footer/footer.php'?>
<!-- End Footer -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
<?php
require_once "../config.php";
require_once '../'.link;
require_once  "../".functions."Validate.php";
$mysqli = require_once "../".functions.'db.php';

if(isset($_SESSION['std_email']) || isset($_SESSION['dr_email']) || isset($_SESSION['visitor']))
{
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

    <!--    <link rel="stylesheet" href="../CSS/main.css">-->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Dashboard | Home Page</title>
</head>
<style>
    .landing .box {

        display: flex;
        flex-wrap: wrap;
        align-items: end;
        justify-content: space-around;
    }

    .landing .title  {
        text-align: center;
        padding-bottom: 70px;
    }
    .landing .title p {
        margin: auto;
        font-size: 20px;
        color: black;
        font-weight: bold;
        position: relative;
        z-index: 1;
        display: inline-block;
    }

    .landing .title p::after {
        content: "";
        position: absolute;
        width: 150px;
        height: 50px;
        background: linear-gradient(#ff8008,#fff);
        top: -15px;
        left: 0;
        z-index: -1;
        /*transform: rotate(10deg);*/
        border-top-left-radius: 35px;
        border-bottom-right-radius: 35px;
    }

    .landing .content {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-around;
    }

    .landing .box .card {
        transition: 0.5s ease;
    }

    .landing .box .card:hover {
        transform: scale(1.1);
    }

    .landing .box .left-box {
        flex-basis: 35%;
        padding-right: 110px;
        padding-bottom: 35px;
    }

    .landing .box .left-box h1 {
        font-size: 48px;
        font-weight: 700;
        font-style: normal;
    }

    .landing .box .left-box p {
        font-size: 16px;
        color: rgb(59, 59, 59);
        font-family: "Roboto",sans-serif;
        font-weight: 400;
        font-style: normal;
        padding-bottom: 20px;
    }

    .landing .box .left-box button {
        background-color: orange;
        color:white ;
    }

    .landing .box .left-box .logs {
        padding-top: 30px;
    }


    .honey {
        margin-top: -50px;
        padding-top: 70px;
        padding-bottom: 100px;
        /*background: #edf1fd;*/
    }

    .honey .box {
        display: flex;
    }

    .honey .content {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-around;
    }
    .honey .left-box {
        flex-basis: 42%;
    }

    .honey .right-box {
        flex-basis: 55%;
        padding-left: 100px;
    }

    .honey .left-box .number {
        font-size: 30px;
        color: cadetblue;
        font-weight: 700;
        letter-spacing: 10px;
    }

    .honey .left-box h1 {
        color: #172940;
        letter-spacing: 1px;
        font-weight: 800;
    }

    .honey .left-box p {
        font-size: 14px ;
        letter-spacing: 1px;
        font-weight: 500;
        /*color: rgb(59, 59, 59);*/
        padding-bottom: 5px;
    }

    .honey .left-box button {
        background-color: #f1750a ;
        color :white ;

    }
</style>
<body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script><?php require_once "../".navbar;?>
<!--End nav-->

<!--Start Projects-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script><?php require_once "../".navbar;?>
<!--Interior Design-->
<?php
if ($_GET['project_name'] == 'Interior Design')
{
?>
<div class="honey" style="margin-bottom: 80px">
    <div class="container">
        <div class="box">
            <div class="content">
                <div class="left-box">
                    <div class="number">Applied Art</div>
                    <h1>Careers in Interior Design</h1>
                    <p>Careers in the applied arts are incredibly satisfying jobs that require creativity, good problem-solving skills, and attention to detail. They also offer opportunities for advancement in many careers due to their need for advanced skills.</p>
                    <!--                    <button type="button" class="btn btn-secondary  btn-lg">Scroll down to see all projects </button>-->
                    <h3 style="padding-left: 5px;">Click her to see all projects</h3>
                    <div style="padding-left: 150px">
                        <a href="#project" style="text-decoration: none">
                            <img src="../images/scroll%20(3).png" width="50px" alt="">
                            <img src="../images/scroll%20(3).png" width="50px" alt="">
                        </a>
                    </div>
                </div>
                <div class="right-box">
                    <img src="../images/Applied-Art-Careers.png" width="500" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<?php }?>

<?php
if ($_GET['project_name'] == 'Interior Design')
{
    ?>
    <div class="landing">
        <div class="container">
            <div class="title">
                <!--            <p style="letter-spacing: 3px">Gallery</p>-->
                <img id="project" style="padding-top: 50px" src="../images/logo%20(1).png" width="100px">
            </div>
            <div class="box">
                <!--        --><?php //if (isset($_SESSION['approve']) && $_SESSION['approve']==$_GET['id']){
                //
                //        ?>
                <?php
                $projects = mysqli_query($mysqli, "SELECT * FROM publish_project WHERE `project_name`='Interior Design'");
                ?>
                <?php
                foreach ($projects as $project){
                    ?>
                    <div class="content">
                        <div class="left-box">

                            <div class="card" style="width: 20rem;">
                                <img src="../images/<?php echo $project['image'];?>" width="200" class="card-img-top" alt="project">
                                <div class="card-body">
                                    <h5 style="font-weight: bold;color: #466262" class="card-title"><?php echo $project['project_name']."  : "; ?></h5>
                                    <p class="card-text"><?php echo $project['description']; ?></p>
                                    <h5 style="font-weight: bold;color: #466262"><?php echo "Dr: ".$project['dr_name']; ?></h5>

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
<?php }?>

<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<?php
if ($_GET['project_name'] == 'advertising')
{
    ?>
    <div class="honey" style="margin-bottom: 80px">
        <div class="container">
            <div class="box">
                <div class="content">
                    <div class="left-box">
                        <div class="number">Applied Art</div>
                        <h1>Careers in Advertising</h1>
                        <p>Careers in the applied arts are incredibly satisfying jobs that require creativity, good problem-solving skills, and attention to detail. They also offer opportunities for advancement in many careers due to their need for advanced skills.</p>
                        <!--                    <button type="button" class="btn btn-secondary  btn-lg">Scroll down to see all projects </button>-->
                        <h3 style="padding-left: 5px;">Click her to see all projects</h3>
                        <div style="padding-left: 150px">
                            <a href="#project" style="text-decoration: none">
                                <img src="../images/scroll%20(3).png" width="50px" alt="">
                                <img src="../images/scroll%20(3).png" width="50px" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="right-box">
                        <img src="../images/ad.jpg" width="500" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<?php
if ($_GET['project_name'] == 'advertising')
{
    ?>
    <div class="landing">
        <div class="container">
            <div class="title">
                <!--            <p style="letter-spacing: 3px">Gallery</p>-->
                <img id="project" style="padding-top: 50px" src="../images/logo%20(1).png" width="100px">
            </div>
            <div class="box">
                <!--        --><?php //if (isset($_SESSION['approve']) && $_SESSION['approve']==$_GET['id']){
                //
                //        ?>
                <?php
                $projects = mysqli_query($mysqli, "SELECT * FROM publish_project WHERE `project_name`='advertising'");
                ?>
                <?php
                foreach ($projects as $project){
                    ?>
                    <div class="content">
                        <div class="left-box">

                            <div class="card" style="width: 20rem;">
                                <img src="../images/<?php echo $project['image'];?>" width="200" class="card-img-top" alt="project">
                                <div class="card-body">
                                    <h5 style="font-weight: bold;color: #466262" class="card-title"><?php echo $project['project_name']."  : "; ?></h5>
                                    <p class="card-text"><?php echo $project['description']; ?></p>
                                    <h5 style="font-weight: bold;color: #466262"><?php echo "Dr: ".$project['dr_name']; ?></h5>

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
<?php }?>
<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--//Cinema-->
<?php
if ($_GET['project_name'] == 'Cinema and photography')
{
    ?>
    <div class="honey" style="margin-bottom: 80px">
        <div class="container">
            <div class="box">
                <div class="content">
                    <div class="left-box">
                        <div class="number">Applied Art</div>
                        <h1>Careers In Cinema And Photography</h1>
                        <p>Careers in the applied arts are incredibly satisfying jobs that require creativity, good problem-solving skills, and attention to detail. They also offer opportunities for advancement in many careers due to their need for advanced skills.</p>
                        <!--                    <button type="button" class="btn btn-secondary  btn-lg">Scroll down to see all projects </button>-->
                        <h3 style="padding-left: 5px;">Click her to see all projects</h3>
                        <div style="padding-left: 150px">
                            <a href="#project" style="text-decoration: none">
                                <img src="../images/scroll%20(3).png" width="50px" alt="">
                                <img src="../images/scroll%20(3).png" width="50px" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="right-box">
                        <img src="../images/film.png" width="500" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<?php
if ($_GET['project_name'] == 'Cinema and photography')
{


?>
<div class="landing">
    <div class="container">
        <div class="title">
            <!--            <p style="letter-spacing: 3px">Gallery</p>-->
            <img id="project" style="padding-top: 50px" src="../images/logo%20(1).png" width="100px">
        </div>
        <div class="box">
            <!--        --><?php //if (isset($_SESSION['approve']) && $_SESSION['approve']==$_GET['id']){
            //
            //        ?>
            <?php
            $projects = mysqli_query($mysqli, "SELECT * FROM publish_project WHERE `project_name`='Cinema and photography'");
            ?>
            <?php
            foreach ($projects as $project){
                ?>
                <div class="content">
                    <div class="left-box">

                        <div class="card" style="width: 20rem;">
                            <img src="../images/<?php echo $project['image'];?>" width="200" class="card-img-top" alt="project">
                            <div class="card-body">
                                <h5 style="font-weight: bold;color: #466262" class="card-title"><?php echo $project['project_name']."  : "; ?></h5>
                                <p class="card-text"><?php echo $project['description']; ?></p>
                                <h5 style="font-weight: bold;color: #466262"><?php echo "Dr: ".$project['dr_name']; ?></h5>

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
<?php }?>
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<!--//Products Design -->
<?php
if ($_GET['project_name'] == 'Products design')
{
    ?>
    <div class="honey" style="margin-bottom: 80px">
        <div class="container">
            <div class="box">
                <div class="content">
                    <div class="left-box">
                        <div class="number">Applied Art</div>
                        <h1>Careers In Products Design</h1>
                        <p>Careers in the applied arts are incredibly satisfying jobs that require creativity, good problem-solving skills, and attention to detail. They also offer opportunities for advancement in many careers due to their need for advanced skills.</p>
                        <!--                    <button type="button" class="btn btn-secondary  btn-lg">Scroll down to see all projects </button>-->
                        <h3 style="padding-left: 5px;">Click her to see all projects</h3>
                        <div style="padding-left: 150px">
                            <a href="#project" style="text-decoration: none">
                                <img src="../images/scroll%20(3).png" width="50px" alt="">
                                <img src="../images/scroll%20(3).png" width="50px" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="right-box">
                        <img src="../images/product.jpg" width="500" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<?php
if ($_GET['project_name'] == 'Products design')
{


    ?>
    <div class="landing">
        <div class="container">
            <div class="title">
                <!--            <p style="letter-spacing: 3px">Gallery</p>-->
                <img id="project" style="padding-top: 50px" src="../images/logo%20(1).png" width="100px">
            </div>
            <div class="box">
                <!--        --><?php //if (isset($_SESSION['approve']) && $_SESSION['approve']==$_GET['id']){
                //
                //        ?>
                <?php
                $projects = mysqli_query($mysqli, "SELECT * FROM publish_project WHERE `project_name`='Products design'");
                ?>
                <?php
                foreach ($projects as $project){
                    ?>
                    <div class="content">
                        <div class="left-box">

                            <div class="card" style="width: 20rem;">
                                <img src="../images/<?php echo $project['image'];?>" width="200" class="card-img-top" alt="project">
                                <div class="card-body">
                                    <h5 style="font-weight: bold;color: #466262" class="card-title"><?php echo $project['project_name']."  : "; ?></h5>
                                    <p class="card-text"><?php echo $project['description']; ?></p>
                                    <h5 style="font-weight: bold;color: #466262"><?php echo "Dr: ".$project['dr_name']; ?></h5>

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
<?php }?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

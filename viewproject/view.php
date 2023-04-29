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
    <!--css file-->
    <link rel="stylesheet" href="../CSS/view.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>معرض - كلية الفنون التطبيقية</title>
</head>

<body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script><?php require_once "../".navbar;?>
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
                <img id="project" style="padding-top: 50px" src="../images/logo3.png" width="100px">

            </div>
            <div class="box">

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

<!--advertising-->
<?php
if ($_GET['project_name'] == 'advertising')
{
    ?>
    <div class="honey" style="margin-bottom: 80px">
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
                <img id="project" style="padding-top: 50px" src="../images/logo3.png" width="100px">
            </div>
            <div class="box">

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
            <img id="project" style="padding-top: 50px" src="../images/logo3.png" width="100px">
        </div>
        <div class="box">

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
                        <img src="../images/pro2.png" width="500" alt="">
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
                <img id="project" style="padding-top: 50px" src="../images/logo%20(1).png" width="100px">
                <img id="project" style="padding-top: 50px" src="../images/logo3.png" width="100px">
            </div>
            <div class="box">
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

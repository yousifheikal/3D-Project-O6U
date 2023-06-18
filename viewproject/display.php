<?php
require_once '../config.php';
require_once '../'.link;
require_once  "../".functions."Validate.php";
$mysqli = require_once "../".functions.'db.php';

if(isset($_SESSION['email_admin']) || isset($_SESSION['std_email']) || isset($_SESSION['dr_email']) || isset($_SESSION['visitor']))
{
    require_once "../" . navbar;
}
else
{
    header("location: ".login);
}
?>

<?php
$id = $_GET['id'];
$projects = mysqli_query($mysqli, "SELECT * FROM `publish_project` WHERE id='$id'");
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <title>Title</title>
    </head>
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            /*font-family: 'Cairo', sans-serif;*/
            font-family: 'Open Sans', sans-serif;
            /*font-family: 'Poppins', sans-serif;*/
        }



        .honey {
            margin-top: -50px;
            padding-top: 70px;
            padding-bottom: 20px;
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
            flex-basis: 60%;
        }

        .honey .right-box {
            flex-basis: 40%;
            padding-left: 100px;
        }
    </style>
    <body>
<?php
foreach ($projects as $project){
    ?>
        <?php if ($project['project_name'] == 'Products Design' || $project['project_name'] == 'Interior Design') {?>
    <div class="container">
        <h3 style="letter-spacing: 1px;font-style: italic;font-family: Cairo,serif;font-size: 30px;font-weight: bolder"><?php echo $project['project_name']?></h3>
        <hr style="width: 230px;">
    </div>
    <?php }?>

    <?php if ($project['project_name'] == 'Cinema And Photography') {?>
        <div class="container">
            <h3 style="letter-spacing: 1px;font-style: italic;font-family: Cairo,serif;font-size: 30px;font-weight: bolder"><?php echo $project['project_name']?></h3>
            <hr style="width: 350px;">
        </div>
    <?php }?>

    <?php if ($project['project_name'] == 'Advertising') {?>
        <div class="container">
            <h3 style="letter-spacing: 1px;font-style: italic;font-family: Cairo,serif;font-size: 30px;font-weight: bolder"><?php echo $project['project_name']?></h3>
            <hr style="width: 170px;">
        </div>
    <?php }?>
    <div class="honey">
        <div class="container">
            <div class="box">
                <div class="content">
                    <div class="left-box">
                        <img style="border-radius: 3%" src="../images/<?php echo $project['image'];?>" width="150px" class="card-img-top" alt="project">
                        <p style="letter-spacing: 1px;opacity: 0.6;margin-left: 13px;font-family: Cairo,serif"><?php echo $project['time'];?></p>

                    </div>
                    <div class="right-box">
                        <img style="border-radius: 50%;padding-bottom: 10px" src="../images/<?php echo $project['image'];?>" width="50px" class="card-img-top" alt="project">
                        <img style="border-radius: 50%;width: 100px" src="../images/<?php echo $project['image'];?>" class="card-img-top" alt="project">
                        <img style="border-radius: 50%;width: 100px" src="../images/<?php echo $project['image'];?>" class="card-img-top" alt="project">
                        <br>
                        <p style="letter-spacing: 1px;opacity: 0.9;font-family: Cairo,serif"><?php echo $project['description'];?>....</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="honey" style="margin-bottom: 50px">
        <div class="container">
            <div class="box">
                <div class="content">
                    <div class="left-box">
                        <h4 style="letter-spacing: 1px;opacity: 0.9;font-family: Cairo,serif">
                            This work was done by the student : <?php echo ucfirst($project['std_name']);?>
                           with the <br> help of Dr : <?php echo ucfirst($project['dr_name']);?>
                            ,Interior Design are an integral part of shaping the physical world in which we live.We often see them as a bridge between the people who dream
                            ,i hope you like this project..
                        </h4>

                    </div>
                    <div class="right-box">
                        <img style="border-radius: 3%;padding-bottom: 10px" src="../images/<?php echo $project['image'];?>" width="80px" class="card-img-top" alt="project">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="text-align: center">
        <?php $next = $project['id'] + 1 ;$back = $project['id'] - 1?>
        <a style="" href="http://localhost/jo/3d/viewproject/display.php?id=<?php echo $back?>">
            <img src="../images/back.png" width="50px" alt=""></a>

        <a href="http://localhost/jo/3d/viewproject/display.php?id=<?php echo $next?>">
            <img src="../images/next.png" width="50px" alt=""></a>
    </div>
    <?php include '../footer/footer.php'?>
    </body>
    </html>

<?php }?>
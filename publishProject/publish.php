<?php
require_once '../config.php';
require_once '../'.link;
require_once  "../".functions."Validate.php";
$mysqli = require_once "../".functions.'db.php';

if(isset($_SESSION['dr_email']))
{
    require_once "../" . navbar;
}
else
{
    header("location: ".login);
}
?>

<?php

if (isset($_GET['id']) && isset($_GET['delete']))
{
    $id = $_GET['id'];
    $delete = mysqli_query($mysqli, "DELETE FROM `uplode_project` WHERE `id`='$id'");
}

if (isset($_GET['id']) && isset($_GET['project_name']))
{
    $id = $_GET['id'];
    $project_name =$_GET['project_name'];
    $description =$_GET['description'];
    $dr_name = $_GET['dr_name'];
    $image =$_GET['image'];
    $std_name = $_GET['std_name'];
    $publish = mysqli_query($mysqli, "
    INSERT INTO `publish_project`(`std_name`, `image`, `project_name`, `description`, `dr_name`) VALUES
                                 ('$std_name', '$image','$project_name','$description','$dr_name')");

    $delete = mysqli_query($mysqli, "DELETE FROM `uplode_project` WHERE `id`='$id'");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>عرض جميع المشاريع - كلية الفنون التطبيقية</title>
</head>
<body>
<h1>Show All Data</h1>
<table class="table table-dark table-striped">
    <thead>
    <tr>
        <th scope="col">#ID</th>
        <th scope="col">Std_Name</th>
        <th scope="col">Project-Name</th>
        <th scope="col">Description</th>
        <th scope="col">Dr-Name</th>
        <th scope="col">Images</th>
        <th scope="col">Pro</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $projects = mysqli_query($mysqli, "SELECT * FROM uplode_project");
    ?>
    <?php
    foreach ($projects as $project)
    {
    ?>
    <tr>
        <td><?php echo $project['id'] ?></td>
        <td><?php echo $project['std_name'] ?></td>
        <td><?php echo $project['project_name']; ?></td>
        <td><?php echo $project['description']; ?></td>
        <td><?php echo $project['dr_name']; ?></td>
        <td><img src="../images/<?php echo $project['image']; ?>" width="200" alt=""></td>
        <td>
            <form action="" method="get">
            <a class="btn btn-info" href="publish.php<?php echo "?id=".$project['id']."&project_name=".$project['project_name']
            ."&dr_name=".$project['dr_name']."&description=".$project['description']."&image=".$project['image']."&std_name=".$project['std_name']?>" role="button">Publish</a> <br><br>
            <a class="btn btn-danger" href="publish.php<?php echo "?id=".$project['id']."&delete=delete"?>"
               role="button">Delete</a>
            </form>
        </td>
        <?php }?>
    </tbody>
</table>
</body>
</html>
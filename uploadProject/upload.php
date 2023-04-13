<?php
require_once '../config.php';
require_once '../'.link;
require_once  "../".functions."Validate.php";
$mysqli = require_once "../".functions.'db.php';

if(isset($_SESSION['std_email']))
{
    require_once "../" . navbar;
}
else
{
    header("location: ".login);
}
?>


<?php
if (isset($_POST['submit']))
{
    $specialization = filter_input(INPUT_POST, 'select',FILTER_SANITIZE_SPECIAL_CHARS);
    $description = filter_input(INPUT_POST, 'description',FILTER_SANITIZE_SPECIAL_CHARS);
    $dr_name = filter_input(INPUT_POST, 'dr_name',FILTER_SANITIZE_SPECIAL_CHARS);
    $std_name = $_SESSION['std_name'];
    if ($_FILES["image"]['error']===4)
    {
//        echo
//        "<script>alert('image Does Not Exist');</script>";
        $error_msg = "image Does Not Exist";
    }
    else
    {
//        $fileName = filter_input(INPUT_POST, 'lastName',FILTER_SANITIZE_);
        $fileName = $_FILES["image"]["name"];
        $fileSize = $_FILES["image"]["size"];
        $tmpName = $_FILES["image"]["tmp_name"];
        $ValidateImageExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $fileName);
        $imageExtension = strtolower(end($imageExtension));
        if (!in_array($imageExtension, $ValidateImageExtension))
        {
//            echo
//            "<script>alert('Invalid Image Extension');</script>";
            $error_msg = "Invalid Image Extension";
        }
        elseif ($fileSize > 100000000)
        {
//            echo
//            "<script>alert('Image Size is too large');</script>";
            $error_msg = "Image Size is too large";
        }
        else {
            $newImageName = uniqid();
            $newImageName .= "." . $imageExtension;
            move_uploaded_file($tmpName, '../images/' . $newImageName);
            $sql = "INSERT INTO uplode_project (std_name, image, project_name, description, dr_name) VALUES (?, ? , ? , ? , ?)";
            $stmt = $mysqli->stmt_init();
            if (!$stmt->prepare($sql)) {
                die("SQL error : " . $mysqli->error);
            }
            $stmt->bind_param('sssss', $std_name, $newImageName, $specialization, $description, $dr_name);
            if ($stmt->execute()) {
//                 echo
//                "<script> alert('Successfully Added'); document.location.href = 'data.php'; </script>";
                $success_msg = "Project Uploaded";

            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Upload image file</title>
</head>
<style>
    body {
        background-image: url("../images/o6u2.jpg");
        background-size: cover;
        background-position: center;
    }

    .form-group label {
        margin-right: 50px;
        padding-bottom: 10px;
    }

    .form-group label input{
        margin-right: 300px;
    }
</style>
<body>
<div class="col-sm-6 offset-sm-3 p-3 bg-light bg-opacity-50 border border-light ">

    <?php if(isset($success_msg)){ ?>
    <div class="">
        <h3 class="alert alert-info text-center"> <?php echo $success_msg; ?> <?php }?> </h3>

    <?php if(isset($error_msg)){ ?>
    <div class="">
        <h3 class="alert alert-danger text-center"> <?php echo $error_msg; ?> <?php }?> </h3>

<h3 class="text-center p-3 bg-warning text-white">Add New Project</h3>
<form class="" action="" method="post" autocomplete="off" enctype="multipart/form-data">

    <label for="image">Image: </label><br>
    <input class="form-control" type="file" name="image" id="image" accept=".jpg, .jpeg, .png" required value=""><br>

    <label for="exampleInputPassword1" class="form-label">specialization</label>
    <select class="form-select" aria-label="Default select example" name="select">
        <option value="Cinema And Photography">cinema and photography</option>
        <option value="Products Design">products design</option>
        <option value="Interior Design">interior design</option>
        <option value="Advertising">advertising</option>
    </select> <br>

<!--    <div class="mb-3">-->
<!--        <label for="exampleInputPassword1" class="form-label">Description: </label>-->
<!--        <input class="form-control" type="text" name="description" id="description" required value="" placeholder="Description">-->
<!--    </div>-->


    <label for="exampleInputPassword1" class="form-label">Description: </label>
    <div class="form-floating">
        <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Description</label>
    </div><br>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Dr Name: </label>
        <input class="form-control" type="text" name="dr_name" id="dr_name" required value="" placeholder="dr_name">
    </div><br>


    <br>
    <button type="submit" name="submit" class="btn btn-warning text-white">Insert</button>
</form>
</div>
<!--<a href="data.php">All Data</a>-->
</body>
</html>
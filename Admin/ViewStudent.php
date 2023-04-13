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

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Dashboard | Home Page</title>
</head>
<style>
    body {
        /*background-image: url("../../assets/images/medical.jpeg ");*/
        /*background-size: cover;*/
        /*background-color: #00f0ff;*/
        /*margin-top: 100px;*/
    }
</style>
<body>

<div class="p-5">
    <h3 class="text-center p-3 bg-info text-white">View All Students</h3>
    <table class="table table-dark table-bordered">
        <thead>
        <tr class="text-center">
            <th scope="col">#ID</th>
            <th scope="col">specialization</th>
            <th scope="col">Name</th>
            <th scope="col">E-mail</th>
<!--            <th scope="col">Password</th>-->
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            <th scope="col">Timestamp</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM student";
        $result = mysqli_query($mysqli, $sql);
        while ($student=mysqli_fetch_array($result))
        {
            ?>
            <tr>
                <td class="text-center"> <?php echo $student['std_id'];?> </td>
                <td class="text-center"> <?php echo $student['std_specialization'];?> </td>
                <td class="text-center"> <?php echo $student['std_Firstname'].$student['std_Lastname'];?> </td>
                <td class="text-center"> <?php echo $student['std_email'];?> </td>
<!--                <td class="text-center"> --><?php //echo $student['std_password'];?><!-- </td>-->
                <td class="text-center"> <?php echo $student['std_phone'];?> </td>
                <td class="text-center"> <?php echo $student['std_address'];?> </td>
                <td class="text-center"> <?php echo $student['std_TimeCreated'];?> </td>

                <td class="text-center">
<!--                    <a onclick="if(!confirm('Do you want to edit this field ?'))return false;"-->
<!--                       href="--><?php ////echo BURL_ADMINS."/cities/edit.php?action=edit&id=".$student['std_id']?><!--" class="btn btn-info">Edit</a>-->

<!--                    <a onclick="if(!confirm('Do you want to delete this field ?'))return false;"-->
<!--                       href="--><?php ////echo BURL_ADMINS."/cities/delete.php?action=delete&id=".$row['city_id']?><!--" class="btn btn-danger delete" data-table="cities" data-field="city_id" data-id="--><?php //echo $row['city_id'];?><!--">Delete</a>-->
                </td>
            </tr>
        <?php }?>
        </tbody>
    </table>
</div>

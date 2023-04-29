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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>عرض جميع الزوار - كلية الفنون التطبيقية</title>
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
    <h3 class="text-center p-3 bg-info text-white">View All Visitor</h3>
    <table class="table table-dark table-bordered">
        <thead>
        <tr class="text-center">
            <th scope="col">#ID</th>
            <th scope="col">Type</th>
            <th scope="col">Time</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM visitor";
        $result = mysqli_query($mysqli, $sql);
        $count = "SELECT COUNT(*) FROM visitor";
        while ($visitor=mysqli_fetch_array($result))
        {
            ?>
            <tr>
                <td class="text-center"> <?php echo $visitor['visitor_id'];?> </td>
                <td class="text-center"> <?php echo $visitor['visitor_name'];?> </td>
                <td class="text-center"> <?php echo $visitor['visitor_timestamp'];?> </td>
            </tr>
        <?php }?>
        </tbody>
    </table>
</div>

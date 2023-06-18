<?php
require_once '../config.php';
require_once '../'.link;
require_once  "../".functions."Validate.php";
$mysqli = require_once "../".functions.'db.php';

if(isset($_SESSION['email_admin']))
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
    $delete = mysqli_query($mysqli, "DELETE FROM `signup` WHERE `id`='$id'");
}

if (isset($_GET['id']) && isset($_GET['std_Firstname']))
{
    $id = $_GET['id'];
    $specialization =$_GET['std_specialization'];
    $fname =$_GET['std_Firstname'];
    $lname =$_GET['std_Lastname'];
    $email =$_GET['std_email'];
    $phone =$_GET['std_phone'];
    $address =$_GET['std_address'];
    $password =$_GET['std_password'];

    $publish = mysqli_query($mysqli, "
    INSERT INTO `student`(`std_specialization`, `std_Firstname`, `std_Lastname`, `std_email`, `std_password`, `std_phone`, `std_address`) VALUES
                                 ('$specialization', '$fname','$lname','$email','$password' ,'$phone', '$address')");

    $delete = mysqli_query($mysqli, "DELETE FROM `signup` WHERE `id`='$id'");
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
<h1>Accept Students</h1>
<table class="table table-dark table-striped">
    <thead>
    <tr>
        <th scope="col">#ID</th>
        <th scope="col">Specialization</th>
        <th scope="col">Firstname</th>
        <th scope="col">Lastname</th>
        <th scope="col">E-mail</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
        <th scope="col">TimeCreated</th>
        <th scope="col">Pro</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $students = mysqli_query($mysqli, "SELECT * FROM signup");
    ?>
    <?php
    foreach ($students as $student)
    {
    ?>
    <tr>
        <td><?php echo $student['id'] ?></td>
        <td><?php echo $student['std_specialization'] ?></td>
        <td><?php echo $student['std_Firstname']; ?></td>
        <td><?php echo $student['std_Lastname']; ?></td>
        <td><?php echo $student['std_email']; ?></td>
        <td><?php echo $student['std_phone']; ?></td>
        <td><?php echo $student['std_address']; ?></td>
        <td><?php echo $student['std_TimeCreated']; ?></td>
        <td>
            <form action="" method="get">
                <a class="btn btn-info" href="ViewSignup.php<?php echo "?id=".$student['id']."&std_specialization=".$student['std_specialization']
                    ."&std_Firstname=".$student['std_Firstname'].
                    "&std_Lastname=".$student['std_Lastname'].
                    "&std_email=".$student['std_email'].
                    "&std_password=".$student['std_password']."&std_phone=".
                    $student['std_phone']."&std_address=".
                    $student['std_address'] ?>"
                   onclick="if(!confirm('Do you want Add Student ?'))return false;" role="button">Accept</a> <br><br>
                <a class="btn btn-danger" href="ViewSignup.php<?php echo "?id=".$student['id']."&delete=delete"?>"
                   role="button" onclick="if(!confirm('Do you want delete Student ?'))return false;">Decline</a>
            </form>
        </td>
        <?php }?>
    </tbody>
</table>
</body>
</html>
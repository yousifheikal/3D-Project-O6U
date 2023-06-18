<?php
require_once '../config.php';
require_once  "../".functions."Validate.php";
$mysqli = require_once "../".functions.'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>تسجيل الدخول - كلية الفنون التطبيقة</title>
</head>
<style>
    body {
        background-image: url("../images/o6u2.jpg");
        background-size: cover;
        background-position: center;
        /*background-color: #00f0ff;*/
        margin-top: 100px;
    }
</style>
<body>

<?php

if (isset($_POST['visitor']))
{
    $visitor = "visitor";
//    $sql = "INSERT INTO visitor SET (visitor_id)";
    $sql = "INSERT INTO visitor (visitor_name) VALUES (?)";
    $stmt = $mysqli->stmt_init();
    if (!$stmt->prepare($sql))
    {
        die("SQL error :" .$mysqli->error);
    }
    $stmt->bind_param('s',$visitor);
    if (!$stmt->execute())
    {
        die($mysqli->error. " ". $mysqli->errno);
    }
        $_SESSION['visitor'] = $visitor;
    header("location: ".homepage."?=visitor");
}

if (isset($_POST['signup']))
{
    header("location: ".signUp);
}


if (isset($_POST['submit']))
{
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $_SESSION['email_old'] = $email;
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

    if (checkEmpty($email) && checkEmpty($password))
    {
        if(ValidateEmail($email))
        {
            // Srudent
            $sql = sprintf("SELECT * FROM student
                                       WHERE std_email='%s'",
                $mysqli->real_escape_string($_POST["email"]));
            $result = $mysqli->query($sql);
            $student = $result->fetch_assoc();

            // Doctor
            $sql2 = sprintf("SELECT * FROM doctor
                                       WHERE dr_email='%s'",
                $mysqli->real_escape_string($_POST["email"]));
            $result = $mysqli->query($sql2);
            $doctor = $result->fetch_assoc();

            // Admins
            $sql3 = sprintf("SELECT * FROM admins
                                       WHERE email='%s'",
                $mysqli->real_escape_string($_POST["email"]));
            $result = $mysqli->query($sql3);
            $admin = $result->fetch_assoc();
            if ($admin) {
                if (password_verify($password, $admin['password'])) {
                    $_SESSION['email_admin'] = $admin['email'];
                    $_SESSION['id_admin'] = $admin['id'];
                    sleep(1.2);
                    header("location: ".homepage."?id=".$_SESSION['id_admin']."&admin");
                } else {
                    $not_exist_email = 'Failed E-mail or password please try again ';
                }
            } else {
                $not_exist_email = 'Sorry this E-mail not exists ';
            }


            if ($doctor) {
                if (password_verify($password, $doctor['dr_password'])) {
                    $_SESSION['dr_email'] = $doctor['dr_email'];
                    $_SESSION['dr_name'] = $doctor['dr_Firstname'];
                    $_SESSION['dr_id'] = $doctor['dr_id'];
                    sleep(1.2);
                    header("location: ".homepage."?id=".$_SESSION['dr_id']."&doctor=".$_SESSION['dr_name']);
                } else {
                    $not_exist_email = 'Failed E-mail or password please try again ';
                }
            } else {
                $not_exist_email = 'Sorry this E-mail not exists ';
            }

            if ($student) {
                if (password_verify($password, $student['std_password'])) {
                    $_SESSION['std_id'] = $student['std_id'];
                    $_SESSION['std_email'] = $student['std_email'];
                    $_SESSION['std_Firstname'] = $student['std_Firstname'];
                    $_SESSION['std_Lastname'] = $student['std_Lastname'];
                    $_SESSION['std_name'] = $student['std_Firstname'].$student['std_Lastname'];
                    sleep(1.2);
                    header("location: ".homepage."?id=".$_SESSION['std_id']."&student=".$_SESSION['std_name']);
                } else {
                    $not_exist_email = 'Failed E-mail or password please try again ';
                }
            } else {
                $not_exist_email = 'Sorry this E-mail not exists ';
            }

        }
    }
    else
    {
        $error_msg = "Please fill all fields";
    }
}
?>

<div class="container">
<div class="card" >

<!--        <div class= 'login' style="text-align: center;margin-bottom: 15px;color: #607d8b">-->
<!--            <h2>Login</h2>-->
<!--        </div>-->

<!--if data not inserted in Database-->
<?php if(isset($error_msg)){ ?>
<div class="">
    <h3 class="alert alert-danger text-center"> <?php echo $error_msg; ?> <?php }?> </h3>

    <?php if(isset($not_exist_email)){ ?>
    <div class="">
    <h3 class="alert alert-danger text-center"> <?php echo $not_exist_email; ?> <?php }?>  </h3>

    <div class= 'img_container'>
        <img src="<?php echo "../".images?>logo2.jpg" alt="" />
    </div>
    <form method="post">

        <label>
            <input type="email" name="email" placeholder="E-mail">
        </label>
        <label>
            <input type="password" name="password" placeholder="password">

        </label>
        <input class="register_button" name="submit" type="submit" value="Log in" style="border-radius: 50px;">
<!--        <input class="register_button" name="visitor" type="submit" value="Visitor" style="background: #212529;border-radius: 50px;">-->
        <input class="register_button" name="signup" type="submit" value="Sign up" style="width: 120px;border: none;border-radius: 50px;padding: 10px 20px; margin-right: -2px;background: #212529">
        <input class="register_button" name="visitor" type="submit" value="Visitor" style="width: 120px;border: none;border-radius: 50px;padding: 10px 20px ;margin-right: -35px;background: #212529">
    </form>
</div>
</body>
</html>



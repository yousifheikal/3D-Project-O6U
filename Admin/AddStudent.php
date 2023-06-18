<?php
require_once '../config.php';
require_once '../'.link;
require_once  "../".functions."Validate.php";
$mysqli = require_once "../".functions.'db.php';

//if(isset($_SESSION['email_admin']))
//{
////    require_once "../" . navbar;
//
//}
//else
//{
//    header("location: ".login);
//}
?>


<?php

if(isset($_POST['submit']))
 {
    $specialization = filter_input(INPUT_POST, 'select',FILTER_SANITIZE_SPECIAL_CHARS);
    $Firstname = filter_input(INPUT_POST, 'firstName',FILTER_SANITIZE_SPECIAL_CHARS);
    $Lastname = filter_input(INPUT_POST, 'lastName',FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email',FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'password',FILTER_SANITIZE_SPECIAL_CHARS);
    $phone = filter_input(INPUT_POST, 'phone',FILTER_SANITIZE_SPECIAL_CHARS);
    $address = filter_input(INPUT_POST, 'address',FILTER_SANITIZE_SPECIAL_CHARS);

      $new_pass = password_hash($password, PASSWORD_DEFAULT);
    if(checkEmpty($Firstname) && checkEmpty($Lastname) && checkEmpty($email) && checkEmpty($password))
    {
        $sql = "INSERT INTO signup (std_specialization, std_Firstname, std_Lastname, std_email, std_password, std_phone, std_address)
                VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $mysqli->stmt_init();
        if(!$stmt->prepare($sql)){
            die("SQL error : ".$mysqli->error);
        }
        $stmt->bind_param('sssssss',$specialization,  $Firstname, $Lastname, $email, $new_pass, $phone, $address);
        if($stmt->execute()){
            $success_msg = "Data Inserted in DB ";
        }
    }
    else
    {
        $error_msg = "Sorry you have a problem please try again ";
    }
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
    <title>اضافة طالب - كلية الفنون التطبيقية</title>
</head>
<style>
    body {
        background-image: url("../images/o6u2.jpg");
        background-size: cover;
        background-position: center;
        /*!*background-color: #00f0ff;*!*/
        /*margin-top: 50px;*/
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
    <?php if(isset($error_msg)){ ?>
    <div class="">
        <h3 class="alert alert-danger text-center"> <?php echo $error_msg; ?> <?php }?> </h3>

        <?php if(isset($success_msg)){ ?>
        <div class="">
            <h3 class="alert alert-info text-center"> <?php echo $success_msg; ?> <?php }?> </h3>

            <h3 class="text-center p-3 bg-warning text-white">Add New Student</h3>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                <label for="exampleInputPassword1" class="form-label">specialization</label>
                <select class="form-select" aria-label="Default select example" name="select">
                    <option selected disabled>--Select--</option>
                    <option value="Cinema and photography">cinema and photography</option>
                        <option value="Products design">products design</option>
                        <option value="Interior design">interior design</option>
                        <option value="Advertising">advertising</option>
                    </select>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">First Name</label>
                        <input type="text" name="firstName" placeholder="First-Name" minlength="3" maxlength="25" class="form-control" id="exampleInputPassword1">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Last Name</label>
                        <input type="text" name="lastName" placeholder="Last-Name" minlength="3" maxlength="25" class="form-control" id="exampleInputPassword1">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">E-mail</label>
                        <input type="email" name="email" placeholder="E-mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password"  minlength="11" maxlength="50" placeholder="Password" class="form-control" id="exampleInputPassword1">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Phone</label>
                        <input type="text" name="phone" placeholder="Phone" maxlength="25" class="form-control" id="exampleInputPassword1">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Address</label>
                        <input type="text" name="address" maxlength="255" placeholder="Address" class="form-control" id="exampleInputPassword1">
                    </div>

                    <button type="submit" name="submit" class="btn btn-warning text-white">Insert</button>
            </form>

        </div>

</body>
</html>

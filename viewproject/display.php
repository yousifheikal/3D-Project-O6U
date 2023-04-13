<?php
require_once '../config.php';
require_once '../'.link;
require_once  "../".functions."Validate.php";
$mysqli = require_once "../".functions.'db.php';

if(isset($_SESSION['std_email']) || isset($_SESSION['dr_email']) || isset($_SESSION['visitor']))
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
<?php
foreach ($projects as $project){
?>

    <img src="../images/<?php echo $project['image']; ?>" width="1498" height="500" alt="">
    <p style="color: #172940">Created time : <?php echo $project['time']; ?></p>

    <h1 style="padding-top: 40px;color: #1c2936fa">Project Type : <?php echo ucfirst($project['project_name']); ?></h1>

    <h3 style="padding-bottom: 40px; letter-spacing: 1px;font-weight: 300;font-family: Raleway, sans-serif ; font-style: italic;color: #1c2936fa
"><?php echo $project['description']?>....</h3>

    <h2 style="color: #1c2936fa">Dr-Name : <?php echo $project['dr_name']; ?></h2>


    <h3 style="padding-top: 00px;color: #1c2936fa">Project Created By : <?php echo ucfirst($project['std_name']); ?></h3>
<?php }?>
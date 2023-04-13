<?php
require_once "../config.php";
$_SESSION = array();
session_destroy();
sleep(1.5);
header("location: ".login);

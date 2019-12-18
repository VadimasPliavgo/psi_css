<?php
session_start();
if ($_SESSION['valid'] != true)
    header("Location: login.php");

include ('db.php');
$id = $_GET['id'];
$owner_id = $_SESSION['id'];
$sql = "UPDATE orders SET status = 'Pristatyta' WHERE id = $id AND driver_id = $owner_id";
        $result = mysqli_query($con, $sql);
        header("Location: drivermeniu.php");


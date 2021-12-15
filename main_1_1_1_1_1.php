<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Receiver popup</title>
</head>
<?php
session_start();
if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
else $userid = "";
if (isset($_SESSION["username"])) $username = $_SESSION["username"];
else $username = "";

$conn = mysqli_connect("localhost", "root", "", "sample");

$sql = "SELECT * FROM members WHERE id LIKE '$userid';";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$save = 0;

$sql = "UPDATE members SET Energy = $save where id like '$userid'";
$result = mysqli_query($conn, $sql);
$sql = "UPDATE members SET Water = $save where id like '$userid'";
$result = mysqli_query($conn, $sql);
$sql = "UPDATE members SET Protein = $save where id like '$userid'";
$result = mysqli_query($conn, $sql);
$sql = "UPDATE members SET Fat = $save where id like '$userid'";
$result = mysqli_query($conn, $sql);
$sql = "UPDATE members SET Carbohydrate = $save where id like '$userid'";
$result = mysqli_query($conn, $sql);
$sql = "UPDATE members SET Total_sugars =  $save where id like '$userid'";
$result = mysqli_query($conn, $sql);
$sql = "UPDATE members SET Total_Dietary_Fiber = $save where id like '$userid'";
$result = mysqli_query($conn, $sql);
$sql = "UPDATE members SET Sodium = $save where id like '$userid'";
$result = mysqli_query($conn, $sql);
$sql = "UPDATE members SET Total_Ascorbic_Acid = $save where id like '$userid'";
$result = mysqli_query($conn, $sql);
$sql = "UPDATE members SET Sum_of_19_amino_acids = $save where id like '$userid'";
$result = mysqli_query($conn, $sql);
$sql = "UPDATE members SET Cholesterol = $save where id like '$userid'";
$result = mysqli_query($conn, $sql);
$sql = "UPDATE members SET Trans_fatty_acid = $save where id like '$userid'";
$result = mysqli_query($conn, $sql);
?>

<body>
    <h1>성공적으로 초기화 됬습니다.</h1>
</body>
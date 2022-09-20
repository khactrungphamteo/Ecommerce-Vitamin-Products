<?php
session_start();

$server = "mysql.cs.uky.edu";
$username = "tpng223";
$password = "Trungteo<99>";
$dbname = "tpng223";

$conn = mysqli_connect($server, $username, $password, $dbname);
$missingEmail = "<p>Please enter your username</p>";
$missingPassword = '<p><stong>Please enter your password!</strong></p>';


if (isset($_POST["submit"])) {
    if (empty($_POST['username'])) {
        echo $missingEmail;
    } else {
        $username = $_POST['username'];
    }

    if (empty($_POST['password'])) {
        echo $missingPassword;
    } else {
        $password = $_POST['password'];
    }
}

$query = "SELECT * FROM users_info WHERE Email='$username' AND Password='$password'";
$result = mysqli_query($conn, $query);
if (!$result) {
    echo "Error running the querry";
    exit;
} 

$count = mysqli_num_rows($result);

if ($count !== 1) {
    echo "wrong username or password";
} else {
    echo "successfully logged in!!";
}
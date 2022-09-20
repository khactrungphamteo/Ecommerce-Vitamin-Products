<?php
session_start();
$server = "mysql.cs.uky.edu";
$username = "tpng223";
$password = "Trungteo<99>";
$dbname = "tpng223";

$conn = mysqli_connect($server, $username, $password, $dbname);

$missingFirstName = "<p>Please enter a first name!</p>";
$missingLastName = "<p>Please enter a last name!</p>";
$missingPhoneNum = "<p>Please enter a phone number!</p>";
$missingEmail = "<p>Please enter an email!</p>";
$missingPassword = "<p>Please enter a password</p>";
$missingPassword2 = "<p>Please reenter password</p>";
$differentPassword = "<p>Password does not match</p>";


if (isset($_POST["submit"])) {
    if (!empty($_POST['firstname'])) {
        $FirstName = $_POST['firstname'];
    }
    else {
        echo $missingFirstName;
    }

    if (!empty($_POST['lastname'])) {
        $LastName = $_POST['lastname'];
    }
    else {
        echo $missingLastName;
    }

    if (!empty($_POST['phonenumber'])) {
        $Phonenumber = $_POST['phonenumber'];
    }
    else {
        echo $missingPhoneNum;
    }

    if (!empty($_POST['email'])) {
        $Email = $_POST['email'];
    }
    else {
        echo $missingEmail;
    }

    if (!empty($_POST['password-signup-1'])) {
        $Password = $_POST['password-signup-1'];
        if (empty($_POST['password-signup-2'])) {
            echo $missingPassword2;
        } else {
            $Password2 = $_POST['password-signup-2'];
            if ($Password2 != $Password2) {
                echo $differentPassword;
                exit;
            }
        }
    }
    else {
        echo $missingPassword;
    }
}

$querry = "INSERT INTO users_info VALUES ('$FirstName', '$LastName', '$Phonenumber', '$Email', '$Password'























)";


$result = mysqli_query($conn, $querry);
if(!$result){
    //echo '<div class="alert alert-danger">There was an error inserting the users details in the database!</div>'; 
    //exit;
}
else {
    echo 'form is submitted!!';
}

?>
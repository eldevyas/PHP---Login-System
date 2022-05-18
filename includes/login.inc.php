<?php

if(isset($_POST['SUBMIT']))
{
    // Grabbing the data from the POST request.
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Instantiate LoginController class.
    include "./../classes/database.classes.php";
    include "./../classes/login.classes.php";
    include "./../classes/login.contr.classes.php";

    $Login = new LoginController($username, $password);

    // Running Error Handlers and User Login

    $Login->LoginUser();


    // Going to back to front page
    header("location: ./../index.php?error=none");
}
else {
    echo "Login Failed!";
}
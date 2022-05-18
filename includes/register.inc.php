<?php

if(isset($_POST['SUBMIT']))
{
    // Grabbing the data from the POST request.
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordRepeat = $_POST['passwordRepeat'];

    // Instantiate RegisterCont class.
    include "./../classes/database.classes.php";
    include "./../classes/register.classes.php";
    include "./../classes/register.contr.classes.php";

    $Register = new RegisterController($username, $email, $password, $passwordRepeat);

    // Running Error Handlers and User Registration

    $Register-> RegisterUser();


    // Going to back to front page
    header("location: ./../index.php?error=none");
}
<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Login System</title>
    <link rel="stylesheet" href="public/style/style.css" />
</head>

<body>
    <h1><span>PHP</span> Login System</h1>

    <?php
        if (isset($_SESSION['UserID'])) 
        {
    ?>
    <p>WELCOME BACK!</p>
    <h1><?php echo $_SESSION['UserUsername'] ?></h1>

    <?php
        }
        else
        {
    ?>

    <div class="buttons">
        <a href="./public/login.php">
            <button class="btn login">
                Login</a>
            </button>
        </a>

        <a href="./public/register.php">
            <button class="btn register">
            Register
            </button>
        </a>
    </div>
    
    <?php 
        }
    ?>

</body>

</html>
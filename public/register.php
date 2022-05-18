


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Login System</title>
    <link rel="stylesheet" href="style\style.css" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <form action="./../includes/register.inc.php" method="POST">

        <label>
            <div class="Icon">
                <span class="material-symbols-outlined">
                    <span class="material-symbols-outlined">
                        account_circle
                    </span>
                </span>
            </div>
            <input type="TEXT" name="username" placeholder="USERNAME" autocomplete="off"required/>
        </label>

        <label>
            <div class="Icon">
                <span class="material-symbols-outlined">
                    mail
                </span>
            </div>
            <input type="EMAIL" name="email" id="email" placeholder="Enter your E-mail" required/>
        </label>

        <label>
            <div class="Icon">
                <span class="material-symbols-outlined">
                    lock
                </span>
            </div>
            <input type="PASSWORD" name="password" id="password" placeholder="Enter your Password" required/>
        </label>

        <label>
            <div class="Icon">
                <span class="material-symbols-outlined">
                    lock
                </span>
            </div>
            <input type="PASSWORD" name="passwordRepeat" id="password" placeholder="Confirm your Password" required/>
        </label>

        <button type="submit" name="SUBMIT" class="btn register FormControl">REGISTER</button>

        <p>
            Already have an account?
            <a href="./login.php">Login</a>
        </p>
    </form>
</body>
</html>



<?php

class Login extends DatabaseHandler {

    protected function getUser($username, $password) {
        $statement = $this->connect()->prepare('SELECT user_password FROM users WHERE user_username = ? OR user_email = ?;');


        if(!$statement->execute(array($username, $password))) {
            $statement = null;
            header("location: ./../index.php?error=SecondStatementFailed");
            exit();
        }

        if($statement->rowCount() == 0) {
            $statement = null;
            header("location: ./../index.php?error=userNotFound");
            exit();
        }

        $pwdHashed = $statement->fetchAll(PDO::FETCH_ASSOC);
        $checkPassword = password_verify($password, $pwdHashed[0]["user_password"]);

        if($checkPassword == false) {
            $statement = null;
            header("location: ./../index.php?error=wrongPassword");
            exit();
        }
        elseif($checkPassword == true) {
            $statement = $this->connect()->prepare('SELECT * FROM users WHERE user_username = ? OR user_email = ? AND user_password = ?;');

            
            if(!$statement->execute(array($username, $username, $password))) {
                $statement = null;
                header("location: ./../index.php?error=StatementFailed");
                exit();
            }

            if($statement->rowCount() == 0) {
                $statement = null;
                header("location: ./../index.php?error=userNotFound");
                exit();
            }

            $user = $statement->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["UserID"] = $user[0]["user_id"];
            $_SESSION["UserUsername"] = $user[0]["user_username"];

        }

        $statement = null;
    }



}
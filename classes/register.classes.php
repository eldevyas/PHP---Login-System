<?php

class Register extends DatabaseHandler {

    protected function setUser($username, $password, $email) {
        $statement = $this->connect()->prepare('INSERT INTO users (user_username, user_password, user_email) VALUES (?, ?, ?);');

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        if(!$statement->execute(array($username, $hashedPassword, $email))) {
            $statement = null;
            header("location: ./../index.php?error=SecondStatementFailed");
            exit();
        }

        $statement = null;

    }

    protected function checkUser($username, $email) {
        $statement = $this->connect()->prepare('SELECT user_username FROM users WHERE user_username = ? OR user_email = ?;');

        if(!$statement->execute(array($username, $email))) {
            $statement = null;
            header("location: ./../index.php?error=StatementFailed");
            exit();
        }

        $resultCheck = true;
        if($statement->rowCount() > 0) {
            $resultCheck = false;
        }
        else {
            $resultCheck = true;
        }

        return $resultCheck;
    }


}
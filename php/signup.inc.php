<?php
if (isset($_POST['signup-submit'])){

    require 'dbh.inc.php';

    $username = $_POST['newUsername'];
    $email = $_POST['newEmail'];
    $password = $_POST['newPassword'];
    /*$passwordRepeat = $_POST['newUsername'];*/

    if (empty($username)|| empty($email) || empty($password)){
        header ("Location: ../loginpage.php?error=emptyfield&uid".$username."&mail=".$email);
    }
}


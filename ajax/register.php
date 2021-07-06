<?php
    $error;
    $login = $_POST['login'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $repass = $_POST['repass'];
    $mysqli = new mysqli("localhost", "drakon8287_dc", "qPz8am91a!", "drakon8287_dc");
    $mysqli->query("SET NAMES 'utf8'");
    $db = $mysqli->query("SELECT * FROM `users`");
    while(($row = $db->fetch_assoc()) != false) {
            if ($row["login"] == $login || $row["email"] == $email){
                echo $error;
                exit();
            }
    }
    $num_random = mt_rand(2000, 5000);
    session_start();
    $_SESSION['num_random'] = $num_random;
    $_SESSION['login'] = $login;
    $_SESSION['email'] = $email;
    $_SESSION['pass'] = $pass;
    $_SESSION['repass'] = $repass;
    $message = "Код подтверждения: $num_random";
    $subject = "Код подтверждения";
    $success = mail($email, $subject, $message);
    echo $success;
?>

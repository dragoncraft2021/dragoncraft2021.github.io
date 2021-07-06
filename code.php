<?php
    session_start();
    if (isset($_POST["send"])){
        $code = $_POST['code'];
        $error = "";
        if ((int)$code != (int)$_SESSION["num_random"]){
            $error = "Неправильный код";
        }else{
            $mysqli = new mysqli("localhost", "a0453884_root", "root", "a0453884_users_site");
            $mysqli->query("SET NAMES 'utf8'");
            $login = $_SESSION['login'];
            $email = $_SESSION['email'];
            $pass = $_SESSION['pass'];
            $repass = $_SESSION['repass'];
            $_SESSION['reg'] = 1;
            $mysqli->query("INSERT INTO `users` (`id`, `login`, `email`, `password`, `repassword`) VALUES (NULL, '$login', '$email', '$pass', '$repass')");
            header("Location: /akkaunt.php");

        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style1.css">
	<script src="js/script.js"></script>
    <title>Подтверждение вашего регистрации</title>
    <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
    m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
 
    ym(77571610, "init", {
         clickmap:true,
         trackLinks:true,
         accurateTrackBounce:true,
         webvisor:true
    });
 </script>
 <noscript><div><img src="https://mc.yandex.ru/watch/77571610" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
 <!-- /Yandex.Metrika counter -->
</head>
<body>
    <div class="dws-wrapper">
        <div class="dws-form">
            <label class="tab active" for="tab-2" title="Вкладка 2">Подтверждение вашего регистрации</label>
            <form class="tab-form active" method="post" action="vendor/signup.php">
                <div class="box-input">
                    <input class="number" id="code" name="code" type="code" required="Введите код">
                    <label for="code">Введите код</label>
                </div>
                <a type="submit" name="send" href="index.html" class="button">Отправить код</a><br>
                <span style="color: red"><?=$error?></span><br>
            </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script src="js/script1.js"></script>
</body>
</html>
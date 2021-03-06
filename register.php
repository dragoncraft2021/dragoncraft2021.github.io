<?php
    session_start();
    if(isset($_SESSION['reg'])) {
        header('Location: /index.html');
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
    <title>Форма для авторизации</title>
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
            <label class="tab active" for="tab-2" title="Вкладка 2">Регистрация</label>
            <form class="tab-form active" method="post" action="register.php">
                <div class="box-input">
                    <input class="input" id="login" name="login" type="login" required="Логин">
                    <label for="login">Введите Логин</label>
                </div>
                <div class="box-input">
                    <input class="input" id="email" name="email" type="email" required>
                    <label>Введите E-mail адрес</label>
                </div>
                <div class="box-input">
                    <input class="input" id="pass" name="pass" type="pass" required>
                    <label>Введите пароль</label>
                </div>
                <div class="box-input">
                    <input class="input" id="repass" name="repass" type="repass" required>
                    <label>Подвердите пароль</label>
                </div>
                <a id="sendMail" href="code.php" type="submit" class="button">Регистрация</a>
                <div class="recover">
                    <input type="checkbox" id="ckbox">
                    <label for="ckbox">Ознакомлен(-а) и принимаю <a href="#">условия регистрации</a></label>
                    <p>Если у вас есть аккаунт <a href="index1.php">войдите</a></p>
                </div>
            </form>
    <div id="errorMess" style="color: red; font-size: 25px"></div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/Sendregistr.js"></script>
</body>
</html>
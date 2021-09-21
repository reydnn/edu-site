<?php

require ('connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nameErr = $loginErr = $passErr =  "";

$regname = $_POST['regname'];
$reglogin = $_POST['reglogin'];
$regpas = $_POST['regpassword'];

if(empty($regname)) {
    $nameErr = "Введите Ваше имя, пожалуйста";
} elseif(!preg_match("/^[а-яйё]*$/iu",$regname)) {
        $nameErr = "Введите Ваше имя корректно";
    }
    
if(empty($reglogin)) {
    $loginErr = "Введите Вашу почту, пожалуйста";
} 
elseif(filter_var($reglogin, FILTER_VALIDATE_EMAIL) == false) {
        $loginErr = "Введите Вашу почту корректно";
    }
$queryrad = mysqli_query($link, "SELECT * FROM `users`");
while($row = mysqli_fetch_array($queryrad)) {
        $mail = $row['email'];
       if($reglogin == $mail) {
           $loginErr = "По данному email уже зарегистрирован аккаунт!";
       } 
    }


if(empty($regpas)) {
    $pasErr = "Введите Ваш будущий пароль, пожалуйста";
} elseif(!preg_match("/^[а-яА-Яa-zA-Z0-9]*$/i",$regpas)) {
        $pasErr = "Введите Ваш пароль корректно";
    }

if($nameErr == "" && $loginErr =="" && $pasErr =="" ) {

    $regqur = mysqli_query($link, "INSERT INTO `users` (`name`,`email`,`password`) VALUES (('".$regname."'), ('".$reglogin."'), ('".$regpas."'))");

mysqli_close($link);

print "<script language='Javascript' type='text/javascript'>
<!--
alert ('Вы успешно зарегистрировались! Нажмите ОК, чтобы перейти на страницу авторизации.');
function reload(){location = 'auth.php'}; 
setTimeout('reload()', 0);
-->
</script>";

}
}
?>

<html> 
    <body>
    <div class = "wrapper">
	<?php require ('header.php'); ?>
	 <div class = "content">
		<br><br><br>
		<div class = "strike">
            <span>РЕГИСТРАЦИЯ</span>
        </div>
        <br><br><br>
        <form class = 'formreg' name = 'register' action = '<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method = 'post'>
        <label class = 'regrow'>Введите Ваше имя</label><input class = 'butreg' type = 'text' name = 'regname' placeholder = 'Иван' autocomplete="off"><span class="error"><?php echo $nameErr;?></span>
			<br>
			<label class = 'regrow'>Введите Вашу почту</label><input class = 'butreg' type = 'text' name = 'reglogin' placeholder = 'ivan@mail.ru' autocomplete="off"><span class="error"><?php echo $loginErr;?></span>
			<br>
			<label class = 'regrow'>Введите пароль</label><input class = 'butreg' type = 'password' name = 'regpassword' autocomplete="off"><span class="error"><?php echo $pasErr;?></span>
			<br>
            <input class = 'butreg' type = 'submit' name = 'aceeptreg' value = "Зарегистрироваться"><br>
            </div>
	 <? require ('footer.php'); ?>
	</div>
	</body>
</html>
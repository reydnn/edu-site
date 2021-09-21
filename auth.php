<?php


require ('connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$loginErr = $pasErr =  "";


$login = $_POST['login'];
$pas = $_POST['passw'];


$query = mysqli_query($link, "SELECT * FROM `users`");
while($row = mysqli_fetch_array($query)) {
		$name = $row['name'];
		$id = $row['user_id'];
		$mail = $row['email'];
		$parol = $row['password'];

        if($login == $mail) {
			$loginErr = '';
			if($pas == $parol) {
				$pasErr = '';
				session_start();
				$_SESSION['id'] = $id; 
				$_SESSION['name'] = $name;break;
			}
			else {
				$pasErr = "Вы ввели неверный логин или пароль!";
			}
		}

		else {
			$pasErr = "Вы ввели неверный логин или пароль!";
		}
	
	}
	

if(empty($login)) {
	$loginErr = 'Введите Ваш логин, пожалуйста';
} 

if(empty($pas)) {
	$pasErr = 'Введите Ваш пароль, пожалуйста';
}

mysqli_close($link);
	
if($loginErr == '' && $pasErr == '') {
	print "<script language='Javascript' type='text/javascript'>
	<!--
	function reload(){location = 'lk.php'}; 
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
			<span>АВТОРИЗАЦИЯ</span>
		</div>
		<br><br><br>
            <form class = 'formreg' name = 'auth' action = '<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method = 'post'>
			<label class = 'regrow'>Введите Вашу почту</label><input class = 'butreg' type = 'text' name = 'login' autocomplete="off"><span class="error"><?php echo $loginErr;?></span>
			<br>
			<label class = 'regrow'>Введите пароль</label><input class = 'butreg' type = 'password' name = 'passw' autocomplete="off" ><span class="error"><?php echo $pasErr;?></span>
			<br>
			<br>
			<input class = 'butreg' type = 'submit' name = 'acceptlogin' value = "Войти"><br>
			<label class = 'regrow'>У вас не аккаунта ?</label><a class ='zareg' href = 'register.php'>Зарегистрироваться</a>
        </form>
	 </div>
	 <? require ('footer.php'); ?>
	</div>
	</body>
</html>

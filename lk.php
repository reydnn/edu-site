<?  
    session_start();

	require ('connect.php');
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$nameErr = $mailErr = $pasErr = '';

		$user = $_SESSION['id'];

		$edit = $_POST['editall'];
		$close = $_POST['closeses'];

		$name = $_POST['editname'];
		$mail = $_POST['editmail'];
		$pas = $_POST['editpas'];

		if(isset($edit)) {
			if(!empty($name)) {
				if(!preg_match("/^[а-яйё]*$/iu",$name)) {
					$nameErr = 'Введите Ваше новое имя, коректно';
				}
				else {
					$query = mysqli_query($link, "UPDATE `users` SET `name` = ('".$name."') WHERE `user_id` = ('".$user."')");
					$_SESSION['name'] = $name;
				}
			}

			if(!empty($mail)) {
				if(filter_var($mail, FILTER_VALIDATE_EMAIL) == false) {
					$mailErr = 'Введите Вашу новую почту корректно';
				}

				$queryrad = mysqli_query($link, "SELECT * FROM `users`");
				while($row = mysqli_fetch_array($queryrad)) {
					$email = $row['email'];
					if($mail == $email) {
						$mailErr = "По данному email уже зарегистрирован аккаунт!";
					} 

				}
				
				$query1 = mysqli_query($link, "UPDATE `users` SET `email` = ('".$mail."') WHERE `user_id` = ('".$user."')");
 
			}
			
			if(!empty($pas)) {
				if(!preg_match("/^[а-яА-Яa-zA-Z0-9]*$/i",$pas)) {
					$pasErr = 'Введите Ваш новый пароль корректно';
				}
				else {
					$query2 = mysqli_query($link, "UPDATE `users` SET `password` = ('".$pas."') WHERE `user_id` = ('".$user."')");
				}
			}

			if($nameErr == '' && $mailErr == '' && $pasErr == '') {
				print "<script language='Javascript' type='text/javascript'>
						<!--
						alert ('Ваши данные успешно изменкены! Вы будете перенаправлены на страницу авторизации. Используйте новые данные, чтобы войти в личный кабинет.');
						function reload(){location = 'lk.php'}; 
						setTimeout('reload()', 0);
						-->
						</script>";
			}

		}

		if(isset($close)) {
			session_unset();
			header("Location: auth.php");
		}

		mysqli_close($link);
	}
?>


<html>
	<body>
	<div class = "wrapper">
	<?php require ('header.php'); ?>
	 <div class = "content">
	 <br><br><br>
		<div class = "strike">
			<span>ЛИЧНЫЙ КАБИНЕТ</span>
		</div>
	<br><br>
   
    <p> Добро пожаловать, <? echo $_SESSION['name']; ?> ! </p>
	
	<p> Изменить данные: </p>
    <form name = 'editall' class = 'formreg' action = '<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method = 'post'>
	<label class = 'regrow'>Изменить имя:</label><input class = 'butreg' type = 'text' name = 'editname' autocomplete="off"><span class="error"><?php echo $nameErr;?></span><br>
	<label class = 'regrow'>Измнить почту:</label><input class = 'butreg' type = 'text' name = 'editmail' autocomplete="off"><span class="error"><?php echo $mailErr;?></span><br>
	<label class = 'regrow'>Измнить пароль: </label><input class = 'butreg' type = 'password' name = 'editpas' autocomplete="off"><span class="error"><?php echo $pasErr;?></span><br>
	<br>
	<input class = 'butreg' type = 'submit' name = 'editall' value = 'Изменить'>
	<br>
    <input class = 'butreg' type = 'submit' name = 'closeses' value = 'Выход'>
    </form>
	
	 </div>
	 <? require ('footer.php'); ?>
	</div>
	</body>
</html>
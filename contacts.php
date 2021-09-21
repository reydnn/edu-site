<?
	session_start();

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$user = $_POST['usermes'];
		mail('andrey.nasayer232@gmail.com','Связь с пользователем',"Нужно связаться с $user");

		print "<script language='Javascript' type='text/javascript'>
				<!--
				alert ('Мы свяжемся с вами в течение 1 дня. Спасибо за ожидание!');
				function reload(){location = 'contacts.php'}; 
				setTimeout('reload()', 0);
				-->
				</script>";
			}
?>
<html>
	<body>
	<div class = "wrapper">
	<?php require ('header.php'); ?>
	 <div class = "content">
		<br><br><br>
		<div class = "strike">
			<span>КОНТАКТЫ</span>
		</div>
		<div class = "map"><img src = "icons\map.png" width = "600"></div>
		<div class = "conab"><b>Мы находимся:</b> Москва, Яковопостольский пер., 1/13<br><br><br>
		<b>Служба поддержки:</b>
		+7(123)456-78-90<br><br><br>
		<b>Свзяь с нами:</b>
		<form name = 'mes' action = '<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method = 'post'>
		<input type = 'text' class = 'sendtext' placeholder = 'Введите вашу почту' name = 'usermes' autocomplete="off">
		<input type = 'submit' class = 'send' value = 'Подвердить'>
		</form>
		</div>
	 </div>
	 <? require ('footer.php'); ?>
	</div>
	</body>
</html>
<?php
session_start();
if (!empty($_SESSION['id'])) {

	require('connect.php');

	$tovar= $_SESSION['idtov'];
	$user = $_SESSION['id'];
	$sum= 1;


	$query = mysqli_query($link, "SELECT * From `bag` Where `item`=('".$tovar."') and `user` = ('".$user."')");
	while($row = mysqli_fetch_array($query)) {
		$kolvo=$row['kolvo'];
	}
	if($kolvo>0){
		
		$query1 = mysqli_query($link, "UPDATE bag SET kolvo=kolvo+('".$sum."') WHERE item=('".$tovar."') and `user` = ('".$user."')");
	}
	else {
		$sum = 1;
		$query2 = mysqli_query($link, "INSERT INTO `bag` (`user`,`item`,`kolvo`) VALUES (('".$user."'),('".$tovar."'),('".$sum."'))");
	}


	mysqli_close($link);


	print "<script language='Javascript' type='text/javascript'>
			<!--
			alert ('Вы успешно добавили товар в корзину!');
			function reload(){location = 'catalog.php'}; 
			setTimeout('reload()', 0);
			-->			
			</script>";
}

else {
	print "<script language='Javascript' type='text/javascript'>
			<!--
			alert ('Добавлять товары в корзину может только зарегистрированный пользователь. Пожалуйста, авторизируйтесь!');
			function reload(){location = 'auth.php'}; 
			setTimeout('reload()', 0);
			-->			
			</script>";
}

?>

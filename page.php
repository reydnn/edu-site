<?session_start();?>
<html>
	<body>
	<div class = "wrapper">
	<?php require ('header.php'); ?>
	 <div class = "content">
	 <br><br><br>
		<div class = "strike">
			<span>О ТОВАРЕ</span>
		</div>
	<br><br>
	
<?

require ('connect.php');

$prodid = $_POST['pereh'];

$res = mysqli_query($link, "SELECT * FROM `catalog` WHERE `id` = ('".$prodid."')");
while($row = mysqli_fetch_array($res)) {
	$id = $row['id'];
	$name = $row['name'];
	$price = $row['price'];
	$photo = $row['photo'];
	$size = $row['size'];
	$color = $row['color'];
	echo "<div class = 'photoitem'>";
	echo "<img src = $photo>";
	echo "<div class = infotov>";
	echo "<b>Наименование:  </b> $name<br><br>";
	echo "<b>Цена:  </b> $price руб.<br><br>";
	echo "<b>Доступный размер:  </b> $size<br><br>";
	echo "<b>Цвет:  </b> $color<br><br>";
	echo "</div>";
	echo "</div>";
}

$_SESSION['idtov'] = $id;

mysqli_close($link)
 
?>
	<form name ='pageitem' action = 'addtobug.php' methot = 'post'>
	<input type = 'submit' class = 'adto'  name = 'add' value = 'Добавить в корзину'>
	</form>
	 </div>
	 <? require ('footer.php'); ?>
	</div>
	</body>
</html>








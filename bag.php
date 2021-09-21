<?session_start();?>
<html>
	<body>
	<div class = "wrapper">
	<?php require ('header.php'); ?>
	 <div class = "content">
	 <br><br><br>
		<div class = "strike">
			<span>КОРЗИНА</span>
		</div>
	<br><br>
	<?php
		require('connect.php');

		$iduser = $_SESSION['id'];
		$name = $_SESSION['name'];
		$idtovar = $_SESSION['idtov'];

		$query=mysqli_query($link,"SELECT catalog.id, catalog.name, catalog.price, catalog.size, catalog.color,catalog.photo, bag.kolvo FROM catalog, bag WHERE catalog.id= bag.item and user=('".$iduser."')");

		while($row = mysqli_fetch_array($query)) {
			$id = $row['id'];
			$name = $row['name'];
			$price = $row['price'];
			$photo = $row['photo'];
			$size = $row['size'];
			$color = $row['color'];
			$count = $row['kolvo'];

			echo "<div class = 'bagphoto'>";
			echo "<img src = $photo width = '120' height = '152'>";
			echo "<p class = baginfo>$name -  $price руб.</p>";
			echo "<form name ='count' action ='addkolvo.php' method = 'post'>";
			echo "<div class = kolvo>  Колличество: $count <button name = 'minus' type = 'submit' value = '$id' >-</button> <button name = 'plus' type = 'submit' value = '$id' >+</button></div>";
			echo "</div>";
			echo "</form>";	
	}

	

		if(!empty($_SESSION['id'])) {
			$query1 = mysqli_query($link, "SELECT `price`, `kolvo`
										FROM `catalog` , `bag`
										WHERE `catalog`.`id` = `bag`.`item` AND `bag`.`user` = ('".$iduser."')");
			while($row = mysqli_fetch_array($query1)) {
				$kolvo = $row['kolvo'];
				$cena = $row['price'];
				$itog = $itog + $cena * $kolvo;
			}

			if($itog > 0) {

				echo "<div class = 'sum'>Ваша сумма заказа составит: <b> $itog рублей. </b> </div>";
				echo "<div class = ofbut><a href = 'oformlenie.php'>Оформить заказ</div>";
				
			}

			else {
				echo "<div class = 'sum1'>$name, Ваша корзина пуста.</div>";
			}


			}

		else {
			echo "<div class = 'sum1'> Чобы просматривать коризну, нужно <b><a href = 'auth.php'>авторизоваться.</a></b></div>";
		}



	mysqli_close($link);
	?>
	 </div>
	 <? require ('footer.php'); ?>
	</div>
	</body>
</html>
<?php

require ('connect.php');

$res = mysqli_query($link, "SELECT * FROM `catalog`");
while($row = mysqli_fetch_array($res)) {
	$id = $row['id'];
	$name = $row['name'];
	$price = $row['price'];
	$photo = $row['photo'];
	$size = $row['size'];
	$color = $row['color'];
	echo "<form name = 'qwer' action = 'page.php' method = 'post'>";
	echo "<div class = 'photo'>";
	echo "<input name = 'pereh' class = 'prodbut' type = 'submit' value = '$id'>";
	echo "<img src = $photo>";
	echo "<p>$name<br>$price руб.</p>";
	echo "</div>";
	echo "</form>";
}

mysqli_close($link)

?>
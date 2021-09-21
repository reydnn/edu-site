<?session_start();?>
<script src="https://use.fontawesome.com/09d7ac79c2.js"></script>
<html>
	
	<body>
	<div class = "wrapper">
	<?php require ('header.php'); ?>	
	 <div class = "content">
		 <br><br><br>
		<div class = "strike">
			<span>КАТАЛОГ</span>
		</div>
		<form name = 'filterform' action ="catalogfiltered.php" method = 'post'>
		<div class = 'filter'>
			<ul class = 'topmenu'>
				<li>Сортировать по<i class="fa fa-angle-down"></i>
					<ul class = 'submenu'>
					<li><input name = "price" type = 'radio' value = "ASC">По возрастанию цены</li>
					<li><input name = "price" type = 'radio' value = "DESC">По убыванию цены</li>
					</ul>
				</li>
				<li>Тип продукта<i class="fa fa-angle-down"></i>
					<ul class = 'submenu'>
						<li><input name = 'type[ ]' type = 'checkbox' value = 'acs'><label>Аксесуары</label></li>
						<li><input name = 'type[ ]' type = 'checkbox' value = 'blus'>Блузки</li>
						<li><input name = 'type[ ]' type = 'checkbox' value = 'stan'>Джинсы</li>
						<li><input name = 'type[ ]' type = 'checkbox' value = 'plat'>Платья</li>
						<li><input name = 'type[ ]' type = 'checkbox' value = 'short'>Шорты</li>
						<li><input name = 'type[ ]' type = 'checkbox' value = 'foot'>Футболки</li>
						<li><input name = 'type[ ]' type = 'checkbox' value = 'ubk'>Юбки</li>
					</ul>
				</li>
				<li>Цвет<i class="fa fa-angle-down"></i>
					<ul class = 'submenu'>
						<li><input name = 'color[ ]' type = 'checkbox' value = 'черный'>Черный</li>
						<li><input name = 'color[ ]' type = 'checkbox' value = 'белый'>Белый</li>
						<li><input name = 'color[ ]' type = 'checkbox' value = 'серый'>Серый</li>
						<li><input name = 'color[ ]' type = 'checkbox' value = 'желтый'>Желтый</li>
						<li><input name = 'color[ ]' type = 'checkbox' value = 'голубой'>Голубой</li>
						<li><input name = 'color[ ]' type = 'checkbox' value = 'красный'>Красный</li>
						<li><input name = 'color[ ]' type = 'checkbox' value = 'синий'>Синий</li>
						<li><input name = 'color[ ]' type = 'checkbox' value = 'розовый'>Розовый</li>
						<li><input name = 'color[ ]' type = 'checkbox' value = 'коричневый'>Коричневый</li>
						<li><input name = 'color[ ]' type = 'checkbox' value = 'зеленый'>Зеленый</li>
						<li><input name = 'color[ ]' type = 'checkbox' value = 'мульти'>Мульти</li>
					</ul>
				</li>
			</ul>
		</div>
		<input class = 'accept' name = 'accept' type = 'submit' value = 'Принять'>
		<a href = 'catalog.php'><input class = 'reset' name = 'reset' type = 'button' value = 'Сбросить'></a>

		</form>
		<div class = "galery">
		<?
        require ('filter.php');
		?>
		</div>
	 </div>
	 <? require ('footer.php'); ?>
	</div>
	</body>
</html>
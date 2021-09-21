<?session_start();?>
<html>
	<body>
	<div class = "wrapper">
	<?php require ('header.php'); ?>
	 <div class = "content">
	 <br><br><br>
		<div class = "strike">
			<span>БРЕНД ЖЕНСКОЙ ОДЕЖДЫ</span>
		</div>
	<br><br>
	<section id="slider">
		<input type="radio" name="slider" id="s1" checked>
		<input type="radio" name="slider" id="s2">
		<input type="radio" name="slider" id="s3">
		<input type="radio" name="slider" id="s4">
		<input type="radio" name="slider" id="s5">
		<label for="s1" id="slide1"><img src = "slider\1.png "></label>
		<label for="s2" id="slide2"><img src = "slider\2.png "></label>
		<label for="s3" id="slide3"><img src = "slider\6.png "></label>
		<label for="s4" id="slide4"><img src = "slider\4.png "></label>
		<label for="s5" id="slide5"><img src = "slider\5.png "></label>
  </section>
	<br><br><br>
	 </div>
	 <? require ('footer.php'); ?>
	</div>
	</body>
</html>
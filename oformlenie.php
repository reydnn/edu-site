<?
session_start();
require ('connect.php');
$nameErr = $adrErr = $telErr =  "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   

    $fio = $_POST['name'];
    $phone = $_POST['tel'];
    $adr = $_POST['adres'];

    if(empty($fio)) {
        $nameErr = 'Введите Ваше ФИО, пожалуйста';
    } elseif(!preg_match("/^[а-яйё\s]*$/iu",$fio)) {
        $nameErr = 'Введите Ваше ФИО корректно.';
    }

    if(empty($phone)) {
        $telErr = 'Введите Ваш телефон, пожалуйста.';
    } elseif(!preg_match("/^[0-9]/",$phone)) {
        $telErr = 'Введите Ваш телефон корректно.';
    }

    if(empty($adr)) {
        $adrErr = 'Введите Ваш адресс, пожалуйста';
    } elseif(!preg_match("/^[а-яйё0-9\s]*$/iu",$adr)) {
        $adrErr = 'Введите Ваш адрес корректно.';
    }

    if($nameErr == '' && $telErr == '' && $adrErr == '') {

        $qur = mysqli_query($link, "DELETE FROM `bag` WHERE `user` = ('".$_SESSION['id']."')");
        mysqli_close($link);
    
    print "<script language='Javascript' type='text/javascript'>
    <!--
    alert ('Ваш заказ был оформлен. Дальнейшие инструкции вы узнаете из СМС, которое придет на указанный Вами номер в течение 1 дня');
    function reload(){location = 'index.php'}; 
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
			<span>ОФОРМЛЕНИЕ ЗАКАЗА</span>
        </div>
    <form class = 'formreg' name = 'oform' action = '<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method = 'post'>
        <label class = 'regrow'>Введите Ваше ФИО</label><input class = 'butreg' type = 'text' name = 'name' maxlength = '50' placeholder = 'Иван Иванович Иванов' autocomplete="off"><span class="error"><?php echo $nameErr;?></span>
		<br>
		<label class = 'regrow'>Введите Ваш номер телефона</label><input class = 'butreg' type = 'text' name = 'tel' maxlength = '11' placeholder = '79123456780' autocomplete="off"><span class="error"><?php echo $telErr;?></span>
		<br>
		<label class = 'regrow'>Введите ваш адрес</label><input class = 'butreg' type = 'text' name = 'adres' maxlength = '100' placeholder = 'г Иванов ул Иванова д 1 к 2 кв 1' autocomplete="off"><span class="error"><?php echo $adrErr;?></span>
		<br>
        <input class = 'butreg' type = 'submit' name = 'aceptz' value = "Подтвердить"><br>
    </form>   
	 </div>
	 <? require ('footer.php'); ?>
	</div>
	</body>
</html>
<?php
require ('connect.php');

$radio1 = $_POST["price"];
$checkbox1 = $_POST['type'];
$checkbox2 = $_POST['color'];

if(!isset($radio1) && !isset($checkbox1) && !isset($checkbox2)) {
   require ('galery.php');
}

$tempdb = mysqli_query($link, "CREATE TEMPORARY TABLE `time` LIKE `catalog`;");

if (isset($radio1) && !isset($checkbox1) && !isset($checkbox2)) {
    if($radio1 == "DESC") {
        $query = mysqli_query($link, "SELECT * FROM `catalog` ORDER BY `catalog`.`price` DESC");
        while($row = mysqli_fetch_array($query)) {
            $id = $row['id'];
            $name = $row['name'];
            $price = $row['price'];
            $photo = $row['photo'];
            echo "<form name = 'qwer' action = 'page.php' method = 'post'>";
            echo "<div class = 'photo'>";
            echo "<input name = 'pereh' class = 'prodbut' type = 'submit' value = '$id'>";
            echo "<img src = $photo>";
            echo "<p>$name<br>$price</p>";
            echo "</div>";
            echo "</form>";
        }
    }

    
    else {  
        $queryrad = mysqli_query($link, "SELECT * FROM `catalog` ORDER BY `catalog`.`price` ASC");
        while($row = mysqli_fetch_array($queryrad)) {
            $id = $row['id'];
            $name = $row['name'];
            $price = $row['price'];
            $photo = $row['photo'];
            echo "<form name = 'qwer' action = 'page.php' method = 'post'>";
            echo "<div class = 'photo'>";
            echo "<input name = 'pereh' class = 'prodbut' type = 'submit' value = '$id'>";
            echo "<img src = $photo>";
            echo "<p>$name<br>$price</p>";
            echo "</div>";
            echo "</form>";
        }
    }

}


if(isset($checkbox1) && isset($checkbox2)) {
    for($i = 0; $i < 50; $i++) {
        for($j = 0; $j < 50; $j++) {
            $qur1 = mysqli_query($link, "INSERT INTO `time`
                                        SELECT * 
                                        FROM `catalog` 
                                        WHERE (`type` = ('".$checkbox1[$i]."')) AND  (`color` = ('".$checkbox2[$j]."'))"); 
        }       
    }
}


if(isset($checkbox1) && !isset($checkbox2)) {
    for($i = 0; $i < 50; $i++) {
        $qur1 = mysqli_query($link, "INSERT INTO `time`
                                    SELECT * 
                                    FROM `catalog` 
                                    WHERE (`type` = ('".$checkbox1[$i]."'))");
              
    } 
}

if(!isset($checkbox1) && isset($checkbox2)) {
    for($i = 0; $i < 50; $i++) {
        $qur1 = mysqli_query($link, "INSERT INTO `time`
                                    SELECT * 
                                    FROM `catalog` 
                                    WHERE (`color` = ('".$checkbox2[$i]."'))");
              
    } 
}

if(isset($radio1)) {
$sort = mysqli_query($link, "SELECT *
                            FROM `time`
                            ORDER BY `price` $radio1");

while($row = mysqli_fetch_array($sort)) {
    $id = $row['id'];
    $name = $row['name'];
    $price = $row['price'];
    $photo = $row['photo'];
    echo "<form name = 'qwer' action = 'page.php' method = 'post'>";
    echo "<div class = 'photo'>";
    echo "<input name = 'pereh' class = 'prodbut' type = 'submit' value = '$id'>";
    echo "<img src = $photo>";
    echo "<p>$name<br>$price руб.</p>";
    echo "</div>";
    echo "</form>";
} 
}


else {
    $notsort = mysqli_query($link, "SELECT *
                                    FROM `time`");
    
    while($row = mysqli_fetch_array($notsort)) {
        $id = $row['id'];
        $name = $row['name'];
        $price = $row['price'];
        $photo = $row['photo'];
        echo "<form name = 'qwer' action = 'page.php' method = 'post'>";
        echo "<div class = 'photo'>";
        echo "<input name = 'pereh' class = 'prodbut' type = 'submit' value = '$id'>";
        echo "<img src = $photo>";
        echo "<p>$name<br>$price</p>";
        echo "</div>";
        echo "</form>";
    } 
}



mysqli_close($link);

?>
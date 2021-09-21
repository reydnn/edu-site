<? 

session_start();
require ('connect.php');

$plus = $_POST['plus'];
$minus = $_POST['minus'];
$user = $_SESSION['id'];

if(isset($plus)) {
    $query = mysqli_query($link, "UPDATE `bag` 
                                  SET `kolvo` = `kolvo` + 1
                                  WHERE `item` = ('".$plus."')
                                  and `user` = ('".$user."')");
    
    
}

if(isset($minus)) {
    $query = mysqli_query($link, "UPDATE `bag` 
                                  SET `kolvo` = `kolvo` - 1
                                  WHERE `item` = ('".$minus."')
                                  and `user` = ('".$user."')");
    
    $query1 = mysqli_query($link, "SELECT `kolvo`
                                  FROM `bag`
                                  WHERE `item` = ('".$minus."')
                                  and `user` = ('".$user."')");
    while($row = mysqli_fetch_array($query1)) {
        $kolvo=$row['kolvo'];
    }
    
    if($kolvo == 0) {
        $query2 = mysqli_query($link, "DELETE FROM `bag` WHERE `item` = ('".$minus."') and `user` = ('".$user."')"); 
    }
}


header ("Location:bag.php");



mysqli_close($link);
?>

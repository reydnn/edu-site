<?php 
session_start();
if (!empty($_SESSION['id'])) {
    header("Location:lk.php");
}
else {
    header("Location:auth.php");
}
?>
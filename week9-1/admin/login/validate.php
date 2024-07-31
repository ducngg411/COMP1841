<?php 

$ActualPassword = "secret";
if ($_POST["password"] == $ActualPassword) {
    session_start();
    $_SESSION["authorized"] = "Y";
    header("Location: index.php");
} else {
    header("Location: wrongpassword.php");
}
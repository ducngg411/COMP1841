<?php

session_start();
if ($_SESSION["authorized"] != "Y" ) {
    header("Location: noauthorised.php");
}
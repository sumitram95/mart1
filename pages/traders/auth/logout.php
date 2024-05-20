<?php
session_start();
if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
    $_SESSION = array();
    session_destroy();
    header("Location: ./sign-in.php");
} else {
    header("Location: ./sign-in.php");
}

exit();

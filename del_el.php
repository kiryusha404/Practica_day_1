<?php 
session_start();


unset($_SESSION['list'][$_GET['id']]['text']);



header('Location: index.php');
?>
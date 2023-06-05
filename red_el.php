<?php 
session_start();


    $_SESSION['list'][$_GET['id']]['status'] = 'red';



header('Location: index.php');
?>
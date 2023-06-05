<?php 
session_start();


    $_SESSION['list'][$_GET['id']]['status'] = 'green';



header('Location: index.php');
?>
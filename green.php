<?php 
session_start();

for ($i = 0; $i < count ($_SESSION['list']); $i++) { 

    $_SESSION['list'][$i]['status'] = 'green';

} 

header('Location: index.php');
?>
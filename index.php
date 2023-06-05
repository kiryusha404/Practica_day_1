<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Task list</title>
</head>
<body>
<header>
    <h1>Task list</h1>
</header>
<hr>
    <div class="add_task">
        <form action="#" method="GET">
            <input name="text" required placeholder="Enter text...">
            <button class="add_button"><b>ADD TASK</b></button>
        </form>
        <div>
            <a href="del.php"><button class="button_task h_button"><b>REMOVE ALL</b></button></a>
            <a href="green.php"><button class="button_task"><b>READY ALL</b></button></a>
        </div>
    </div>
<hr>
<?php
    if($_GET['text']){

        $list['text'] = $_GET['text'];
        $list['status'] = 'red';
        
        $work_list = $_SESSION['list'];
        $work_list[] = $list;
        $_SESSION['list'] = $work_list;


    }

 for ($i = 0; $i < count ($_SESSION['list']); $i++) { 
    if($_SESSION['list'][$i]['text'] == ""){ }else{
    ?>
<div class="element_list add_task">
            <div class="block w">
                <p><?php echo $_SESSION['list'][$i]['text']; ?></p>
                <a href="<?php if($_SESSION['list'][$i]['status'] == 'red'){ echo 'green';}else{ echo 'red';} ?>_el.php?id=<?php echo $i; ?>"><button class="button_task h_button"><b><?php if($_SESSION['list'][$i]['status'] == 'red'){ echo 'READY';}else{ echo 'UNREADY';} ?></b></button></a>
                <a href="del_el.php?id=<?php echo $i; ?>"><button class="button_task marg"><b>DELETE</b></button></a>
            </div>
            <div class="status <?php echo $_SESSION['list'][$i]['status']; ?> block">
            </div>
        </div>
<hr>  
<?php }} ?>
    </div>
</body>
</html>

<?php
    //echo $_POST['category'];
    require '../Functions.php';
    $obj = new Admin_Actions();

    $save = $obj->saveCategory($_POST['category']);

    echo $save;
?>
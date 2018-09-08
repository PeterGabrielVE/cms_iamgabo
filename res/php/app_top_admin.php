<?php

    require 'Functions.php';
    $admin = new Admin_Actions();

    if(
        isset($_SESSION['admin']) && 
        isset($_GET['section']) &&
        $_GET['section'] == "posts"
    ){
        //Obtener categorias de la bd
        $categories = $admin->getCategories();
    }

    if(
        isset($_SESSION['admin']) && 
        isset($_GET['section']) &&
        $_GET['section'] == "categories"
    ){
        //Obtener categorias de la bd
        $categories = $admin->getCategories();
    }

?>
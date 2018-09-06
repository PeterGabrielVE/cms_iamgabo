<?php require 'res/php/app_top.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CMS IAMGABO</title>

    <link rel="stylesheet" href="res/css/framework/semantic/semantic.min.css">
</head>
<body>

    <?php require 'views/nav/main_nav.php'; ?>

    <?php 
        if(!isset($_GET['section'])){
            require 'views/home.php';
        }
    ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
  <script src="res/css/framework/semantic/semantic.min.js"></script>  
</body>
</html>
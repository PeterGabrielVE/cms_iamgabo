<?php

    require 'Functions.php';
    $user = new User_Actions();

    if(!isset($_GET['section'])){
        $posts = $user->getRecentPosts();

       /* echo "<pre>", print_r($posts), "</pre>";
        exit(); */
    }


?>
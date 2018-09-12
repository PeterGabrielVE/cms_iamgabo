<?php

    require 'Functions.php';
    $user = new User_Actions();

    if(!isset($_GET['section'])){
        $posts = $user->getRecentPosts();

       /* echo "<pre>", print_r($posts), "</pre>";
        exit(); */
    }elseif(
        isset($_GET['section']) && 
        $_GET['section'] == "post"
    ){
       // Obtener informacion de la publicacion
       $post = $user->getPostInfo($_GET['post_id']);
      /*  echo "<pre>", print_r($post), "</pre>";
        exit(); */
    }


?>
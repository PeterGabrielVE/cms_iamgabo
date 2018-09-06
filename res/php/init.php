<?php

    session_start();
    
    require 'medoo.php';

    // Using Medoo namespace
    use Medoo\Medoo;
 
    try{
        $database = new Medoo([
            // required
            'database_type' => 'mysql',
            'database_name' => 'cms_iamgabo',
            'server' => 'localhost',
            'username' => 'root',
            'password' => '',
            ]);
            //echo "Conexión exitosa a la BD";
    }catch(PDOException $e){
        echo "No se pudo conectar a la BD";
    }

    


?>
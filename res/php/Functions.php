<?php

    require 'init.php';

    class User_Actions{

    };

    class Admin_Actions{
        public function logIn($username_email, $pass){
           global $database;

           $data = $database->select("admins", [
               "password"
           ],[
               "OR" => [
                   "username" => $username_email,
                   "email" => $username_email
               ]
           ]);
           
           $password_db = $data[0]["password"];

          if(password_verify($pass, $password_db)){
            return true;
          }else{
              return false;
          }
        }

        public function getCategories(){
            global $database;

            $categories = $database->select("Categories",[
                "category_id",
                "category"
            ]);
            return $categories;
        }


        public function saveCategory($category){
            global $database;

            $database->insert("categories",[
                "category" => htmlentities($category)
            ]);
                return $database->id();
        }

        public function deleteCategory($category_id){
            global $database;

            $delete = $database->delete("categories",[
                "category_id" => $category_id
            ]);
                return $delete->rowCount();
        }
    }

?>
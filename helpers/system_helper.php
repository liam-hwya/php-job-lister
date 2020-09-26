<?php

 function redirect($page=false,$message=null,$message_type=null){
    //Check for page 
     if(is_string($page)){
         $location = $page;
     }else{
        $location = $_SERVER['SCRIPT_NAME'];
     }

    //Check for message
    if($message !=null){
        $_SESSION['message'] = $message;
    }

    if($message_type != null){
        $_SESSION['message_type'] = $message_type;
    }

    header('location:'.$location);
    exit();
 }

 function displayMessage(){
     if(!empty($_SESSION['message'])){
         $message = $_SESSION['message'];

         if(!empty($_SESSION['message_type'])){
             $message_type = $_SESSION['message_type'];

             if($message_type == 'error'){
                 echo "<div class='alert alert-danger'>".$message."</div>";
             }else{
                echo "<div class='alert alert-success'>".$message."</div>";
             }
         }
         unset($_SESSION['message']);
         unset($_SESSION['message_type']);
     }else{
         echo "";
     }
 }

?>
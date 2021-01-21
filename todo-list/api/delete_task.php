<?php
    
    $todos = json_decode( file_get_contents('../todo.db'), true );
    if(isset($_POST['index']) && is_numeric($_POST['index']))
    {
        $index = $_POST['index'];
        unset($todos[$index]);
        $todos = array_values($todos);
        if( file_put_contents( '../todo.db', json_encode($todos) ) ){
            exit("OK");
        }else{
            exit("Greska pri upisu...");
        }
    }


?>
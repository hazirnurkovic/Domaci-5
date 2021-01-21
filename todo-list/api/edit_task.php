<?php

    $todos = json_decode(file_get_contents('../todo.db'), true);

    //da li su podeseni svi parametri, ako jesu, smijestamo im vrijednosti u promjenljive
    if(isset($_POST['tekst']) && $_POST['tekst']!=='' && isset($_POST['opis']) && $_POST['opis']!==''
      && isset($_POST['index']) && is_numeric($_POST['index'])
      )
    {
        $index = $_POST['index'];
        $tekst = $_POST['tekst'];
        $opis = $_POST['opis'];
    } 
    else{ exit("Greska"); }
    
    $todos[$index]['tekst'] = $tekst;
    $todos[$index]['opis'] = $opis;

    if(file_put_contents('../todo.db', json_encode($todos)))
    {
        exit("OK");
    }
    else{ exit("Greska-2"); }
    var_dump($_POST);
?>
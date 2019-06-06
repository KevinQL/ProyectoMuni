<?php

    $mysqli = new mysqli('localhost',"root","","andarapa");

    if($mysqli->connect_errno){    
        echo "Error en la conexión... " . $mysqli->connect_error;
    }

    // printf("Conjunto de caracteres inicial: %s\n", mysqli_character_set_name($mysqli));

    if (!$mysqli->set_charset("utf8")) {
        printf("Error cargando el conjunto de caracteres utf8: %s\n", $mysqli->error);
        exit();
    } else {
        // printf("Conjunto de caracteres actual: %s\n", $mysqli->character_set_name());
    }


    // $result = $mysqli->query("SELECT * FROM noticias");

    // $arr_ = [];
    // while($noticia = $result->fetch_assoc()){
    //     $arr_[] = $noticia;
    // }

    // foreach($arr_ as $fila){
    //     echo $fila['titulo_noti'];
    //     echo $fila['titulo_noti'];
    //     echo $fila['titulo_noti'];
    // }

    // echo $fila['titulo_noti'];




    // $result->free();

    // $mysqli->close();


?>

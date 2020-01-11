<?php

    require_once('Usuarios.php');

    $Usuario = new Usuarios();

    /*$Usuario->add("Lucy","Santos","lsantos","123","Administrador","Activo");

    $Usuario->update("3","Tatiana","Tatiana","Tatiana","123","Docente","Activo");*/

    
    /*
    $getUsuarios = $Usuario->get();
    foreach ($getUsuarios as $Usuario){
        echo $Usuario['ID_USUARIO'] . " - ";
        echo $Usuario['NOMBRE'] . " - ";
        echo $Usuario['APELLIDO'] . " - ";
        echo $Usuario['USUARIO'] . " - ";
        echo $Usuario['PASSWORD'] . " - ";
        echo $Usuario['PERFIL'] . " - ";
        echo $Usuario['ESTADO'] . " <br> ";
    }*/

    $Usuario->delete(2);


?>
<?php

    require_once('Usuarios.php');

    $Usuario = new Usuarios();

    $Usuario->add("Lucy","Santos","lsantos","123","Administrador","Activo");

    $Usuario->update("3","Tatiana","Tatiana","Tatiana","123","Docente","Activo");


?>
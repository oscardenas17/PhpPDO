<?php
require_once('Conexion.php');

class Usuarios extends Conexion{

    public function __construct(){
        $this->db = parent::__construct();
    }



    public function add($Nombre, $Apellido, $Usuario, $Password, $Perfil, $Estado ){

        $statement = $this->db->prepare("INSERT INTO usuarios (NOMBRE, APELLIDO, USUARIO, PASSWORD, PERFIL, ESTADO) VALUES (:Nombre, :Apellido, :Usuario, :Password, :Perfil, :Estado)");

        $statement->bindParam(':Nombre', $Nombre);
        $statement->bindParam(':Apellido', $Apellido);
        $statement->bindParam(':Usuario', $Usuario);
        $statement->bindParam(':Password', $Password);
        $statement->bindParam(':Perfil', $Perfil);
        $statement->bindParam(':Estado', $Estado);
       if($statement->execute()){
           echo "Registrado con exito";
       }else{
           echo "Ocurrio un error";
       }
    }


    public function update($Id, $Nombre, $Apellido, $Usuario, $Password, $Perfil, $Estado ){

        $statement = $this->db->prepare("UPDATE usuarios set NOMBRE = :Nombre, APELLIDO = :Apellido, USUARIO = :Usuario, PASSWORD = :Password, PERFIL = :Perfil, ESTADO = :Estado  WHERE ID_USUARIO= :Id");

        $statement->bindParam(':Id', $Id);
        $statement->bindParam(':Nombre', $Nombre);
        $statement->bindParam(':Apellido', $Apellido);
        $statement->bindParam(':Usuario', $Usuario);
        $statement->bindParam(':Password', $Password);
        $statement->bindParam(':Perfil', $Perfil);
        $statement->bindParam(':Estado', $Estado);

       if($statement->execute()){
           echo "Actualización con exito";
       }else{
           echo "Ocurrio un error";
       }
    }

    public function get(){
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM usuarios");
        $statement ->execute();

        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }


    public function delete($Id){        
        $statement = $this->db->prepare("DELETE FROM usuarios WHERE ID_USUARIO = :Id");
        $statement ->bindParam(':Id',$Id);

        if( $statement->execute()){
            echo "eliminado exitosamente";
        }else{
            echo "Ocurrio un error";
        }
    }
    


}

?>
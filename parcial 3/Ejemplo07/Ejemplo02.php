<?php
class Conexion extends POD{
    Private $tipobd="Mysql";
    private $host="Localhost"
    Private $nombre_de_base="Bilbliotecas";
    provate $user="root";
    private $psw="";
    
    public funtion --construc(){
        //sobrescribir el método constructor de la clase POD.
        try{
            parent::__construct($this->nombre_de_base, $this->user, $this->psw);
            
        }catch(PODException $e){
            echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $->getMesssage();
            exit;
        }
    }
}

?>
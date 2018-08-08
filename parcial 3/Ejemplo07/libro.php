<?php
include_once("ejemplo2.php");
class Libro  {
   private $isbn;
   private $nombre;
   private $autor;
    
   const TABLA = 'libro';
   public function getIsbn() {
      return $this->isbn;
   }
   public function getNombre() {
      return $this->nombre;
   }
   public function getAutor() {
      return $this->autor;
   }
   public function setNombre($nombre) {
      $this->nombre = $nombre;
   }
   public function setAutor($autor) {
      $this->autor = $autor;
   }
   public function __construct($nombre=null, $autor=null, $isbn=null) {
      $this->nombre = $nombre;
      $this->autor = $autor;
      $this->isbn = $isbn;
        
   }
    
    public function guardar(){
       $conexion = new Conexion();
       
       if($this->isbn) /*Modifica*/ {
          $consulta = $conexion->prepare('UPDATE ' . self::TABLA .' SET nombre = :nombre, autor = :autor WHERE id = :id');
          $consulta->bindParam(':nombre', $this->nombre);
          $consulta->bindParam(':autor', $this->autor);
          $consulta->bindParam(':isbn', $this->isbn);
          $consulta->execute();
       }else /*Inserta*/ {
          $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA .' (nombre, autor) VALUES(:nombre, :autor)');
          $consulta->bindParam(':nombre', $this->nombre);
          $consulta->bindParam(':autor', $this->autor);
          $consulta->execute();
          $this->isbn = $conexion->lastInsertId();
       }
       $conexion = null;
    }
    
    public static function ListarTodos(){
       $conexion = new Conexion();
       $consulta = $conexion->prepare('SELECT isbn, nombre, autor FROM ' . self::TABLA . ' ORDER BY nombre');
       $consulta->execute();
       $registros = $consulta->fetchAll(PDO::FETCH_ASSOC);//FETCH_CLASS
       $conexion = null;
        return $registros;
    }
    
    public static function buscarPorId($isbn){
       $conexion = new Conexion();
    
       $consulta = $conexion->prepare('SELECT nombre, autor FROM ' . self::TABLA . ' WHERE isbn = :isbn');
       $consulta->bindParam(':isbn', $isbn);
       $consulta->execute();
       $registro = $consulta->fetch(PDO::FETCH_ASSOC);
       if($registro){
          return new self($registro['nombre'], $registro['autor'], $isbn);
       }else{
          return false;
       }
        $conexion = null;
    }
 }
?>
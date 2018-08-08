<pre>
<?php
//iclude_once("ejemplo02.php");
//$conn=new conexion();
include_once("libro.php") 
$libro = new Libro("El Libre De C", "Santos Pool", "AA1/2018/CA");
var_dump($libro);

echo $libro->nombre;

echo $libro->getnombre();
$data = libro::listartodos();
print_r($data);
?>
</pre>
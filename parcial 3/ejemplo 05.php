<?php
function incremento(){
	$x=3;
	return $x++;
}
echo incremento();
$x=3;
function suma($valor){
	return $valor++;
}
echo suma($x)."<br>";
function saludo($titulo="sr.",$nombre="desconocido"){
	return "hola".$titulo." ".$nombre;
} 
echo saludo()."<br>";
echo saludo('prof')."<br>";
echo "string";
?>
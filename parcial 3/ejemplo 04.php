<?php
$n1 = 20;
$n2 = 16;

if($n1>$n2){
	echo $n1."es mayor<br>";
}else{
	echo $n2."es mayor<br>";
}
if($n1<$n2){
	echo $n2."es mayor<br>";
}else{
	echo $n1."es mayor<br>";
}
if($n1>=$n2){
	echo $n1."es mayor o igual<br>";
}
if($n1<=$n2){
	echo $n2."es menor o igual<br>";
}
if($n1!=$n2){
	echo $n2."son diferentes<br>";
}
for($x=0; $x>10; $x++){
	echo $x."<br>";
}
$n1=5;
switch ($n1){
	case 1:{
	echo "caso uno";
		break;
	}
	case 2:{
		echo "caso dos";
		break;
	}
	case 3:{
		echo "caso tres";
		break;
	}
	default:
	echo "prederterminado";
}
$arreglo 0 iarray(1,2,3,4);
echo $arreglo[3];

?>
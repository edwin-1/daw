<pre>
<?php

include_once("libro.php");
$r=Libro::buscarPorId("A1");
print_r($r);
$r=Libro::listarTodos("A1");
print_r($r);
?>
</pre>
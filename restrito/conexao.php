<?php
$server = "localhost";
$user = "root";
$pass = "";
$bd = "projeto01_crud";

$conn = mysqli_connect($server, $user, $pass, $bd);

if ($conn) {
	//echo "Conectado!";
} else {
	echo "Erro!";
}

function mensagem($texto, $tipo) {
	echo "'<div class='alert alert-$tipo' role='alert'>
  				   $texto
			     </div>";
}

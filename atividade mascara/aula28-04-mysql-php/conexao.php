<?php
$servidor="localhost";
$use="root";
$senha= "";
$banco= "agenda"

$conexao= mysqli_connect($servidor, $use, $senha, $banco);

if(!$conexao){
    echo "erro de conexão";
}

?>
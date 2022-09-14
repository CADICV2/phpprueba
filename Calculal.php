<?php

require_once("ClassOperacion.php");


$operaciones =  new Calcular();
/*
echo $operaciones->Raizcuadrada(9);
echo "<br>";

echo $operaciones->Potencia(10,2);
echo "<br>";
*/
if($_POST){

    $dato1 = $_POST['txtdigito01'];
    $dato2 = $_POST['txtdigito02'];

    if($_POST['selectOpe'] == 1){
        $operacion = "-";

    }elseif($_POST['selectOpe'] == 2){
        $operacion = "+";

    }elseif($_POST['selectOpe'] == 3){
        $operacion = "*";

    }elseif($_POST['selectOpe'] == 4){
        $operacion = "/";
    }
    
    $resultado = $operaciones->op_basica( $dato1,$dato2,$operacion);

    echo "<input value='$resultado'><br>";
}




?>
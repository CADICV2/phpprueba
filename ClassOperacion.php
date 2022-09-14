<?php  

require_once("Operacion.php");
require_once("OperacionesBasicas.php");

class Calcular {

  /*  public function Raizcuadrada(float $numero): float
    {
        $total =sqrt($numero);
        return $total;
    }

    public function Potencia(int $numero, int $potencia): int
    {
        $total=pow($numero,$potencia);
        return $total;
    }
    */

    public function op_basica(float $dato1, float $dato2, string $operacion)
    {
        if ($operacion == "+"){
            return $dato1 + $dato2;
        }elseif ($operacion == "-"){
            return $dato1 - $dato2;
        }elseif ($operacion == "*"){
            return $dato1 * $dato2;
        }elseif ($operacion == "/"){
            return $dato1 / $dato2;
        }else {
            echo "Operacion no valida";
        }
    }

}//END CLASS CALCULAR


?>
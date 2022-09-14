

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="index.php" method="post">
        <label for="resultado">valor 1:</label>
            <input name="txtdigito1" type="text"><br>

            <label for="resultado">valor 2:</label>
            <input name="txtdigito2" type="text"><br>

            <label for="resultado">Operacion</label>
            <select name="selectOpe" >

                <option value="1">-</option>
                <option value="2">+</option>
                <option value="3">*</option>
                <option value="4">/</option>

            </select><br>
            <input type="submit"><br>
            <label for="">Resultado:</label>
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

                        $dato1 = $_POST['txtdigito1'];
                        $dato2 = $_POST['txtdigito2'];

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
        </form>
    </div>
</body>
</html>
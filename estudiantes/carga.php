<?php

session_start();


if (!empty($_POST)) {

    if ($_POST['action'] == 'cargaEst') {
        
   

        if (!isset($_SESSION['estudiantes'])) {
            $_SESSION['estudiantes'] = array();
        }

        $ced = $_POST['cedula'];
        if (!isset($_SESSION['estudiantes'][$ced])) {
            
        

            $ced = $_POST['cedula'];
            $nom = $_POST['nombre'];
            $eda = $_POST['edad'];
            $gen = $_POST['genero'];
            $car = $_POST['carrera'];
            $tur = $_POST['turno'];

            switch ($tur) {
                case 'd':
                        $bonoT = 300;
                    break;
                case 't':
                        $bonoT = 200;
                    break;
                case 'n':
                        $bonoT = 200;
                    break;
                
                default:
                        $bonoT = 'indefinido';
                    break;
            }


            $array = array(
                'nombre' => $nom,
                'edad' => $eda,
                'genero' => $gen,
                'carrera' => $car,
                'tur' => $tur,
                'sueldoEst'=> [
                    'deposito' => 100,
                    'bonoTurno'=> $bonoT,
                    'bonoProm' => 0,
                    'total' => (100+$bonoT)
                ]
            );

            $_SESSION['estudiantes'][$ced] = $array;

            var_dump($_POST);

            header('Location: index.php');

            
        }else {
            var_dump($_POST);
            unset($_POST);
            echo "<script>alert('Ya se encuentra registrada esta cedula'); window.location = 'index.php'</script>";
        }

    }

    if ($_POST['action'] == 'cargaNotas') {

        $ced = $_POST['cedula'];

        if ((isset($_SESSION['estudiantes'][$ced]))) {
                
                
                $nota1 = $_POST['nota1'];
                $nota2 = $_POST['nota2'];
                $nota3 = $_POST['nota3'];
                $nota4 = $_POST['nota4'];
                $prom = ($nota1 + $nota2 + $nota3 + $nota4)/4;


                if ($prom > 18.5) {
                    $bonoProm = 200;
                    $_SESSION['estudiantes'][$ced]['sueldoEst']['total'] = $_SESSION['estudiantes'][$ced]['sueldoEst']['total'] + $bonoProm;
                }else{
                    $bonoProm = 'No cumple con promedio';
                }


                $array = array(
                    'nota1' => $nota1,
                    'nota2' => $nota2,
                    'nota3' => $nota3,
                    'nota4' => $nota4,
                    'prom' => $prom
                );

                $_SESSION['estudiantes'][$ced]['notas'] = $array;
                $_SESSION['estudiantes'][$ced]['sueldoEst']['bonoProm'] = $bonoProm;
                


                header('Location: index.php');

                

        }else {
            var_dump($_POST);
            unset($_POST);
            echo "<script>alert('No se encontro al estudiante'); window.location = 'index.php'</script>";
        }

    }


}

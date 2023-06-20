<?php require_once "../config.php"?>
<?php require_once '../layouts/header.php'; ?>

<?php require_once 'modal.php' ?>

<?php 

?>

<!-- Button trigger modal -->
<div class="container my-5">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Añadir estudiante
    </button>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#notasModal">
    Cargar notas
    </button>
</div>


<div class="container-fluid col-8">
<table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Cédula</th>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Genero</th>
                <th>Carrear</th>
                <th>Turno</th>
                <th>Promedio</th>
                <th>Sueldo Estudiantil</th>
            </tr>
        </thead>
        <tbody>
            <?php //var_dump($_SESSION['estudiantes']) ?>
            <?php if(isset($_SESSION['estudiantes'])): ?>
                <?php foreach($_SESSION['estudiantes'] as $key => $val): ?>
                    <tr>
                        <td><?= $key ?></td>
                        <td><?= $val["nombre"]?></td>
                        <td><?= $val["edad"]?></td>
                        <?php

                            switch ($val["genero"]) {
                            case 'm':
                                echo "<td>Masculino</td>";
                                break;
                            case 'f':
                                echo "<td>Femenino</td>";
                                break;
                            default:
                                echo "<td>Indefinido</td>";
                                break;
                        }                          
                        ?>

                        <td><?= $val["carrera"]?></td>
                        <?php switch ($val["tur"]) {
                            case 'd':
                                echo "<td>Diurno</td>";
                                break;
                            case 't':
                                echo "<td>Tarde</td>";
                                break;
                            case 'n':
                                echo "<td>Noche</td>";
                                break;
                        
                            default:
                                echo "<td>Indefinido</td>";
                                break;
                        }
                            
                        ?>
                        <?php if(isset($val["notas"])): ?>
                            <td><?= $val["notas"]["prom"] ?></td>
                        <?php else:?>
                            <td>No cargado</td>
                        <?php endif; ?>

                        <td>
                            <table  id="subTable" class="table table-striped" style="width:100%">
                                <thead >
                                    <th>Deposito</th>
                                    <th>Bono Turno</th>
                                    <th>Bono Promedio</th>
                                    <th>Total</th>
                                </thead>
                                <tbody >
                                    <tr>
                                        <td><?=$val['sueldoEst']['deposito']?></td>
                                        <td><?=$val['sueldoEst']['bonoTurno']?></td>
                                        <td><?=$val['sueldoEst']['bonoProm']?></td>
                                        <td><?=$val['sueldoEst']['total']?></td>
                                    </tr>
                                </tbody>
                                
                            </table>
                        </td>
                    </tr>
                    
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?php require_once '../layouts/footer.php'; ?>
<script src="script.js"></script>
<script>

// $('#guardar').on('click', function(){


// let ced = $('#cedula').val();
// let nom = $('#nombre').val();
// let eda = $('#edad').val();
// let gen = $('#genero').val();
// let car = $('#carrera').val();
// let tur = $('#turno').val();

//     $.ajax({
//             type: "post",
//             url: "carga.php",
//             data: {"cedula":ced,"nombre":nom,"edad":eda,"genero":gen,"carrera":car,"turno":tur},
//             dataType: "json",
//             success: function (response) {

//                 alert("Se registro exitosamente")
                
//             }
//         });

// })

</script>
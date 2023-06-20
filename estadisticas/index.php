<?php require_once "../config.php"?>
<?php require_once '../layouts/header.php'; ?>

<?php

$promSistDiur = 0;
$acum1 = 0;
$cont1 = 0;

$promElectrNoct = 0;
$acum2 = 0;
$cont2 = 0;

$contSis = 0;
$contElectri = 0;
$cotElectro = 0;
$contDiur = 0;
$contTar = 0;
$contNoch = 0;
$contFemSist = 0;
$contMascElect = 0;
$contMascElectro = 0;

$promEdadMascElect = 0;
$acum3 = 0;
$cont3 = 0;

$promElectrica1824 = 0;   
$acum4 = 0;
$cont4 = 0;

//var_dump($_SESSION['estudiantes'] );

foreach($_SESSION['estudiantes'] as $key => $val) { 
    if (($val['tur'] == 'd') && ($val['carrera'] == 'sistemas')) {
        $cont1++;
        $acum1 = $acum1 + $val['sueldoEst']['total'];
    }
    if ($val['carrera'] == 'sistemas') {
        $contSis++;
    }
    if ($val['carrera'] == 'electrica') {
        $contElectri++;
    }
    if ($val['carrera'] == 'electronica') {
        $contElectro++;
    }
    if ($val['tur'] == 'd') {
        $contDiur++;
    }
    if ($val['tur'] == 't') {
        $contTar++;
    }
    if ($val['tur'] == 'n') {
        $contNoch++;
    }
    if (($val['genero'] == 'f') && ($val['carrera'] == 'sistemas')) {
        $contFemSist++;
    }
    if (($val['tur'] == 'n') && ($val['carrera'] == 'electrica')) {
        $cont2++;
        $acum2 = $acum2 + $val['sueldoEst']['total'];
    }
    if (($val['edad'] > 25) && ($val['carrera'] == 'electronica')) {
        $contMascElect++;
    }
    if (($val['genero'] > 'm') && ($val['carrera'] == 'electronica')) {
        $contMascElectro++;
    }
    if (($val['genero'] == 'm') && ($val['carrera'] == 'electrica')) {
        $cont3++;
        $acum3 = $acum3 + $val['edad'];
    }
    if ((($val['edad'] >= 18) && ($val['edad'] <= 24)) && ($val['carrera'] == 'electrica')) {
        $cont4++;
        $acum4 = $acum4 + $val['sueldoEst']['total'];
    }
}

if ($cont1>0) {
    $promSistDiur = ($acum1/$cont1);
}
if($cont2>0){
    $promElectrNoct = ($acum2/$cont2);
}
if($cont3>0){
    $promEdadMascElect = ($acum3/$cont3);
}
if($cont4>0){
    $promElectrica1824 = ($acum4/$cont4);
}




?>


<!-- Button trigger modal -->
<div class="container my-5">

</div>

<style>
    .dataTables_info{
        display: none !important;
    }
</style>


<div class="container-fluid col-10">
<table id="example1" class="table table-striped table-hover " style="width:100%">
        <thead>
            <tr>
                <th>Promedio sueldo sistemas diurno: </th>
                <th>Cantidad estudiantes de sistemas: </th>
                <th>Cantidad estudiantes de electrica: </th>
                <th>Cantidad studiantes de elecronica: </th>
                <th>Cantidad estudiantes de turno diurno: </th>
                <th>Cantidad estudiantes de turno tarde: </th>
                <th>Cantidad estudiantes de turno noche: </th>
                <th>Cantidad de Femeninas de sistemas: </th>
                <th>Promedio sueldo electrica nocturno: </th>
                <th>Cantidad estudiantes electronica mayor 25 años: </th>
                <th>Cantidad estudiantes masculino electronica: </th>
                <th>Promedio edad masculino electrica: </th>
                <th>Promedio sueldo electrica entre 18-24 años: </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $promSistDiur?></td>
                <td><?= $contSis?></td>
                <td><?= $contElectri?></td>
                <td><?= $cotElectro?></td>
                <td><?= $contDiur?></td>
                <td><?= $contTar?></td>
                <td><?= $contNoch?></td>
                <td><?= $contFemSist?></td>
                <td><?= $promElectrNoct?></td>
                <td><?= $contMascElect?></td>
                <td><?= $contMascElectro?></td>
                <td><?= $promEdadMascElect?></td>
                <td><?= $promElectrica1824?></td>
            </tr>
        </tbody>
    </table>
</div>
<br>
<br>

<div class="d-flex">
    <div class="container-fluid col-5">
    <h5 class="text-center">Aprobados</h5>
    <table id="example2" class="table table-striped table-hover mx-auto " style="width:50%">
            <thead>
                <tr>
                    <th>Promedio</th>
                    <th>Cedula</th>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($_SESSION['estudiantes'] as $key => $val): ?>
                    <?php if($val['notas']['prom'] >= 10): ?>
                    
                        <tr>
                            <?php if(isset($val['notas'])): ?>
                                <td><?= $val['notas']['prom']?></td>
                                
                            <?php else: ?>
                                <td>No cargado</td>
                            <?php endif; ?>
                            <td><?= $key?></td>
                            <td><?= $val['nombre']?></td>
                        </tr>
                    
                    <?php endif; ?>
                    
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="container-fluid col-5">
    <table id="example3" class="table table-striped mx-auto table-hover " style="width:50%">
    <h5 class="text-center">No aprobados</h5>
            <thead>
                <tr>
                    <th>Promedio</th>
                    <th>Cedula</th>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($_SESSION['estudiantes'] as $key => $val): ?>
                    <?php if($val['notas']['prom'] < 10): ?>
                    
                        <tr>
                            <?php if(isset($val['notas'])): ?>
                                <td><?= $val['notas']['prom']?></td>
                                
                            <?php else: ?>
                                <td>No cargado</td>
                            <?php endif; ?>
                            <td><?= $key?></td>
                            <td><?= $val['nombre']?></td>
                        </tr>
                    
                    <?php endif; ?>
                    
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
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
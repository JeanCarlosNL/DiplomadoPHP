<?php

$blockElemento =['Sr', 'Th']; 

$cont = 0;

$elementos = ['H','.','.','.','.','.','.','.','.','.','.','.','.','.','.','.','.','He',
              'Li','Be','.','.','.','.','.','.','.' ,'.','.','.','B','C','N','O','F','Ne',
            'Na','Mg','.','.','.','.','.','.','.','.','.','.','Al','Si','P','S', 'Cl', 'Ar',
            'K','Ca','Sc','Ti','V','Cr','Mn','Fe','Co','Ni','Cu','Zn','Ga','Ge','As','Se','Br','Kr',
            'Rb','Sr','Y','Zr','Nb','Mo','Tc','Ru','Rh','Pd','Ag','Cd','In','Sn','Sb','Te','I','Xe',
            'Cs','Ba','La-Lu', 'Hf','Ta','W','Re','Os','Ir','Pt','Au','Hg','Tl','Pb','Bi', 'Po','At','Rn',
            'Fr','Ra','Ac-Lr','Rf','Db','Sg','Bh','Hs','Mt','Ds','Rg','Cn','Nh','Fl','Mc','Lv','Ts','Og'
             ];

$metalesRaros = ['.','.','.','La','Ce','Pr','Nd','Pm','Sm','Eu','Gd','Tb','Dy','Ho','Er','Tm','Yb','Lu',
                 '.','.','.','Ac','Th','Pa','U','Np','Pu','Am','Cm','Bk','Cf','Es','Fm','Md','No', 'Lr'
                ];

$elementosClasificados = [
    "Alcalinos" => ['Li', 'Na', 'K', 'Rb', 'Cs', 'Fr'],
    'Alcalinoterreos' => ['Be', 'Mg', 'Ca', 'Sr', 'Ba', 'Ra'],
    'Metales de transicion' => ['Sc', 'Ti', 'V', 'Cr', 'Mn', 'Fe', 'Co', 'Ni', 'Cu',
                                'Zn', 'Y', 'Zr', 'Nb', 'Mo', 'Tc', 'Ru', 'Rh', 'Pd',
                                'Ag','Cd','Hf','Ta','W','Re','Os','Ir','Pt','Au','Hg',
                                'Rf','Db','Sg','Bh','Hs','Mt','Ds','Rg','Cn'],                            
    'Lantanidos' => ['La-Lu','La','Ce','Pr','Nd','Pm','Sm','Eu','Gd','Tb','Dy','Ho','Er','Tm','Yb','Lu'],
    'Actinidos' => ['Ac-Lr','Ac','Th','Pa','U','Np','Pu','Am','Cm','Bk','Cf','Es','Fm','Md','No', 'Lr'],
    'Otros metales' => ['Al', 'Ga', 'In', 'Sn', 'Tl','Pb','Bi','Nh','Fl','Mc','Lv'],
    'Metaloides' => ['B','Si','Ge','As','Sb','Te','Po'],
    'Halogenos' => ['F','Cl','Br','I','At','Ts'],
    'Gases nobles' => ['He','Ne','Ar','Kr','Xe','Rn','Og'],
    'Otros no metales' => ['H', 'C', 'N', 'O', 'P', 'S','Se']

];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Tabla Periodica</title>
</head>
<body >

<div style="font:icon">
    <h2>Tabla Periodica de los elementos</h2>
</div>
    
<?php foreach ($elementos as $elemento):?>

<?php if(in_array($elemento,$blockElemento)): ?>
     <div class ="filasBlock"> <?php echo "<span> &nbsp; </span>"?></div>
<?php else: ?>
    
        <?php if(in_array($elemento, $elementosClasificados["Alcalinos"])): ?> 
        <div class ="Alcalinos"> <?php echo "<span> {$elemento} </span>"?></div>
        <?php endif?>
        <?php if(in_array($elemento, $elementosClasificados["Alcalinoterreos"])): ?> 
        <div class ="Alcalinoterreos"> <?php echo "<span> {$elemento} </span>"?></div>
        <?php endif?>
        <?php if(in_array($elemento, $elementosClasificados["Metales de transicion"])): ?> 
        <div class ="MetalesTransicion"> <?php echo "<span> {$elemento} </span>"?></div>
        <?php endif?>
        <?php if(in_array($elemento, $elementosClasificados["Lantanidos"])): ?> 
        <div class ="Lantanidos"> <?php echo "<span> {$elemento} </span>"?></div>
        <?php endif?>
        <?php if(in_array($elemento, $elementosClasificados["Actinidos"])): ?> 
        <div class ="Actinidos"> <?php echo "<span> {$elemento} </span>"?></div>
        <?php endif?>
        <?php if(in_array($elemento, $elementosClasificados["Otros metales"])): ?> 
        <div class ="OtrosMetales"> <?php echo "<span> {$elemento} </span>"?></div>
        <?php endif?>
        <?php if(in_array($elemento, $elementosClasificados["Metaloides"])): ?> 
        <div class ="Metaloides"> <?php echo "<span> {$elemento} </span>"?></div>
        <?php endif?>
        <?php if(in_array($elemento, $elementosClasificados["Otros no metales"])): ?> 
        <div class ="OtrosNoMetales"> <?php echo "<span> {$elemento} </span>"?></div>
        <?php endif?>
        <?php if(in_array($elemento, $elementosClasificados["Halogenos"])): ?> 
        <div class ="Halogenos"> <?php echo "<span> {$elemento} </span>"?></div>
        <?php endif?>
        <?php if(in_array($elemento, $elementosClasificados["Gases nobles"])): ?> 
        <div class ="GasesNobles"> <?php echo "<span> {$elemento} </span>"?></div>
        <?php endif?>
        <?php if($elemento == "."): ?> 
        <div class ="filas"> <?php echo "<span> {$elemento} </span>"?></div>
        <?php endif?>
<?php endif ?>

<?php $cont++; ?>
<?php if($cont==18){
     echo "<br>"; 
     $cont=0;
} ?>

<?php endforeach?>

<br>

<?php foreach ($metalesRaros as $metalRaro):?>
<?php if(in_array($metalRaro,$blockElemento)): ?>
     <div class ="filasBlock"> <?php echo "<span> &nbsp; </span>"?></div>
<?php else:?>
        <?php if(in_array($metalRaro, $elementosClasificados["Lantanidos"])): ?> 
        <div class ="Lantanidos"> <?php echo "<span> {$metalRaro} </span>"?></div>
        <?php endif?>
        <?php if(in_array($metalRaro, $elementosClasificados["Actinidos"])): ?> 
        <div class ="Actinidos"> <?php echo "<span> {$metalRaro} </span>"?></div>
        <?php endif?>
        <?php if($metalRaro == "."): ?> 
        <div class ="filas"> <?php echo "<span> {$metalRaro} </span>"?></div>
        <?php endif?>
<?php endif?>
<?php $cont++; ?>
<?php if($cont==18){
     echo "<br>"; 
     $cont=0;
} ?>

<?php endforeach?>

<br>

<div class="leyenda">
   <div class="metales"><strong>Metales</strong></div>
   <div class="metalesA" style="background-color:#724A8F"><strong>Metales Alcalinos</strong></div>
   <div class="metalesA" style="background-color:#B073A8"><strong>Metales Alcalinoterreos</strong></div>
   <div class="metalesA" style="background-color:#DC981B "><strong>Metales de Transicion</strong></div>
   <div class="metalesB">
      <div class="" style="background-color:#D2A042"><strong>Lantanidos</strong></div>
      <div class="" style="background-color:#D37E99  "><strong>Actinidos</strong></div>
    </div>
   <div class="metalesA" style="background-color:#F8E600" ><strong>OTROS Metales</strong></div>
</div>
<div class="leyenda">
<div class="metaloides" style="background-color:#C1F800"><strong>Metaloides</strong></div>
<div class="metaloides1"style="background-color: "><strong>Metaloides</strong></div>
</div>
<div class="leyenda">
   <div class="noMetales"><strong>No metales</strong></div>
   <div class="noMetalesA"style="background-color: #68CD7D"><strong>Otros no metales</strong></div>
   <div class="noMetalesA"style="background-color: #00E7B8"><strong>No metales Halogenos</strong></div>
   <div class="noMetalesA"style="background-color: #009AE7"><strong>Gases nobles</strong></div>
</div>




</body>
</html>
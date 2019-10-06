<?php

$blockElemento =[]; 

$cont = 0;

$elementos = [0=>'H',
1=>'.',2=>'.', 3=>'.', 4=>'.', 5=>'.', 6=>'.', 7=>'.', 8=>'.', 9=>'.', 10=>'.', 11=>'.', 12=>'.', 13=>'.', 14=>'.', 15=>'.', 16=>'.', 17=>'He',
18=>'Li', 19=>'Be', 20=>'.', 21=>'.', 22=>'.',23=>'.',24=>'.',25=>'.', 26=>'.', 27=>'.', 28=>'.', 29=>'.', 30=>'B', 31=>'C', 32=>'N', 33=>'O',
34=>'F', 35=>'Ne', 36=>'Na', 37=>'Mg', 38=>'.', 39=>'.', 40=>'.', 41=>'.', 42=>'.', 43=>'.', 44=>'.', 45=>'.', 46=>'.', 47=>'.', 48=>'Al', 49=>'Si',
50=>'P', 51=>'S', 52=>'Cl', 53=>'Ar', 54=>'K', 55=>'Ca', 56=>'Sc', 57=>'Ti', 58=>'V', 59=>'Cr', 60=>'Mn', 61=>'Fe', 62=>'Co', 63=>'Ni',64=>'Cu',
65=>'Zn',66=>'Ga',67=>'Ge',68=>'As',69=>'Se',70=>'Br',71=> 'Kr', 72=>'Rb',73=>'Sr',74=>'Y',75=>'Zr',76=>'Nb',77=>'Mo',78=>'Tc',79=>'Ru',80=>'Rh',
81=>'Pd',82=>'Ag',83=>'Cd',84=>'In',85=>'Sn',86=>'Sb',87=>'Te',88=>'I',89=>'Xe',90=>'Cs', 91=>'Ba', 92=>'La-Lu', 93=>'Hf', 94=>'Ta', 95=>'W',
96=>'Re',97=>'Os',98=>'Ir',99=>'Pt',100=>'Au',101=>'Hg',102=>'Tl',103=>'Pb',104=>'Bi',105=>'Po',106=>'At',107=>'Rn', 108=>'Fr', 109=>'Ra',
110=>'Ac-Lr',111=>'Rf',112=>'Db',113=>'Sg',114=>'Bh',115=>'Hs',116=>'Mt',117=>'Ds',118=>'Rg',119=>'Cn',120=>'Nh',121=>'Fl',122=>'Mc',123=>'Lv',
124=>'Ts',125=>'Og'];

$metalesRaros = ['.','.','.',3=>'La',4=>'Ce',5=>'Pr',6=>'Nd', 7=>'Pm', 8=>'Sm', 9=>'Eu',10=>'Gd',11=>'Tb',12=>'Dy',13=>'Ho',
                 14=>'Er',15=>'Tm',16=>'Yb',17=>'Lu', 18=>'.', 19=>'.', 20=>'.', 21=>'Ac', 22=>'Th', 23=>'Pa', 24=>'U',
                 25=>'Np',26=>'Np', 27=>'Am', 28=>'Cm', 29=>'Bk', 30=>'Cf', 31=>'Es', 32=>'Fm', 33=>'Md', 34=>'No', 35=>'Lr'
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

    <style>
    .filasBlock{
     border-style: solid;
   width: 60px;
   height: 60px;
   display: inline-block;
   margin-top: 2px;
   background-color: gray;
   border-color: gray;
}
    </style>
</head>
<body >

<div style="font:icon">
    <h2>Tabla Periodica de los elementos</h2>
</div>

<?php $aux1=0; ?>    
<?php foreach ($elementos as $key=>$elemento):?>

<?php if($aux1==1): ?>
<div class ="filasBlock"><?php echo "<span> &nbsp; </span>"?></div>
<?php endif?>
<?php if($cont==17 && $aux1==1){echo"<br>"; $cont=0;}?>

<?php if(array_key_exists($key+1,$elementos)==false && $key!=125): ?>
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
        <?php $aux1=1;?>
        

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
        <?php $aux1=0;?>
<?php endif ?>

<?php $cont++; ?>
<?php 
if($aux1==1){
     $cont=$cont+1;
} 
if($cont==18){
     echo "<br>"; 
     $cont=0;
}?>

<?php endforeach?>

<br>

<?php $aux=0?>
<?php foreach ($metalesRaros as $key=>$metalRaro):?>

<?php if($aux==1): ?>
<div class ="filasBlock"><?php echo "<span> &nbsp; </span>"?></div>
<?php endif?>
<?php if(array_key_exists($key+1,$metalesRaros)==false && $key!=35): ?>
        <?php if(in_array($metalRaro, $elementosClasificados["Lantanidos"])): ?> 
        <div class ="Lantanidos"> <?php echo "<span> {$metalRaro} </span>"?></div>
        <?php endif?>
        <?php if(in_array($metalRaro, $elementosClasificados["Actinidos"])): ?> 
        <div class ="Actinidos"> <?php echo "<span> {$metalRaro} </span>"?></div>
        <?php endif?>
        <?php if($metalRaro == "."): ?> 
        <div class ="filas"> <?php echo "<span> {$metalRaro} </span>"?></div>
        <?php endif?>
        <?php $aux = 1;?>
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
        <?php $aux=0;?>
<?php endif?>


<?php $cont++; ?>
<?php 
if($aux==1){
     $cont=$cont+1;
}
if($cont==18){
     echo "<br>"; 
     $cont=0;
} 
?>
<?php endforeach?>

<br><br>

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
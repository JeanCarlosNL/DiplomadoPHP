<?php

// Parte izquierda
$quienSoy=['Soy una persona humilde', 'Soy trabajador', 'Me considero alguien amigable con quien compartir', 
          'Soy una persona responsable con sus deberes'];

$programas =['Paquete Office', 'Visual Studio', 'Dreamweaver', 'SQLServer'];

$idiomas=['Ingles', 'Frances', 'Japones', 'Aleman', 'Ruso'];

$referencias = ["Persona1" => ["Nombre"=>"Scarlen Liriano", "Telefono"=>"8096548956", "Correo"=>"scarlen@gamil.com"],
"Persona2" => ["Nombre"=>"Carlos Andres Nuñez", "Telefono"=>"8096548747" , "Correo" => "carlos@hotmail.com"]
];

//Parte derecha

$experiencias =['Gerente en restaurante', 'Encangado de mantenimiento TI', 'Auxiliar de Software'];

$estudios = ['Certificado de Secundaria', 'Tecnologo en Software (ITLa)'];

$skills = ['Liderazgo', 'Capacidad para trabajar en equipo', 'Responsabilidad', 'Buena interpretacion de',
           'Resolucion de problemas'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body >
    
    <article>
        
      <!-- Seccion Izquierda -->
      <section class="izquierda" >

      <div style="color:transparent">No pueden verme, jajaja</div>
      <div class="nombre padre" style="color:transparent">
      </div>
        
       <!-- Quien soy  -->
       <?php if(empty($quienSoy)):?>
         <div></div>
       <?php else:?>
       <div class="izquierdaItems">
       <p class="pIzquiertaTitulo"> QUIEN SOY</p>
       <?php foreach($quienSoy as $descripcion):?>
          <p class="pIzquierdaItem"><?php echo $descripcion?></p>
        <?php endforeach?>
        </div>
        <br>
        <hr id="hr" name="hr">
        <?php endif?> 
        <!-- Fin Quien Soy--> 


        <?php if(empty($programas)):?>
         <div></div>
       <?php else:?>
       <div class="izquierdaItems">
       <p class="pIzquiertaTitulo">PROGRAMAS</p>
       <?php foreach($programas as $programa):?>
       
          <p class="pIzquierdaItem" style="text-align:center; padding-left:0px"><?php echo $programa?></p>
          
        <?php endforeach?>
        </div>
        <br>
        <hr id="hr" name="hr">
        <?php endif?>

        <!--Idiomas-->
        <?php if(empty($idiomas)):?>
         <div></div>
       <?php else:?>
        
       <div class="izquierdaItems">
       <p class="pIzquiertaTitulo" >IDIOMAS</p>
       <?php foreach($idiomas as $idioma):?>
       
          <p class="pIzquierdaItem" style="text-align:center; padding-left:0px"><?php echo $idioma?></p>
          
        <?php endforeach?>
        </div>
        <br>
        <hr id="hr" name="hr">
        <?php endif?>

        <!-- Fin Idiomas-->

      <?php if(empty($referencias)):?>
         <div></div>
       <?php else:?>

       <!-- Referencias-->
        
       <div class="izquierdaItems">
       <i class="fa fa-car" style="font-size:48px;" style=""></i><p class="pIzquiertaTitulo">REFERENCIAS</p>
       <?php foreach($referencias as $referencia=>$persona):?>
          
          <?php foreach ($persona as $key=>$datos): ?> 
          <div class="pIzquierdaItem">
          <span style="font-family:'Comic Sans MS', cursive, sans-serif"><?php echo "$key:"?></span> <?php echo $datos?>
          </div>
          <?php endforeach?>
          <br>
        <?php endforeach?>
        </div>
        <?php endif?>
        <!-- Fin Referencias-->
      
      
      </section>

      <section class="derecha">

      <div style="color:transparent">No pueden verme, jajaja</div>
      <div class="nombre" >Jean Carlos Nuñez Liriano</div>

      <?php if(empty($experiencias)):?>
         <div></div>
       <?php else:?>
       <div class="izquierdaItems">
       <p class="pDerechaTitulo">EXPERIENCIA LABORAL</p>
       <?php foreach($experiencias as $experiencia):?>
          <p class="pDerechaItem"><?php echo $experiencia?></p>
        <?php endforeach?>
        </div>
        <?php endif?> 

        <?php if(empty($estudios)):?>
         <div></div>
       <?php else:?>
       <div class="izquierdaItems">
       <p class="pDerechaTitulo">ESTUDIOS</p>
       <?php foreach($estudios as $estudio):?>
          <p class="pDerechaItem"><?php echo $estudio?></p>
        <?php endforeach?>
        </div>
        <?php endif?> 

        <?php if(empty($skills)):?>
         <div></div>
       <?php else:?>
       <div class="izquierdaItems">
       <p class="pDerechaTitulo">SKILLS</p>
       
       <?php foreach($skills as $skill):?>
          <p class="pDerechaItem"><?php echo $skill?></p>         
        <?php endforeach?>
        
        </div>
        <?php endif?> 
      
      </section>
    
    </article>



</body>
</html>
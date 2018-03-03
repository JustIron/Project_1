<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $jmeno = 'Jirka';
        $mesice = array("leden", "únor", "březen", "duben", "květěn", "červen",
            "červenec", "srpen", "září", "říjen", "listopad", "prosinec");
        $den = date("j");
        $mesic = date ("m");
        $mesicSlovy = $mesice[$mesic - 1];
        $rok = date ("Y");
        
      
        
        
        echo("Ahoj, dnes je $den. $mesicSlovy $rok");
        ?>
    </body>
</html>

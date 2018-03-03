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
        $znamky = array(5,5,5,5,2,2,4,5);
        $prumer = array_sum($znamky) / count ($znamky);
      
        
        
        echo("Můj průměr je $prumer.");
        ?>
    </body>
</html>

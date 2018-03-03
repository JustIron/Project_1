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
        $znamky = array();
       
        
        $znamky[0] = 1;
        $znamky[1] = 2;
        $znamky[2] = 1;
        $znamky[3] = 4;
        
        print_r($znamky);
        echo("Třetí známka v poli je " . $znamky[2] . ".");
        ?>
    </body>
</html>

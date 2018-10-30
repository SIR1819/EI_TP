<?php
$today = date("l");
$contador = 2;

$dias = array();
$dias[] = "Domingo";
$dias[] = "Segunda";
$dias[] = "Terça";


function writeXTimes($times) {
    global $today;
    for ($i = 0 ; $i < $times; $i++) {
        //echo "<h1>" . $today . "</h1>";
        echo "<h1> $today </h1>"; // substitui variaveis
        echo '<h1> $today </h1>'; // string literal
    } 
}

function incrementa(&$valor) {
    $valor = $valor + 1;
}


?>
<html>
<head>
</head>
<body>
    <h1> Hi today is Monday </h1>
    <h1> Hi today is <?php echo $today;?> </h1>
    <?php
        writeXTimes(5);
        incrementa ($contador);
        echo "<h6>".$contador."</h6>";
        foreach ($dias as &$diadasemana) {
            $diadasemana = "Sábado";
        }
        foreach ($dias as $diadasemana) {
            echo "<h3> $diadasemana </h3>";
        }

        $a = array('bananas'=>1,'maças'=>2,'abacates'=>3);
        $b = array('maças'=>2,'abacates'=>3,'bananas'=>1);

        $var1 = "1" + 1;  //  2
        $var2 = "1" . 1;  // 11  
        $var3 = 1 . 1;    // 11
        $var4 = "1110a" + 2; // 1110 + 2 = 1112
        $var5 = "a1" + 3;  // 0+3 = 3

        echo "<h3> $var1 </h3>";
        echo "<h3> $var2 </h3>";
        echo "<h3> $var3 </h3>";
        echo "<h3> $var4 </h3>";
        echo "<h3> $var5 </h3>";

        foreach ($a as $fruta=>$quantidade) {
            echo "<h3> existem $quantidade de $fruta </h3>";
        }

        var_dump($a);

        if ($a == $b) {
            echo ("UAU! São Iguais!!!!");
        } else {
            echo ("M..DA!!! são diferentes!!!");
        }

    ?>

</body>
</html>
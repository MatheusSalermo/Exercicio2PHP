<?php
$tg=8; //tempo gasto na viagem em horas
$vm = 60; //velocidade média durante a viagem
    
    $d=$tg*$vm; // cálculo da distância
    
    $lu=$d/12; // cálculo da quantidade de litros de combustivel usado na viagem
    
echo("A velocidade média na viagem foi de: ".$vm." km/h");
    
echo("<br><br>O tempo gasto na viagem foi de: ".$tg." horas");

echo("<br><br>A distância percorrida na viagem foi de: ".$d." km");

echo("<br><br>A quantidade de combustível (em litros) gasto na viagem foi de: ".$lu." L");
?>
<div class="titulo">Variáveis</div>

<?php

$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16; 
$somaDosNumeros = $a + $b;
echo $somaDosNumeros;


echo '<br>';
echo isset($somaDosNumeros);

unset ($somaDosNumeros);
//echo unset($somaDosNumeros);
//var_dump($somaDosNumeros);

$variavel = 10;
echo '<br>' . $variavel;
 
$variavel = "Agora sou uma string!";
echo '<br>' . $variavel;

// Nome de variável
$var = 'valida';
$var2 = 'valida';
$var3 = 'valida';
$_var_4 = 'valida';
$vãr5 = 'valida'; // evitar
//$6var = 'invalida';
//$%var7 = 'invalida';
//$var8% = 'invalida';

echo '<br>'; 
var_dump($_SERVER["HTTP_HOST"]);

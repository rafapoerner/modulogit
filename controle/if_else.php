<div class="titulo">If Else</div>

<?php

if(true) {
    echo "Serei Impresso? <br>";
}    

if (true) {
     echo "Verdadeiro - Parte A<br>";
     echo "Verdadeiro - Parte B<br>";
} else {
    echo "Falso - Parte A";
    echo "Falso - Parte B";
} 

if (false) {
   echo "Passo A<br>";
}
else if (false) {
    echo "Passo B<br>"; 
}
else if (false) {
    echo "Passo C<br>"; 
}
else  {
    echo "Último passo<br>"; 
}

echo "Fim<br>";
<div class="titulo">Desafio switch</div>

<form action="#" method="post"> 
  <input type="text" name="param">
  <select name="conversao" id="conversao">
      <option value="km-milha">Km > Milha</option>
      <option value="milha-km">Milha > Km</option>
      <option value="metro-km">Metros > Km</option>
      <option value="km-metro">Km > Metros</option>
  </select>
  <button>Calcular</button>

</form>
<style>
    form > * {
        font-size: 1.8rem
    }
</style>

<?php
const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;

$param = $_POST ['param'] ?? 0: 
switch ($variable) {
    case 'km-milha':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param Km = $distancia Milhas";
        break;
    case     
    
    default:
        # code...
        break;
}


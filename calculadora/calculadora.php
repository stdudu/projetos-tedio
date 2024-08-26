<?php
  $n = $_POST['n'];
  $x = $_POST['x'];
  $y = $_POST['y'];
  $op = $_POST['op'];
  
  
  for($i = 0; $i < $n; $i++){
    if($op == "op-soma"){
      echo "Operação escolhida: Adicao<br><br>";
      echo "$x + $y = ".($x+$y)."<br>";
    }
    else if($op == "op-sub"){
      echo "Operação escolhida: Subtração<br><br>";
      echo "$x + $y = ".($x+$y)."<br>";
    }
    else if($op == "op-multi"){
      echo "Operação escolhida: Multiplicacao<br>";
      echo "$x x $y = ".($x*$y)."<br>";

  }
}
  if($op == "op-div"){
    echo "Operação escolhida: Divisao<br>";
    if($y == 0){
      echo "<p>Impossível dividir $x por $y!!</p><br>";
      echo "<p>Obs: escolha um valor para $y que seja diferente de (0)</p><br>";
      echo "<label for='y'>Y:</label><br>";
      echo "<input type='number' name='y' id='y'>";
    }
    else
    echo "$x ÷ $y = ".($x/$y)."<br>";
  }
?>
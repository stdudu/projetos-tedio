<?php
function CalculaDelta($a, $b, $c){
    return pow($b,2) - (4 * $a * $c);
}
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

$delta = CalculaDelta($a, $b, $c);
if($a == 0){
    echo "x = ".-($c)."/".$b."\n<br>";
    echo "x = ".-($c/$b)."\n<br>";
}
else if($a > 0 and $delta < 0){
  echo "<h1 style='font-weight: 150;'>Bhaskara</h1>";
  echo "Δ = $delta\n\n<br>";
  echo "Nao admite solucao real\n<br>";
}
else if($a == $c and ($b/$a) == 2){
  echo "<h1 style='font-weight: 150;'>Bhaskara</h1>";
  echo $a."x² + (".$b."x) + (".$c.") = 0\n<br>";
  echo "Δ = $delta\n\n<br>";
  echo "x = b / 2a\n<br>";
  echo "x = ".$b." / ("."2x".$a.")\n<br>";
  echo "x = ".$b."/".(2*$a)."\n<br>";
  echo "x = ".$b/(2*$a)."\n<br>";
}
else{
    echo "<h1 style='font-weight: 150;'>Bhaskara</h1>";
    echo $a."x² + (".$b."x) + (".$c.") = 0\n<br>";
    echo "Δ = $delta\n\n<br>";
    echo "x = -b ± √Δ / 2a\n<br>";
    echo "x = ".-$b." ± √$delta / (2x".$a.")\n<br>";
    echo "x = ".-$b." ± √$delta / ".(2*$a)."\n<br>";
    echo "x = ".-$b." ± ".number_format(sqrt($delta), 1, ".", "")." / ".(2*$a)."\n\n<br>";
    echo "x1 = ".number_format(((-$b + sqrt($delta))), 1, ".", "")." / ".(2*$a)."\n<br>";
    echo "x1 = ".number_format(((-$b + sqrt($delta))/(2*$a)), 2, ".", "")."\n\n<br>";
     echo "x2 = ".number_format(((-$b - sqrt($delta))), 1, ".", "")." / ".(2*$a)."\n<br>";
    echo "x2 = ".number_format(((-$b - sqrt($delta))/(2*$a)), 2, ".", "")."\n\n<br>";
}


?> 

<?php   
    
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    $y = $b * $b - 4 * $a * $c;
    if ($y > 0){
        $x1 = (-$b - sqrt($y))/2*$a;
        $x2 = (-$b + sqrt($y))/2*$a;
        echo ('Równanie ma dwa rozwiązania');
        echo ('x1= ' . $x1);
        echo ('x2= ' . $x2);
    }
     

?>
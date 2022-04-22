<?php
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $y = $b * $b - 4 * $a * $c;
    if ($y > 0){
        $x1 = round(10*(-$b - sqrt($y))/2*$a)/10;
        $x2 = round(10*(-$b + sqrt($y))/2*$a)/10;
        echo ('Równanie ma dwa rozwiązania ');
        echo ('<br>');
        echo ('x1 = ')   . $x1;
        echo ('<br>');
        echo ('x2 = ')  . $x2;
    }
    elseif($y==0){
        $x0 = (-$b / 2*$a);
        echo ('Równanie ma jedno rozwiązanie');
        echo ('<br>');
        echo ('x0 = ')   . $x0;
    }
     else{
         echo ('Brak rozwiązania, delta jest ujemna');
     }

?>
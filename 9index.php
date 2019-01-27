<?php 
    $firstname ="Jameson";
    $lastname = "Smith";
    $space=" ";
    echo $firstname,$space,$lastname;
?>

<?php

$x = 1;

while ($x <= 10) {
    
        if ($x % 3 == 0 AND $x % 5 == 0) {
            echo "$x: FIZZBUZZ!<br/>";
        } elseif ($x % 3 == 0) {
            echo "$x: FIZZ!<br/>"; 
        } elseif ($x % 5 == 0) {
            echo "$x: BUZZ!<br/>";
        } else {    
            echo "$x<br/>";
        }

    
        $x++;
}





?>

<?php

    echo date('Y');
    echo date('l jS \of F Y h:i:s A');


?>







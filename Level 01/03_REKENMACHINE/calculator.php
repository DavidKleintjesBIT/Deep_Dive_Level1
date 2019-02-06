<?php
$operator = readline(" Welke operatie wil je uitvoeren? (+, -)");
if ($operator == "+" or $operator == "-") {
    $getal1 = readline(" eerste getal?");
    if (is_numeric($getal1)) {
        $getal2 = readline(" tweede getal?");
        if (is_numeric($getal2)) {

            $totaal = (int)$getal1 + $operator + (int)$getal2;
            echo "Uw resultaat is: $totaal";
        }
        else {
            echo "Dit is geen geldige input, begin opnieuw.";

        }
    }
    else {
        echo "Dit is geen geldige input, begin opnieuw.";

    }
}
else {
    echo "Dit is geen geldige input, begin opnieuw.";
}


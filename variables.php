<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <?php
        $variavelnula;
        echo "<p>".$variavelnula."</p>"; //error

       
        $variavelString123 = "um, dois, três";
        echo "<p>".$variavelString123."</p>";
       
        $variavelInteger = 123;
        echo "<p>".$variavelInteger."</p>"; 

        $variaveldouble = 0.12;
        echo "<p>".$variaveldouble."</p>";


        define("constanteCaseSensitive", "CASE_SENSITIVE");
        echo constanteCaseSensitive;
    ?>
</body>
</html>
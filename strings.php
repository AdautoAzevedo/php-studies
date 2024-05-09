<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Funções string
        $stringComEspacosEmVolta = "  dois espaços em cada lado";
        echo "{".$stringComEspacosEmVolta."}";

        $stringSemEspacosEmVolta = trim($stringComEspacosEmVolta);
        echo "{".$stringSemEspacosEmVolta."}";

        $stringNormal = "String na ordem normal";
        $stringInvertida = strrev($stringNormal);
        echo $stringInvertida;

        $variavelTextoOriginal = "PHP is easy";
        $variavelTextoAlterado = str_replace("PHP", "Java", $variavelTextoOriginal);

    ?>
</body>
</html>
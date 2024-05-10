<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
        /* There are two ways to create an array in PHP: */

        // With square brackets
        $fruits = ["apple", "banana", "caju"];

        // And using the "array()" function
        $juices = array("strawberry", "mango", "limon");

        // We can access it by using its index:

        echo $fruits[1]; //banana
        echo $juices[0]; // strawberry

        /* Arrays in PHP may also be associative */

        $person = array(
            "name" => "Peter",
            "age" => 30,
            "city" => "London"
        );

        // Accessing elements of associative arrays requires using its key
        echo $person["name"]; //Peter
    ?>
</body>
</html>
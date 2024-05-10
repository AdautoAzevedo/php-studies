<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process form</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        echo "Name: ".$name."<br>";
        echo "Email: ".$email."<br>";
        echo "Message".$message."<br>";
    } else {
        header("Location: index.html");
        exit();
    }
    ?>
</body>
</html>
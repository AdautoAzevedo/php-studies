<?php
        $servername = "localhost";
        $username = "root";
        $password = "password";
        $dbname = " mydb";
    
        $conn = new mysqli($servername, $username, $password,$dbname);
    
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        //Create
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];

            $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

            if ($conn->query($sql === TRUE)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        //Update
        if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];

            $sql = "UPDATE users SET name = '$name', email = '$email' WHERE id=$id";

            if ($conn->query($sql === TRUE)) {
                echo "Record updated successfully";
            } else {
                "Error updating record: " . $conn->error;
            }
            

        }
?>
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

        //Read
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);

        echo "<h2>Users</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Id</th><th>Name</th><th>Email</th></tr>";

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td></tr>";
            } 
        } else {
            echo "0 results";
        }

        echo "</table>";

        //Delete
        if (isset($_POST['delete'])) {
            $id = $_POST['id'];

            $sql = "DELETE FROM users WHERE id=$id";

            if ($conn->query($sql) === TRUE) {
                echo "Record deleted successfully";
            } else {
                echo "Error deleting record: " . $conn->error;
            }
            
        }
?>
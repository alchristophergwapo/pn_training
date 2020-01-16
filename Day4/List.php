<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "christopher";
        $database = "pntraining";
        
        // Creating connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $query = "SELECT * FROM persons";

        $result = $conn->query($query);

        if($result) {
            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tbody>";
                        echo "<tr>";
                            echo "<td>" . $row["first_name"] . "</td>";
                            echo "<td>" . $row["middle_name"] . "</td>";
                            echo "<td>" . $row["last_name"] . "</td>";
                            echo "<td>" . $row["email"] . "</td>";
                            $id = $row['id'];
                            echo "<td><a href='Delete.php?id=$id'>Delete</a></td>";
                            echo "<td><a href='EditData.php?id=$id'>Edit</a></td>";
                        echo "</tr>";
                    echo "<tbody>";
                }
            }
        }

        $conn->close();
    ?>
</body>
</html>
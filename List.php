<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        // $password = "2ndyrGroupA";
        $password = "";
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
                            echo "<td>" . $row["item"] . "</td>";
                            echo "<td>" . $row["quantity"] . "</td>";
                            echo "<td>" . $row["price"] . "</td>";
                            echo "<td>" . $row["amount"] . "</td>";
                            $id = $row['id'];
                            echo "<td><a href='Delete.php?id=$id'><i class='fas fa-trash-alt' style='font-size:24px'></i></a></td>";
                            echo "<td><a href='EditData.php?id=$id'><i class='fas fa-edit' style='font-size:24px'></i></a></td>";
                        echo "</tr>";
                    echo "<tbody>";
                }
            }
        }

        $conn->close();
    ?>
</body>
</html>
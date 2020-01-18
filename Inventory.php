<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventory</title>
</head>
<body>
<?php

$servername = "localhost";
$username = "root";
$password = "2ndyrGroupA";
// $password = "";
$database = "pntraining";

// Creating connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$query = "SELECT * FROM items";

$result = $conn->query($query);

if($result) {
    if(mysqli_num_rows($result) > 0) {
        echo "<tbody>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
                echo "<td>" . $row["item"] . "</td>";
                echo "<td>" . $row["price"] . "</td>";
                echo "<td>" . $row["quantity"] . "</td>";
                $id = $row['id'];
                echo "<td><a href='Delete_item.php?id=$id'><i class='fas fa-trash-alt' style='font-size:24px;color:red'></i></a></td>";
                echo "<td><a href='Edit_item.php?id=$id'><i class='far fa-edit' style='font-size:24px'></i></a></td>";
            echo "</tr>";
        }
        echo "<tbody>";
    }
}

$conn->close();
// $query = "INSERT INTO items (item, price, quantity) 
//     VALUES ('Osaka Sardines', 20, 10),
//             ('Lucky Me Pancit Cantoon', 10, 10),
//             ('Royal Orange sakto', 10, 10),
//             ('Coke sakto', 10, 10),
//             ('Beef Loaf', 25, 10),
//             ('Sprite sakto', 10, 10),
//             ('Pan', 5, 10)";

// if($conn->query($query)) {
//     echo "Done";
// }
?>
</body>
</html>
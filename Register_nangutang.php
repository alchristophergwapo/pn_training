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

$done = false;
$res = "";

if(isset($_POST['add_palautang'])) {
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $item = $_POST['item'];
    $quantity = $_POST['quantity'];
    // $price = $_POST['price'];
    $get_item = "SELECT item, quantity, price FROM items WHERE item='".$item."'";
    
    $result = $conn->query($get_item);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            $price = $row['price'];
            
            $amount = $price * $_POST['quantity'];

            $query = "INSERT INTO persons (first_name, middle_name, last_name, item, quantity, price, amount) 
                    VALUES ('".$first_name."', '".$middle_name."', '".$last_name."', '".$item."', 
                    $quantity, $price, $amount )";

            if($conn->query($query)) {
                echo "Added successfully!";
                $done = true;
                $quant = $row['quantity'] - $quantity;
                $update = "UPDATE items SET quantity=$quant WHERE item='".$item."'";

                if($conn->query($update)) {
                    echo "done!";
                }else {
                    echo "Error";
                }
            }

        }  else{
            echo "Item not found!";
        }
        
       
    } else {
        echo "Unsuccessful!" . $conn->error;
        $done = false;
    }
            
}

$conn->close();

if($done) {
    header("Location: Home.php");
    exit();
} 
?>
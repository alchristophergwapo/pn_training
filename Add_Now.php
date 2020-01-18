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

if(isset($_POST['add_item'])) {
    $item = $_POST['item'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    $get_item = "SELECT item, quantity, price FROM items WHERE item='".$item."'";
    
    $result = $conn->query($get_item);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
                $done = true;
                $quant = $row['quantity'] + $quantity;
                $update = "UPDATE items SET quantity=$quant, price=$price WHERE item='".$item."'";

                if($conn->query($update)) {
                    // echo "done!";
                    // $done = true;
                    // return true;
                    header("Location: Home.php");
                }else {
                    echo "Error";
                    return false;
                    $done = false;
                }
            

        }  else{
            $query = "INSERT INTO items (item, quantity, price 
                    VALUES ('".$item."', $quantity, $price )";

            if($conn->query($query)) {
                return true;
                $done = true;
            }
            else {
                return false;
                $done = false;
            }
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
<?php
$servername = "localhost";
$username = "root";
$password = "2ndyrGroupA";
$database = "pntraining";

// Creating connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$done = false;
$res = "";

if(isset($_POST['signup'])) {
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $repeat_password = $_POST['re_pass'];

    if($pass === $repeat_password) {

        $query = "INSERT INTO persons (first_name, middle_name, last_name, email, pass) 
            VALUES ('".$first_name."', '".$middle_name."', '".$last_name."', '".$email."', '".$pass."')";

        $find_user = "SELECT email FROM persons WHERE email='".$email."'";

        $result = $conn->query($find_user);

        if($result) {
            if(mysqli_num_rows($result) > 0) {
                $done = false;
                $res.= "$email already exist!";
                header("Location: Register.php");
                exit();
            } else {
                if($conn->query($query)) {
                    echo "Added successfully!";
                    $done = true;
                } else {
                    echo "Unsuccessful!";
                    $done = false;
                }
            }
        }
        
    }
}

$conn->close();

if($done) {
    header("Location: index.php");
    exit();
} 
?>
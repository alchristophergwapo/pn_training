<?php
session_start();

if(!isset($_SESSION['username'])) {
    $_SESSION['username'] = $_POST['email'];
} else {
    session_unset();
}

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

$login = false;

if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $query = "SELECT email, pass FROM persons WHERE email='".$email."'";

    if($result = $conn->query($query)) {
        if (mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_array($result);
            if($user_data['email'] === $email && $user_data["pass"] === $pass) {
                $login = true;
                echo $login;
            }
            else {
                $login = false;
                echo "Error 404!";
            }
        } 
        else {
            echo "No result found!<br>We are not able to find your account. Try loging in again";
            header("Location: Login.php");
        }
    }
}

if($login) {
    header("Location: index.php");
}
exit();
// header("Location: Auth_user.php");

$conn->close();
?>

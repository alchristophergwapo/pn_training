<?php
session_start();
class Activity2{
    
    // Write a program that uses public and private variables and functions in a class.
    // OUTPUT:
    public $username;
    private $password;
    public $email;
    public $browser = array('Firefox','Chrome','Internet Explorer','Safari','Opera');
    // file content should have public and private methods, including public and private variables

    public function __construct($username, $email, $password) {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    public function get_username() {
        return $this->username;
    }

    private function get_password() {
        return $this->password;
    }

    public function password_display() {
        return $this->get_password();
    }
    
}
$activity2 = new Activity2("toper","toper@gmail.com","gwapo");
// 2. Using session, create a variable that stores your name and email, then choose browser from a given array (
    // 'Firefox','Chrome','Internet Explorer','Safari','Opera'
    // )
    

    if (isset($_SESSION["username"]) && isset($_SESSION["email"]) && isset($_SESSION["browser"])) {
        echo "Already in session.<br>";
    } else {
        $_SESSION["username"] = $activity2->username;
        $_SESSION["email"] = $activity2->email;
        $_SESSION["browser"] = $activity2->browser;

    }

    echo "username : " . $_SESSION["username"];
    echo "<br>";
    echo "email : " . $_SESSION["email"];
    echo "<br>";
    echo "browser : " . $_SESSION["browser"][1];
    echo "<br>";

    // 3. Write a program to find the maximum and minimum marks from the following set of arrays. 
    // Sample arrays :
    $marks1 = array(360,310,310,330,313,375,456,111,256);
    $marks2 = array(350,340,356,330,321);
    $marks3 = array(630,340,570,635,434,255,298);
    // Expected Output :
    // Maximum marks : 635
    // Minimum marks : 111
    function get_min($array) {
        echo "Minimum marks : " . min($array) . "<br>";
    }
    function get_max($array) {
        echo "Maximum marks : " . max($array) . "<br>";
    }

    get_min($marks1);
    get_max($marks1);
// echo $activity2->get_username();
?>
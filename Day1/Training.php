<?php
    // echo gettype("I'm PHP");

    // objects 
    class greeting{
        // properties
        public $str = "Hello World!"; 
        public $str2 = "Hello Earth!<br>";

        // methods
        function show_greating() {
            return $this->str2;
        }

        function show_greating2() {
            $foo = "C Ako";
            return $foo+"<br>";
        }
    }

    $message = new greeting; // declaring a new variable in the instance of our object greeting
    var_dump($message->show_greating()); // displaying our variable message with the instance of our object greeting

    define("test", "kani sha"); // constant variables

    echo "Thank you for visiting - " . test,"<br>";

    // String 
    var_dump("I am Tope"); // print

    echo "<br> Ako si Tope"; // print

    $name = "Tope";

    echo $name . "is friends with Judy. <br>"; // print

    // conditions
    $num = 10;

    if($num <= 9) {
        echo "I am less than or equal to nine.<br>";
    } else {
        echo "I am not.<br>";
    }

    // switch
    $month = "Feb";
    switch ($month) {
        case 'Jan':
            # code...
            echo "January <br>";
            break;
        
        case 'Feb':
            # code...
            echo "February <br>";
            break;
        case "Mar":
            # code...
            echo "March";
            break;
        default:
            # code...
            echo "Month does not exist <br>";
            break;
    }

    // arrays
    // $array[0] = "value";
    // $array = array(0 => "value2");
    // $array = [0 => "value"];
    $array = ["toper", "claire","judy","aira","daine"];

    array_push($array,"mibel", "jorge"); // adding another elements to our array

    array_splice($array, 6); // removing certain element in the array in the index of 6

    var_dump($array,"<br>"); // Printing values using var_dump()

    print_r($array); // Printing values using print_r()
    echo "<br>";

    // for loop
    echo "for loop <br>";
    for ($i=0; $i < count($array); $i++) { 
        # code...
        echo $array[$i] . "<br>";
    };
    // for each
    echo "for each <br>";
    foreach($array as $friend) {
        echo $friend . "<br>";
    };

    // while loop
    echo "while loop <br>";
    $i = 0;
    while($i != count($array)) {
        echo $array[$i] . "<br>";
        $i++;
    };

    // do while loop
    echo "do while loop <br>";
    $j = 0;
    do {
        # code...
        echo $array[$j] . "<br>";
        $j++;
    } while($j != count($array));
    // Note: echo cannot handle arrrays, only var_dump() and print_r();

    // Associative arrays
    $friends = array("me" => "tope", "closest_to_mine" => "judy", "close_niya" => "aira");

    print_r($friends);
    echo "<br>";
    print_r($friends["closest_to_mine"] . "<br>");

    // Multi-dimensional array
    $movie = array(
        "actions" => array(
            0 => "John Wick",
            1 => "Transporter"
        ),
        "comedy" => array(
            0 => "Revenger Squad",
            1 => "The Mall The Merrier"
        ),
    );

    print_r($movie);

?>
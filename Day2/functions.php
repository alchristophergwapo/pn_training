<?php

    // 1. function that can get the sum of two numbers.
    function getSum($x, $y) {
        echo "Sum = " . ($x + $y) . "<br>";
    }

    // 2. function that can display data in an array
    function displayData($array) {
        foreach ($array as $val) {
            # code...
            echo $val . "<br>";
        }
    }
    // 3. function that can display multidimensional array
    //     food:
    //         Go, Glow, Grow (numeric array)
    //     section:
    //         (associative array)
    //         sectionA : 5 names
    //         sectionB : 5 names
    //     ph_presidents: 3 best presidents (numeric)
    function displayMultiDimensionalArray($array) {
        foreach ($array as $key) {
            # code...
            echo "<h2>" . key($array) . "</h2>";
            foreach ($key as $val) {
                if(gettype($val) == "array"){
                    echo "<h3>" . key($key) . " are : </h3><br>";
                    // print_r($key);
                    // echo "<br>";
            
                    foreach ($val as $values) {
                        # code...
                        echo "<li> $values </li><br>";
                       
                    }
                    next($key);
                } else {
                    echo "<li> $val<br>";
                };
                
            }
            next($array);
            
        }
    }
    // 4. function that can create associative array and return it in your working file.
    
    function createAssociativeArray(string $key, $value) {
        $associativeArray = [];
        $array = array($key => $value);
        array_push($associativeArray, $array);
        return $associativeArray;
    }
    // 5. function that can add data to an existing array
    function addDataToAnArray($array, $data) {
        array_push($array, $data);
        return $array;
    }
    
?>

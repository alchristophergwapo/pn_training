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
        include("functions.php");
        $multi_array = array(
            'food' => array(
                "go" => array(
                    0 => "bread", 
                    1 => "rice", 
                    2 => "pasta",
                    3 => "cereals", 
                    4 => "potato"
                ),
                "glow" => array(
                    0 => "apple", 
                    1 => "cabbage", 
                    2 => "mango", 
                    3 => "malungay", 
                    4 => "ampalaya"
                ),
                "grow" => array(
                    0 => "chicken", 
                    1 => "meat", 
                    2 => "fish", 
                    3 => "eggs", 
                    4 => "milk", 
                    5 => "cheese" , 
                    6 => "yoghurt"
                )
            ), 
            'section' => array(
                "sectionA" => array(
                    "me" => "Toper",
                    "tapad" => "Precious",
                    "tapad_niya" => "Irish",
                    "likod_nako" => "Mary Jane",
                    "tapad_niMj" => "Monica"
                ), 
                "sectionB" => array(
                    "close_friend" => "Judilyn",
                    "friend2" => "Claire",
                    "friend3" => "Aira",
                    "friend4" => "Luzmibel",
                    "friend5" => "Jonathan"
                )
            ),
            "ph_president" => array(
                0 => "Rodrigo Duterte", 
                1 => "Elpidio Quirino", 
                2 => "Manuel Roxas"
            )
        );
        
        $array = array(1,2,3,4,5,6,7,8,9);
        // 1
        getSum(1,2);
        // 2
        displayData($array); 
        // 3
        displayMultiDimensionalArray($multi_array);
        // 4
        print_r(createAssociativeArray("goal", "To learn PHP"));
        echo "<br>";
        // 5 & 6
        print_r(addDataToAnArray($array,"Toper"));
        
        
        
        
    ?>
</body>
</html>
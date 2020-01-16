<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise 1 & 2</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
        // echo "<table border =\"1\" style='border-collapse: collapse'>";
            // echo "<th> Number from 1-15";
        function getAllNumbers($num) {
            for ($i=1; $i <= $num; $i++) { 
                echo "<div class='text-center'><hr>".$i . "&nbsp</div>";
            }
        }
        $num2 = [];
        function get_all_numbers_divisible_by2($num) {
             if($n > 0) {
                 for ($i=1; $i <= $num; $i++) {
                     if($i % 2 == 0) {
                         array_push($num2, $i);
                       
                    } else {
                        echo "Number is too low!";
                    
                    }
                }
            }
        }
         function display_result_2() {
            foreach($num2 as $n2) {
                echo "<div class='text-center'><hr>".$n2 . "&nbsp</div>";
            }
        }

        
        $num2 = [];
        function get_all_numbers_divisible_by3($num) {
            if($n > 0) {
                for ($i=1; $i <= $num; $i++) {
                    if($i % 3 == 0) {
                        array_push($num2, $i);
                    };
                };
            } else {
                echo "Number is too low!";
            }
        }
        function display_result_3() {
            foreach($num2 as $n3) {
                echo "<div class='text-center'><hr>".$n3 . "&nbsp</div>";
            }
        }
        $num2 = [];
        function get_all_numbers_divisible_by5($num) {
            if($n > 0) {
                for ($i=1; $i <= $num; $i++) {
                    if($i % 5 == 0) {
                        array_push($num2, $i);
                    };
                };
            } else {
                echo "Number is too low!";
            }
        }
        function display_result_5() {
            foreach($num2 as $n5) {
                echo "<div class='text-center'><hr>".$n5 . "&nbsp</div>";
            }
        }
    ?>  
                            
</body>
</html>
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
        class Activity1{

            public $num = [];

            public function __construct($num) {
                $this->num = $num;
            }
            public function getAllNumbers($number) {
                if($number > 0) {
                    for ($i=1; $i <= $number; $i++) { 
                        echo "<div class='text-center'><hr>".$i . "&nbsp</div>";
                        array_push($this->num, $i);
                    }
                }
            }
            public function get_all_numbers_divisible_by2() {
                for ($i=0; $i < count($this->num); $i++) {
                    if($this->num[$i] % 2 == 0) {
                        echo "<div class='text-center'><hr>".$this->num[$i] . "&nbsp</div>";
                    } 
                }
                
            }
            public function get_all_numbers_divisible_by3() {
                for ($i=0; $i < count($this->num); $i++) {
                    if($this->num[$i] % 3 == 0) {
                        echo "<div class='text-center'><hr>".$this->num[$i] . "&nbsp</div>";
                    } 
                }
            }
            public function get_all_numbers_divisible_by5() {
                for ($i=0; $i < count($this->num); $i++) {
                    if($this->num[$i] % 5 == 0) {
                        echo "<div class='text-center'><hr>".$this->num[$i] . "&nbsp</div>";
                    } 
                }
            }
        }
    ?>  
                            
</body>
</html>
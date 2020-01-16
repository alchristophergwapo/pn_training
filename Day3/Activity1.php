
<?php
class Activity1{

    // 1. Write a program that can calculate the factorial of a number, you can use a recursive function 
    // (a function that calls itself)
    function factorial($number) {
        
        echo "1. ";
        $res = 1;
        for ($num=1; $num <= $number; $num++) { 
            # code...
            $res *= $num;
        }
        echo $res . "<br>";
    }

    // 2. Write a program that can create a chessboard, you can use html elements
    function create_chess_board() {
        
        echo "2. ";
        echo "<table border=#FFFFFF>";
        for ($row=0; $row < 8; $row++) { 
            echo "<tr>";
            for ($col=0; $col < 8; $col++) { 
                $sum = $row + $col;
                if ($sum % 2 == 0) {
                    echo "<td width=30px height=30px bgcolor=#FFFFFF></td>";
                } else {
                    echo "<td width=30px height=30px bgcolor=#000000></td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>" . "<br>";
        
    }

    // 3. Write a program that can remove a specific elements in a numeric array,
    // content of array is from January to December , if I'll remove January, January is removed, 
    // please take note that I'm not using index key here in removing the element, use the value instead.
    function remove_element_in_numeric_array($array , $element) {
        echo "3. ";
        for ($i=0; $i <= count($array); $i++) { 
            if ($array[$i] == $element) {
                unset($array[$i]);
            }
        }
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }

    

    // 5. Arithmetic operations on character variables : $d = 'A00'. Using this variable print the 
    // following numbers.
    // Sample Output :
    // A01
    // A02
    // A03
    function character_arithmetic_operation() {
        echo "5. <br>";
        $d = "A00";
        for ($i=1; $i <= 5; $i++) { 
            echo ++$d . "<br>";
        }
    }

    // 6. Write a program to get last modified information of a file (the file you're working on).
    // OUTPUT:
    // filename : test.php
    // last modified date: Last modified Thursday, 26th January, 2019, 12:43pm
    function get_last_edit_date($file) {
        echo "6.  <br>";
        if (file_exists($file)) {
            echo "filename : $file <br>";
            echo "last modified date: Last modified " . date("l, dS F, Y, H:i:s.", filemtime($file)) . "<br>";
        }
    }
    // 7. Write a program which changes the color of the first character of a word.
    // sample word : PN Training, output is, P and T should be red.
    function change_color_first_letter($sentence) {
        echo "7.  <br>";
        echo preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$sentence);
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <p>4.</p>
    <table border="#FFFFFF" width="250px">
        <th>Name</th>
        <th>Salary</th>
        <?
            // 4. Write a  program to display string, values within a table. Table columns would be  Name and 
            // Salary. You can use HTML tables
            function create_table($name, $salary) {
                echo "<tr><td>$name</td>";
                echo "<td>$salary</td></tr>";
            }
            create_table("Toper",35000);
            create_table("Judy",30000);
            echo "<br>"
        ?>
    </table>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise 3</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                   <div class="card">
                        <div class="card-header text-center"><h3>Triangular pattern</h3></div>
                        <div class="card-body">
                            <center>
                                <?php
                                    $string = "*&nbsp &nbsp ";
                                    for ($i=1; $i < 8; $i++) { 
                                        # code...
                                        echo "<h6>";
                                        echo $string . "<br>";
                                        $string .= "* &nbsp &nbsp";
                                        // echo str_repeat("&nbsp &nbsp * &nbsp &nbsp", $i);
                                        echo   "</h3><br>";
                                    }
                                ?>
                            </center>
                        </div>
                   </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
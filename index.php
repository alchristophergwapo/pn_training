<html lang="en">

<head>
    <title>Homepage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }

        .navbar {
            position: fixed;
        }
    </style>
</head>

<body>
    <div class="jumbotron text-center" style="margin-bottom:0">
        <!-- <h1>My Learning Page</h1> -->
        <!-- <p>This page reflects all I learn from day 1 to day 4.</p>  -->
    </div>

    <!-- Nav pills -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark nav-tabs">
        <ul class="nav nav-pills" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="pill" href="#home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#menu1">Add Pala-utang</a>
            </li>

        </ul>
    </nav>
    <div class="container">

        <!-- Tab panes -->
        <div class="tab-content">
            <div id="home" class="container tab-pane active"><br>
                <div style="margin-bottom: '20px'">
                    <h1>Listahan sa mga Palautang</h1>
                    <br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>First name</th>
                                <th>Middle name</th>
                                <th>Last name</th>
                                <th>Item</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Amount</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        <?php
                            include("List.php");
                        ?>

                    </table>

                </div>
            </div>
            <div id="menu1" class="container tab-pane fade">
                <?php
                    include("Add_Palautang.php");
                ?>
            </div>
        </div>

    </div>
    <div class="jumbotron text-center footer" style="margin-bottom:0">
        <div class="footer-copyright text-center py-3">© 2020 Copyright: Christopher Alonzo</div>
    </div>

    <!-- <div class="container" style="margin-top:30px; margin-bottom: 30px"> -->
    <!-- <div class="tab-content">
            <div id="day1" class="container tab-pane active">
                
            <div id="day2" class="container tab-pane fade"><br>
                <h3>Day 2</h3>
                <div>
                    <?php
                        // include("..\Day2\index.php");
                    ?>
                </div>
            </div>
            <div id="day3" class="container tab-pane fade"><br>
                <h3>Day 3</h3>
                <div>
                    <?php
                        // include("..\Day3\Activity1.php");
                        // $months = array("January", "February", "March", "April", "May", "June", "July", 
                        // "August", "September", "October", "November", "December");
        
                        // $activity1 = new Activity1;
                        // $activity1->factorial(5);
                        // $activity1->create_chess_board();
                        // $activity1->remove_element_in_numeric_array($months, "January");
                        // $activity1->character_arithmetic_operation();
                        // $activity1->get_last_edit_date("Activity1.php");
                        // $activity1->change_color_first_letter("PN Training");
                        
                    ?>
                </div>
            </div> 
        </div> -->
    <!-- </div> -->


</body>

</html>
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
    </style>
</head>
<body>

    <div class="jumbotron text-center" style="margin-bottom:0">
        <h1>My Learning Page</h1>
        <!-- <p>This page reflects all I learn from day 1 to day 4.</p>  -->
    </div>

    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark nav-tabs">
        <!-- <a class="navbar-brand" href="#">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button> -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#day1">Day 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#day2">Day 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#day3">Day 3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#day4">Day 4</a>
                </li>
                <li>   
                    <a class="nav-link" href="Login.php">Login</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="Register.php">Register</a>
                </li> 
            </ul>
        </div>  
    </nav>

    <div class="container" style="margin-top:30px; margin-bottom: 30px">
        <div class="tab-content">
            <div id="day1" class="container tab-pane active"><br>
                <!-- <h3>Day 1</h3> -->
                <div>
                    <h1>Exercise 1 and 2</h1><br>
                    <p>Try to input an integer. This program will get all the numbers from 1 to this number.</p>
                    <div>
                        <form action="#" method="post">
                            <input name="number" type="number" placeholder="Input an integer.....">
                            <input type="submit" value="Try">
                        </form>
                    </div>
                    <div class="col-sm-12 col-md-3">
                    <div style="overflow-y: scroll; height: 490px" class="card card1">
                        <div class="container">
                            <div class="card-header">Number from 1-15</div>
                            <div class="card-body">
                            <?php
                                include("..\Day1\Exercise1&2.php");
                                getAllNumbers($_POST['number']);
                            ?>
                            </div>
                        </div>
                    </div>
                
                </div>
                   
                </div>
                <br>
                <hr>
                <div>
                    <h1>Exercise 3</h1><br>
                    <?php include("..\Day1\Exercise3.php") ?>
                </div>
            </div>
            <div id="day2" class="container tab-pane fade"><br>
                <!-- <h3>Day 2</h3> -->
                <div>
                    <?php
                        include("..\Day2\index.php");
                    ?>
                </div>
            </div>
            <div id="day3" class="container tab-pane fade"><br>
                <h3>Day 3</h3>
                <div>
                    <?php
                        include("..\Day3\Activity1.php");
                    ?>
                </div>
            </div>
            <div id="day4" class="container tab-pane fade"><br>
                <h3>Day 4</h3>
                <div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>First name</th>
                                <th>Middle name</th>
                                <th>Last name</th>
                                <th>Email</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        <?php
                            include("List.php");
                        ?>

                    </table>
                    
                </div>
            </div>
        </div>
    </div>

    
    <div class="jumbotron text-center" style="margin-bottom:0">
        <div class="footer-copyright text-center py-3">© 2020 Copyright: Christopher Alonzo</div>
    </div>

</body>
</html>

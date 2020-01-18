<?php
session_start();
include("functions.php");
if(isset($_SESSION["user_id"])) {
	if(isLoginSessionExpired()) {
		header("Location:Logout.php?session_expired=1");
	}
}
?>
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
        <h1>Utang Management</h1>
        <!-- <p>This page reflects all I learn from day 1 to day 4.</p>  -->
    </div>

    <!-- Nav pills -->
    <!-- <nav class="navbar navbar-expand-sm bg-dark navbar-dark nav-tabs"> -->
        <ul class="nav nav-pills bg-dark" role="tablist" background="black">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="pill" href="#home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#menu1">Inventory</a>
            </li>
        </ul><br>
        <button class="float-right btn btn-outline-danger"><a href="logout.php" style="color='black'">Logout <i class='fas fa-sign-out-alt'></i></a></button>
    <!-- </nav> -->
    <div class="container">

        <!-- Tab panes -->
        <div class="tab-content">
            <div id="home" class="container tab-pane active"><br>
                <div class="table-responsive" style="margin-bottom: '20px'" >
                    <h1>Listahan sa mga Palautang</h1>
                    <br>
                    <table class="table table-bordered">
                        <thead class="thead-dark">
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
                    <button class="btn btn-outline-secondary"><a href="Add_Palautang.php">Add Nangutang</a></button>
                </div>
            </div>
            <div id="menu1" class="container tab-pane fade">
                <br>
                <h1>Inventory</h1>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Price</th>
                            <th>Available Quantity</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <?php
                        include("Inventory.php");
                    ?>
                </table>
                <button class="btn btn-outline-secondary"><a href="Add_Item.php">Add Item</a></button>
            </div>
        </div>

    </div><br>

    <div class="jumbotron text-center footer" style="margin-bottom:0">
        <div class="footer-copyright text-center py-3">© 2020 Copyright: Christopher Alonzo</div>
    </div>

</body>

</html>
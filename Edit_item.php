<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Form</title>

    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <?php
        $servername = "localhost";
        $username = "root";
        $password = "2ndyrGroupA";
        // $password = "";
        $database = "pntraining";
        
        // Creating connection
        $conn = mysqli_connect($servername, $username, $password, $database);

        $id = $_REQUEST['id'];
        $query = "SELECT * from items where id='".$id."'"; 
        $result = $conn->query($query);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $row = mysqli_fetch_assoc($result);

        $conn->close();

    ?>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Update</h2>
                        <form method="POST" class="register-form" id="register-form" action="Update_item.php">
                            <div>
                                <input name="id" type="text" value=<?php echo $id?> hidden/>
                            </div>
                            <div class="form-group">
                                <!-- <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label> -->
                                <input type="text" name="item" id="item" value=<?php echo $row["item"]?> required/>
                            </div>
                            <div class="form-group">
                                <!-- <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label> -->
                                <input type="text" name="price" id="price" value=<?php print_r($row["price"])?> required/>
                            </div>
                            <div class="form-group">
                                <!-- <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label> -->
                                <input type="text" name="quantity" id="quantity" value=<?php echo $row["quantity"]?> required/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="update_item" id="update_item" class="form-submit" value="Update"/>
                            </div>
                        </form>
                    </div>

                    <div class="signup-image">
                    <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                    <!-- <a href="Login.php" class="signup-image-link">I am already member</a> -->
                </div>
                    
                </div>
            </div>
        </section>

    </div>

</body>
</html>
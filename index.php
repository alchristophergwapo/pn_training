<?php
  // $message="";
  // if(count($_POST)>0) {
  //   if($_POST["start"]) {
  //     // $_SESSION["user_id"] = $row[user_id];
  //     $_SESSION["user_name"] = $_POST['name'];
  //     $_SESSION['loggedin_time'] = time();  
  //   } 
  // }
  // if(isset($_SESSION['name'])) {
  //   header("Location: Home.php");
  // }
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Utang Management</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>

<body>
  <div class="container">
    <div class="login page">
      <div class="form">
        <div>
          <!-- <img src="chat-icon.png" alt="" style="height: 200px;width: auto"> -->
        </div>
        <form method="POST" action="Home.php">
          <h3 class="title">What's your nickname?</h3>
          <input name="name" class="nickName" type="text" maxlength="14" /><br><br>
          <div><button name="start" id="submit">Submit</button></div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>

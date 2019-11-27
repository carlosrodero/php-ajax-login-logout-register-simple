<?php include 'php/db.inc.php'; session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Profile</title>
  <script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    $('#btnlogout').click(function() {
      <?php session_destroy(); ?>
      window.location.replace('index.php');
    });
  });
  </script>
</head>
<body>
  <h2>Profile</h2>
  <?php
  if($_SESSION){
    if($_SESSION["user"]){
      $sql = "SELECT * FROM tbl_accounts WHERE username = '".$_SESSION["user"]."'";
      $result = $conn->query($sql);
      if($result) {
        $row = $result->fetch_assoc();
        echo "Username: ".$row["username"]."<br/>";
        echo "First Name: ".$row["firstname"]."<br/>";
        echo "Last Name: ".$row["lastname"]."<br/>";
        echo "<button id='btnlogout'>Logout</button>";
      }else {
        echo "Restricted Page. <a href='login.php'>Login first</a>";
      }
    }else {
      echo "Restricted Page. <a href='login.php'>Login first</a>";
    }
  }else {
    echo "Restricted Page. <a href='login.php'>Login first</a>";
  }
  

  
  ?>
</body>
</html>
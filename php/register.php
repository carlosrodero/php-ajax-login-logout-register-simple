<?php
 include 'db.inc.php';
 $sql = "INSERT INTO tbl_accounts (firstname, lastname, username, 
  password) VALUES ('".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["username"]."','".$_POST["password"]."')";
 $result = $conn->query($sql);

 if($result) {
  echo "success";
}else {
  echo "fail";
}
  
 $conn->close();

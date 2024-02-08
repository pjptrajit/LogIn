<?php

$conn = new mysqli("localhost","root","","form");
if($conn->connect_error){
  die("Connection Fail: ".$conn->connect_error);
}else{
  echo"";
}
?>

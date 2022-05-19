<?php
    $servername='localhost';
    $username='mydatabase_admin';
    $password='Password123#@!';
    $dbname = "test";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        } else {
            echo "Success";
        }
?>
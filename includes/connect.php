<?php
    $servernm = "localhost";
    $usernm = "root";
    $password = "";
    $dbnm = "pin_bike";
    $connect = mysqli_connect($servernm,$usernm,$password,$dbnm);

    if ($connect) {
        echo "Hello";
      }
      else {
        die("connection failed because".mysqli_connect_error());
      }

?>



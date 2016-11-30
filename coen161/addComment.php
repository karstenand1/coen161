<?php

  modDatabase();

  function modDatabase() {

    ini_set('display_errors','On');
    error_reporting(E_ALL);
    $db_host = "dbserver.engr.scu.edu";
    $db_user = "kanderse";
    $db_pass = "00000918652";
    $db_name = "sdb_kanderse";
    $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      return;
      }

    $sql="SELECT * FROM Users WHERE email = '$_POST[email]'";
    $result = $con->query($sql);
    if (!$result)
    {
      die('Error: ' . mysqli_error($con));
    }

    if ($result->num_rows == 0) {
      echo "invalid";
      return;
    }

    $sql="INSERT INTO Comments (name, comment, rate) VALUES ('$_POST[name]','$_POST[comment]','$_POST[rate]')";

    $result = $con->query($sql);
    if (!$result){
      die('Error: ' . mysqli_error($con));
    }
    echo "success";
    mysqli_close($con);

  }


?>

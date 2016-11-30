<?php
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
  }


  // echo $_POST['firstname'];
  // echo "other stuff";

  $sql = "UPDATE Users SET creditcard='$_POST[creditcard]' WHERE email='$_POST[paymentemail]'";

  $result = $con->query($sql);
  if (!$result)
  {
    die('Error: ' . mysqli_error($con));
  }
  echo "Payment Added, ";

  $sql = "UPDATE Users SET note='$_POST[comment]' WHERE email='$_POST[paymentemail]'";

  $result = $con->query($sql);
  if (!$result)
  {
    die('Error: ' . mysqli_error($con));
  }
  echo "Note Added";


  mysqli_close($con);
?>

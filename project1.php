<?php
   $dbhost = 'localhost:3306';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,"firstproject");
if (!$conn)
  {
  die('Could not connect: '.mysqli_connect_error());
  }
   // mysqli_select_db($conn,"firstproject");
   $sql="INSERT INTO agrikol (last_name, first_name, email, phonenumber, zip_code, city, message) VALUES ('".$_POST['lastname']."','".$_POST['firstname']."','".$_POST['email']."','".$_POST['phonenumber']."','".$_POST['zip_code']."','".$_POST['city']."','".$_POST['message']."')";
   $result = mysqli_query($conn,$sql);
if(!$result)
  {
  die('Error: ' .mysqli_connect_error());
  }
header('Location:index.php');
echo "1 record added";
?>
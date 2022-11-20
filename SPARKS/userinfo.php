<?php
$con = mysqli_connect('localhost','root',"",'bank_data');
$sql = "SELECT * FROM user-info";
$result = mysqli_query($con,$sql);
$user = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['phone'];
$comment = $_POST['message'];

$query= "INSERT INTO `user-info`(`user`, `Email`, `mobile`, `comment`)
values ('$user','$email','$mobile','$comment')";
mysqli_query($con,$query);
if($query){
        echo "<script> alert('Submitted Successful');
                        window.location='contact.php';
              </script>";
   }
?>
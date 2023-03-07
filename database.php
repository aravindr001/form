<?php
    $fname=$_GET['fname'];
    $lname=$_GET['lname'];
    $email=$_GET['email'];
    $ph=$_GET['ph'];
    $pass=$_GET['pass'];
    // echo $fname;
    $con = mysqli_connection("localhost","root","240215","signup");
    $sql = "INSERT INTO `signupTB`( `first_name`, `last_name`, `email`, `number`, `password`) VALUES ('fname','lname','email','ph','pass');";
    mysqli_query($con,$sql);
    // header("Location: ../index.php? signup successfull");
?>
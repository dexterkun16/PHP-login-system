<?php
    
    session_start();
    header('location:login.php');

    $con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'user_accounts');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from users where username = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Username is already taken";
}
else{
    $reg=" insert into users(username, password) value ('$name' , '$pass')";
    mysqli_query($con, $reg);
    echo"Registration Succesful";
}

?>
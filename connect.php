<?php

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$number = $_POST['number'];
$city = $_POST['city'];
$comment = $_POST['comment'];

$conn = new mysqli('localhost','root','12345678','get_connect');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into get_connect(fullname, email, number, city, comment)
    values(?,?,?,?,?)");
    $stmt->bind_param("ssiss",$fullname, $email, $number, $city, $comment);
    $stmt->execute();
    echo "Response is submitted...";
    $stmt->close();
    $conn->close(); 
}
?>
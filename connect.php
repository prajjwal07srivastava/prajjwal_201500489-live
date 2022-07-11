<?php
$name=$_POST['fullname'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];
$number=$_POST['number'];

$conn=new mysqli('localhost','root','','edu');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into registration(name,email,number,password,confirmpassword) values(?,?,?,?,?)");
    $stmt->bind_param("ssiss",$name,$email,$number,$password,$confirmpassword);
    $stmt->execute();
    echo "Registration Successfully...";
    $stmt->close();
    $conn->close();
}
?>
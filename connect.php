<?php
$mobilenumber =$_POST['mobilenumber'];
$password =$_POST['password'];

$conn = new mysqli('localhost','root','','login');
if($conn->connect_error){
    die('connection Failed  : ' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into form(mobilenumber,password)
    values(?,?)");
    $stmt->bind_param("is",$mobilenumber,$password);
    $stmt->execute();
    echo "submitted Successfully...";
    $stmt->close();
    $conn->close();
}
?>
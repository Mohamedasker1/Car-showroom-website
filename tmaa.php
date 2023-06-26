<?php
$Manufacturers = $_POST["Manufacturers"];
$Model = $_POST["Model"];
$Address = $_POST["Address"];
$mail = $_POST["mail"];
$Number = $_POST["Number"];


$conn = new mysqli('localhost','root','','tmatt');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into registration(Car Manufacturers, Car Model Name, Your Address, Your E-mail, Contact Number)
     values(?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $Manufacturers, $Model, $Address, $mail, $Number);
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
}

?>
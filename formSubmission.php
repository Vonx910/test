<?php

session_start();

$conn = new mysqli("localhost", "root", "", "assessment");

if ($conn){
  $name = $_POST['name'];
  $dob = $_POST['dob'];
  $postcode = $_POST['postcode'];
  $address = $_POST['address'];

  $sqlSelect = "SELECT id FROM postcode WHERE postcode = '$postcode'";
  $result = $conn->query($sqlSelect);

  if($result->num_rows == 1){
    while($row = $result->fetch_assoc()){
      $id = $row['id'];
    }
    $sqlInsert = "INSERT INTO customer(name, dob, address, postcode_id) VALUES ('$name', '$dob', '$address', '$id')";

    if($conn->query($sqlInsert) === TRUE){
      $sentData=[	"result" 	=> true];
			echo json_encode($sentData);
    }
    else{
      $sentData=[	"result" 	=> false];
			echo json_encode($sentData);
    }
  }
  else{
    $sentData=[	"result" 	=> false];
			echo json_encode($sentData);
  }
}
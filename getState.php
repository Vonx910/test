<?php

$conn = new mysqli("localhost", "root", "", "assessment");

if ($conn){
  $postcode = $_POST['postcode'];

  $sql = "SELECT id, state FROM postcode WHERE postcode = '$postcode'";
  $result = $conn->query($sql);

  if($result->num_rows == 1){
    while($row = $result->fetch_assoc()){
      $sentData=[	"result" 	=> true, 
                  "state" => $row['state']
                ];
			echo json_encode($sentData);
    }
  }
  else{
    $sentData=[	"result" 	=> false, 
                "state" => 'Invalid postcode'
              ];
		echo json_encode($sentData);
  }
  
}
<?php

$data = json_decode(file_get_contents('php://input'), true);
$user = 'root@';
$pass = '';
$db = 'food_app_db';

// lấy  userID
$userID ="".$data['userID']."";

$db = new mysqli('127.0.0.1:3307',$user,$pass,$db)or die ('some thing happend');
$query = "SELECT * FROM orders WHERE userID = $userID;";


$result = $db->query($query);
$temp = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        array_push($temp,array('ID'=>$row["ID"],'userID'=>$row["userID"],'des'=>$row["des"],'addressID'=>$row["addressID"],'phonenumID'=>$row["phonenumID"],'OrderInfo'=>$row["OrderInfo"],'Total'=>$row["Total"],'status'=>$row["status"]));
    //   echo "id: " . $row["Personid"]. " - Name: " . $row["FirstName"]. " " . $row["LastName"]. "<br>";
    }

    echo json_encode($temp);
} else {
  echo 'none';
}


$db -> close();
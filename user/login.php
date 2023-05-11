<?php

$data = json_decode(file_get_contents('php://input'), true);
$user = 'root@';
$pass = '';
$db = 'food_app_db';

$email ="'".$data['email']."'";
$password ="'".$data['password']."'";

$db = new mysqli('127.0.0.1:3307',$user,$pass,$db)or die ('some thing happend');
$query = "SELECT * FROM users WHERE Email = $email AND Password = $password;";


$result = $db->query($query);
$temp = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        array_push($temp,array('id'=>$row["id"],'Name'=>$row["Name"],'Username'=>$row["Username"],'Email'=>$row["Email"],'Password'=>$row["Password"],'addressDes'=>$row["addressDes"],'phonDes'=>$row["phonDes"]));
    //   echo "id: " . $row["Personid"]. " - Name: " . $row["FirstName"]. " " . $row["LastName"]. "<br>";
    }
  } 

echo json_encode($temp);

$db -> close();
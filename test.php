<?php
// header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
// header('Access-Control-Allow-Credentials: false');
// header('Access-Control-Max-Age: 86400');


$data = json_decode(file_get_contents('php://input'), true);
    // $res=array('success'=>true,'data'=>$data['content']) ;



$user = 'root@';
$pass = '';
$db = 'food_app_db';



$db = new mysqli('127.0.0.1:3307',$user,$pass,$db)or die ('shit happend');
$query = "SELECT * FROM persons WHERE FirstName = '".$data['content']."'and Personid=".$data['dcontent'].";";


$result = $db->query($query);
$temp = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        array_push($temp,array('Personid'=>$row["Personid"],'FirstName'=>$row["FirstName"],'LastName'=>$row["LastName"]));
    //   echo "id: " . $row["Personid"]. " - Name: " . $row["FirstName"]. " " . $row["LastName"]. "<br>";
    }
  } else {
    echo "0 results";
  }

echo json_encode($temp);

$db -> close();
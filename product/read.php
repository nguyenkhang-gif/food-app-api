<?php
$user = 'root@';
$pass = '';
$db = 'food_app_db';



$db = new mysqli('127.0.0.1:3307',$user,$pass,$db)or die ('some thing happend');
$query = "SELECT * FROM product;";


$result = $db->query($query);
$temp = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        array_push($temp,array('ID'=>$row["ID"],'Name'=>$row["name"],'des'=>$row["des"],'price'=>$row["price"]));
    //   echo "id: " . $row["Personid"]. " - Name: " . $row["FirstName"]. " " . $row["LastName"]. "<br>";
    }
  } else {
    echo "0 results";
  }

echo json_encode($temp);

$db -> close();
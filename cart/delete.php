<?php
// header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
// header('Access-Control-Allow-Credentials: false');
// header('Access-Control-Max-Age: 86400');


$data = json_decode(file_get_contents('php://input'), true);
    // $res=array('success'=>true,'data'=>$data['content']) ;



$user = 'root@';
$pass = '';
$db = 'food_app_db';



$userID ="".$data['userID']."";
$itemID ="".$data['itemID']."";
// $amnount ="".$data['amount']."";


$db = new mysqli('127.0.0.1:3307',$user,$pass,$db)or die ('shit happend');
$query = "delete from  cart
WHERE ID=$userID and itemID = $itemID;";


$result = $db->query($query);

$db -> close(); 
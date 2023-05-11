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
$addressID ="'".$data['addressID']."'";
$phonenumID ="'".$data['phonenumID']."'";
$status ="'".$data['status']."'";
$des ="'".$data['des']."'";
$OrderInfo ="'".$data['OrderInfo']."'";
$Total ="".$data['Total']."";

$db = new mysqli('127.0.0.1:3307',$user,$pass,$db)or die ('shit happend');
$query = "INSERT INTO orders(userID,addressID,phonenumID,status,des,Total,OrderInfo) VALUES ($userID,$addressID,$phonenumID,$status,$des,$Total,$OrderInfo)";


$result = $db->query($query);

$db -> close(); 
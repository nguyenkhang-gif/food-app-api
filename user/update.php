<?php
// header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
// header('Access-Control-Allow-Credentials: false');
// header('Access-Control-Max-Age: 86400');


$data = json_decode(file_get_contents('php://input'), true);
    // $res=array('success'=>true,'data'=>$data['content']) ;



$user = 'root@';
$pass = '';
$db = 'food_app_db';




$id ="".$data['id']."";
$username ="'".$data['username']."'";
$name ="'".$data['name']."'";
$email ="'".$data['email']."'";
$password ="'".$data['password']."'";
$address ="'".$data['address']."'";
$phonenum ="'".$data['phonenum']."'";

$db = new mysqli('127.0.0.1:3307',$user,$pass,$db)or die ('shit happend');
$query = "UPDATE users
SET Name = $name , Username= $username,Email=$email,Password=$password,addressDes=$address, phonDes=$phonenum
WHERE id = $id;";


$result = $db->query($query);

$db -> close(); 
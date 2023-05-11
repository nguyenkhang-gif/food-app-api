<?php
// header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
// header('Access-Control-Allow-Credentials: false');
// header('Access-Control-Max-Age: 86400');


$data = json_decode(file_get_contents('php://input'), true);
    // $res=array('success'=>true,'data'=>$data['content']) ;



$user = 'root@';
$pass = '';
$db = 'food_app_db';

$email ="'".$data['email']."'";
$password ="'".$data['password']."'";

$db = new mysqli('127.0.0.1:3307',$user,$pass,$db)or die ('shit happend');
$query = "INSERT INTO users (Email,Password,Name,Username,phonDes,addressDes) VALUES ( $email,$password,'none','none','none','none' );";


$result = $db->query($query);


$db -> close();
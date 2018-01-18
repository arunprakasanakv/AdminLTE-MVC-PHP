<?php
include_once '../model/db.php';
$raw_data = $_REQUEST;

$result = insert('profile',$raw_data,db_connect());
if ($result) {
	header('Location: ../index.php');
}
else{
	header('Location: ../view/signup.php?status=nouser');	
}
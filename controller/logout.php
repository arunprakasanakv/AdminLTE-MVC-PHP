<?php 
include_once '../model/db.php';
session_destroy();
header("Location:../index.php");

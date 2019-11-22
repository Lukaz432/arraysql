<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'Users.php';
use user\Users;

$allUsersDateArray = new Users();
$allUsersDateArray->getAllUsersData();

$allUsersNameAndDate = New Users();
$allUsersNameAndDate->getAllUsersDateandName();

$GetUsersAndCars = New Users();
$GetUsersAndCars->GetUsersAndCars();

?>
<?php
include_once "EmployeeManager/EmployeeManager.php";

$index = $_REQUEST['index'];
$employeeManager = new EmployeeManager("data.json");
$employeeManager->deleteStaff($index);
header('Location: ../index.php');
<?php
include_once "../EmployeeManager/EmployeeManager.php";
$first = $_REQUEST['first'];
$last = $_REQUEST['last'];
$date = $_REQUEST['date'];
$add = $_REQUEST['add'];
$position = $_REQUEST['position'];

$newStaff = [
    "FirstName" => $first,
    "LastName" => $last,
    "Date" => $date,
    "Address" => $add,
    "Position" => $position
];
$employeeManager = new EmployeeManager('../data.json');
$employeeManager->addStaff($newStaff);
header('Location: ../index.php');


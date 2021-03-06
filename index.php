<?php
//include "data.json";
//echo phpversion();
include_once "EmployeeManager/EmployeeManager.php";
include_once "Employee/Employee.php";
$employeeManager = new EmployeeManager("data.json");
$staffs = $employeeManager->getAll();
//var_dump($staffs);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manager Agency</title>
    <style>
        table {
            width: 800px;
            height: 700px;
            border-collapse: collapse;
            border: 1px solid black;
        }

        td, th {
            text-align: center;
            border: 1px solid black;
        }

        h2 {

        }
    </style>
</head>
<body>
<h2><label>Manager Agency</label></h2>
<table>
    <tr>
        <th>STT</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Date</th>
        <th>Address</th>
        <th>Job Position</th>
        <th>Avatar</th>
    </tr>
    <?php foreach ($staffs as $k => $staff): ?>
        <tr>
            <td><?= $k + 1 ?></td>
            <td><?= $staff->getFirst() ?></td>
            <td><?= $staff->getLast() ?></td>
            <td><?= $staff->getDate() ?></td>
            <td><?= $staff->getAddress() ?></td>
            <td><?= $staff->getPosition() ?></td>
            <td><img src="img/images<?=$k + 1 ?>.jpeg" width="100"></td>
            <td><a onclick="return confirm('Sure?')" href="behavior/delete.php?index=<?php echo $k ?>">Delete</a></td>

        </tr>
    <?php endforeach; ?>
    <button><a href="add.php">Add</a></button>
</table>

</body>
</html>
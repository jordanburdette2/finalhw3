<?php
require_once("model/connection.php");
require_once("model/employee-chart-db.php");

$pageTitle = "Employees Chart";
include "view/header.php";
$employees = selectEmployees();
include "view/employees-chart/page.php";
include "view/footer.php";
?>

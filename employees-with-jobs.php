<?php
require_once("util-db.php");
require_once("model-employees-with-jobs.php");

$pageTitle="Employees with Jobs";
include "view-header.php";
$employees = selectEmployeesWithJobs();
include "view-employees-with-jobs.php";
include "view-footer.php";
?>

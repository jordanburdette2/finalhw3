<?php
require_once("util-db.php");
require_once("model-jobs-of-employees.php");

$pageTitle = "Jobs of Employees";
include "view-header.php";
$jobs = selectJobsOfEmployees($_GET['id']);
include "view-jobs-of-employees.php";
include "view-footer.php";
?>

<?php
require_once("util-db.php");
require_once("model/jobs-of-employees.php");

$pageTitle = "Jobs of Employees";
include "header.php";
$jobs = selectJobsOfEmployees($_GET['id']);
include "jobs-of-employees.php";
include "footer.php";
?>

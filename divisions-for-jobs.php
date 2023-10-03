<?php
require_once("util-db.php");
require_once("model-divisons-for-jobs.php");

$pageTitle = "Divisions for Jobs";
include "view-header.php";
$jobs = selectDivisionsForJobs($_POST['did']);
include "view-sections-by-course.php";
include "view-footer.php";
?>

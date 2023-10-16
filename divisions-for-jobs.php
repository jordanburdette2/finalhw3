<?php
require_once("util-db.php");
require_once("model-divisons-for-jobs.php");

$pageTitle = "Divisions for Jobs";
include "view-header.php";
$jobs = selectDivisionsForJobs($_GET['did']);
include "model-divisons-for-jobs.php";
include "view-footer.php";
?>

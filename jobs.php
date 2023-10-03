<?php
require_once("util-db.php");
require_once("model-jobs.php");

$pageTitle = "Jobs";
include "view-header.php";
$job = selectJobs();
include "view-jobs.php";
include "view-footer.php";
?>

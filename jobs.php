<?php
require_once("util-db.php");
require_once("model-jobs.php");

$pageTitle = "Jobs";
include "view-header.php";
$courses = selectJobs();

include "view-footer.php";
?>

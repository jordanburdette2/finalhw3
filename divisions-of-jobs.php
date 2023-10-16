<?php
require_once("util-db.php");
require_once("model-divisons-of-jobs.php");

$pageTitle = "Divisions for Jobs";
include "view-header.php";
$jobs = selectDivisionsOfJobs($_POST['jid']);
include "view-divisons-of-jobs.php";
include "view-footer.php";
?>

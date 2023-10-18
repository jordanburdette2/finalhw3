<?php
require_once("util-db.php");
require_once("model-divisions-of-jobs.php");

$pageTitle = "Divisions of Jobs";
include "view-header.php";
$divisions = selectDivisionsOfJobs($_POST['jid']);
include "view-divisions-of-jobs.php";
include "view-footer.php";
?>

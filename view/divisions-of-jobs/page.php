<?php
require_once("util-db.php");
require_once("get-division.php");

$pageTitle = "Divisions of Jobs";
include "view-header.php";
$divisions = selectDivisionsOfJobs($_POST['jid']);
include "get-division.php";
include "view-footer.php";
?>

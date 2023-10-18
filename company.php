<?php
require_once("util-db.php");
require_once("model-companies.php");

$pageTitle="Companies";
include "view-header.php";
$employees = selectCompanies();
include "view-companies.php";
include "view-footer.php";
?>

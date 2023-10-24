<?php
require_once("util-db.php");
require_once("model-jobs.php");

$pageTitle = "Jobs";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_PST['actionType']) {
    case "Add":
      insertCourse($_POST['jNumber'], $_POST['jTitle'], $_POST['jStart']);
      break;
  }
}

$jobs = selectJobs();
include "view-jobs.php";
include "view-footer.php";
?>

<?php
require_once("util-db.php");
require_once("model-jobs.php");

$pageTitle = "Jobs";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertJob($_POST['jNumber'], $_POST['jTitle'], $_POST['jStart'])) {
        echo '<div class="alert alert-success" role="alert"> Job Added! </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error! </div>';
      }
      break;
  }
}

$jobs = selectJobs();
include "view-jobs.php";
include "view-footer.php";
?>

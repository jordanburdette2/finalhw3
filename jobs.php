<?php
require_once("model/connection.php");
require_once("model/jobs-db.php");

$pageTitle = "Jobss";
include "view/header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertJob($_POST['jNumber'], $_POST['jTitle'], $_POST['jStart'])) {
        echo '<div class="alert alert-success" role="alert"> Job Added! </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error! </div>';
      }
      break;
    case "Edit":
      if (updateJob($_POST['jNumber'], $_POST['jTitle'], $_POST['jStart'], $_POST['jid'])) {
        echo '<div class="alert alert-success" role="alert"> Job edited! </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error! </div>';
      }
      break;
        case "Delete":
      if (deleteJob($_POST['jid'])) {
        echo '<div class="alert alert-success" role="alert"> Job Deleted! </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error! </div>';
      }
      break;
  }
}

$jobs = selectJobs();
include "view/jobs/page.php";
include "view/footer.php";
?>

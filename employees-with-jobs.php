<?php
require_once("model/connection.php");
require_once("model/employees-with-jobs-db.php");

$pageTitle = "Employees with Jobs";
include "view/header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertDivision($_POST['jobNum'], $_POST['jobTitle'], $_POST['startDate'])) {
        echo '<div class="alert alert-success" role="alert"> Job Added! </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error! </div>';
      }
      break;
    case "Edit":
      if (updateDivision($_POST['jobNum'], $_POST['jobTitle'], $_POST['startDate'], $_POST['jid'])) {
        echo '<div class="alert alert-success" role="alert"> Job edited! </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error! </div>';
      }
      break;
        case "Delete":
      if (deleteDivision($_POST['jid'])) {
        echo '<div class="alert alert-success" role="alert"> Job Deleted! </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error! </div>';
      }
      break;
  }
}

$employees = selectEmployeesWithJobs();
include "view/employees-with-jobs/page.php";
include "view/footer.php";
?>

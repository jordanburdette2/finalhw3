<?php
require_once("util-db.php");
require_once("model-companies.php");

$pageTitle = "Companies";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertCompany($_POST['cName'], $_POST['cType'])) {
        echo '<div class="alert alert-success" role="alert"> Company Added! </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error! </div>';
      }
      break;
    case "Edit":
      if (updateCompany($_POST['cName'], $_POST['cType'], $_POST['cid'])) {
        echo '<div class="alert alert-success" role="alert"> Company edited! </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error! </div>';
      }
      break;
        case "Delete":
      if (deleteCompany($_POST['cid'])) {
        echo '<div class="alert alert-success" role="alert"> Company Deleted! </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error! </div>';
      }
      break;
  }
}

$company = selectCompany();
include "view-companies.php";
include "view-footer.php";
?>

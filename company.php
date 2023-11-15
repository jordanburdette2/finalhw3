<?php
require_once("model/connection.php");
require_once("model/companies-db.php");

$pageTitle = "Companies";
include "view/header.php";

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

$companies = selectCompany();
include "view/company/page.php";
include "view/footer.php";
?>

<?php
function selectEmployees() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT employee_id, employee_name, office_number FROM `employee`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectJobsOfEmployees($iid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT j.job_id, job_number, job_title, start_date, office_number, building FROM `job` j join division d on j.job_id=d.job_id where d.employee_id=?");
        $stmt->bind_param("i", $iid);  
      $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>

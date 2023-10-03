<?php
function selectJobsOfEmployees($did) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT j.job_id, job_number, job_title, start_date FROM `job` j join division d on j.job_id=d.job_id where d.job_id=?");
        $stmt->bind_param("i", $did);  
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

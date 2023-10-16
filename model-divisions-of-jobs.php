<?php
function selectDivisionsForJobs($did) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT division_id, employee_id, j.job_id, building, manager from division d join job j on d.job_id=j.job_id WHERE j.job_id=?;");
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

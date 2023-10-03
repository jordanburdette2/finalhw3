<?php
function selectJobs() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT job_id, job_number, job_title, start_date FROM `course`");
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

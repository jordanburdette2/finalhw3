<?php
function selectJobsOfEmployees($iid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT j.job_id, job_number, job_title, start_date, building, manager FROM `job` j join division d on j.job_id=d.job_id where d.employee_id=?");
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

function insertJobOfEmployee($empName, $jobNum, $jobTitle, $startDate, $offNum) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `job` (`job_number`, `job_title`, `start_date`) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $jobNum, $jobTitle, $startDate);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateJob($jobNum, $jobTitle, $startDate, $jid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `job` SET `job_number` = ?, `job_title` = ?, `start_date` = ? WHERE job_id=?");
        $stmt->bind_param("sssi", $jobNum, $jobTitle, $startDate, $jid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteJob($jid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM job WHERE job_id=?");
        $stmt->bind_param("i", $jid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>


?>

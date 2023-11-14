<?php
function selectEmployeesWithJobs() {
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
        $stmt = $conn->prepare("SELECT j.job_id, job_number, job_title, start_date, building FROM `job` j join division d on j.job_id=d.job_id where d.employee_id=?;");
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

function selectEmployeesForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT employee_id, employee_name FROM `employee` order by employee_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectJobsForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT job_id, job_number, job_title, start_date FROM `job` order by job_number");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertDivision($jid, $jTitle, $jStart, $officeNum) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `job` ('job_id, `job_title`, `start_date`, 'office_number') VALUES (?, ?, ?, ?)");
        $stmt->bind_param("isss", $jid, $jobTitle, $startDate, $officeNum);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateDivision($iid, $jid, $jTitle, $jStart, $officeNum, $did) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `job` SET 'job_id' = ?, `job_number` = ?, `job_title` = ?, `start_date` = ?, 'office_number' = ? WHERE division_id=?");
        $stmt->bind_param("iisssi", $iid, $jid, $jobTitle, $startDate, $officeNum, $did);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteDivision($did) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM division WHERE division_id=?");
        $stmt->bind_param("i", $did);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


?>

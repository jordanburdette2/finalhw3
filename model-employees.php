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

function insertEmployee($empName, $offNum) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `job` (`employee_name`, `office_number`) VALUES (?, ?)");
        $stmt->bind_param("sss", $empName, $offNum);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateEmployee($empName, $offNum, $eid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `employee` SET `employee_name` = ?, `office_number` = ? WHERE employee_id=?");
        $stmt->bind_param("ssi", $empName, $offNum $eid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteEmployee($eid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM employee WHERE employee_id=?");
        $stmt->bind_param("i", $eid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>

<?php
function selectCompany() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT company_id, company_name, company_type FROM `company`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertCompany($cName, $cType) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `company` (`company_name`, `company_type`) VALUES (?, ?)");
        $stmt->bind_param("ss", $cName, $cType);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateCompany($cName, $cType, $cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `company` SET `company_name` = ?, `company_type` = ? WHERE company_id=?");
        $stmt->bind_param("ssi", $cName, $cType, $cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteCompany($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM company WHERE company_id=?");
        $stmt->bind_param("i", $cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>

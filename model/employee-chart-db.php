<?php
function selectEmployees() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT employee_name, count(j.job_id) as num_divisions FROM employee e join division d on e.employee_id = d.employee_id GROUP BY employee_name");
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

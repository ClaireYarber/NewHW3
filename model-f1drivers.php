<?php
function selectf1drivers() {
    $conn = null; // Initialize $conn to null
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT f1driver_id, f1driver_name, country FROM `f1driver` ");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        if ($conn !== null) {
            $conn->close();
        }
        throw $e;
    }
}
?>

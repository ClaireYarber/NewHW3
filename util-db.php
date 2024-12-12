<?php
function get_db_connection() {
    $host = '138.197.17.168';
    $username = 'misclair_finalHW3';
    $password = 'CY41727jms!';
    $dbname = 'misclair_finalhw3';

    $conn = new mysqli($host, $username, $password, $dbname);

    if ($conn->connect_error) {
        throw new mysqli_sql_exception("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}
?>

<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('159.89.47.44', 'jordanb1_finalhw3user', ')]^^1Qj!4I1y', 'jordanb1_finalhw3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>

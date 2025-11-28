<?php

    include 'connectdb.php';

    function getAllCustomers() {
        $conn = Connect();
        $query = "SELECT * FROM `customer`";

        $result = $conn->query($query);

        $data = [];

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        return $data;
    }
?>

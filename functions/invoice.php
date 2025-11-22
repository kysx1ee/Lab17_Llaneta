<?php
   
   include 'connectdb.php';
   
   function getAllInvoice() {
        $conn = Connect();
        $query = 'SELECT * FROM  `invoice` 
        INNER JOIN `customer` 
        ON `invoice`.cus_code = `customer`.cus_code';
        
        $result = $conn->query($query);

        $data = [];
        
        while ($row = $result->fetch_assoc()){
            $data[] = $row;
        }

        return $data;
    }
?>
<?php
  
    function data(){
        $sql= "SELECT * FROM data ORDER BY id DESC";  
        return pdo_query($sql);  
    }
    header('Content-Type: application/json');
    require_once("database.php");
    $data = array();
    $query = "SELECT status, COUNT(status) AS size_status FROM graph GROUP BY status";
    $stmt = $conn->prepare($query);
    if($stmt->execute()){
        if($stmt->rowCount()>0){
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
    foreach($result as $row){
        $data[] = $row;
    }
    echo json_encode($data);
?>

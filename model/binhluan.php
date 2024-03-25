<?php
    function binhluan_insert($iduser, $idpro, $username, $noidung, $ngaybl){
        $sql= "INSERT INTO binhluan (iduser, idpro, username, noidung, ngaybl) VALUES (?, ?, ?, ?, ?)";
        pdo_execute($sql, $iduser, $idpro, $username, $noidung, $ngaybl);
    }
    

    function binhluan_delete($username, $password, $email, $fullname, $address, $phone, $role, $id){
        $sql= "UPDATE user SET username=?, password=?, email=?, fullname=?, address=?, phone=?, role=? WHERE id=?";
        pdo_execute($sql, $username, $password, $email, $fullname, $address, $phone, $role, $id);
    
    }

    function binhluan_select_all(){
        $sql= "SELECT * FROM binhluan ORDER BY id DESC";
        return pdo_query($sql);
    }

?>
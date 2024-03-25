<?php

function user_insert($username, $password, $email){
    $sql= "INSERT INTO user(username, password, email) VALUES (?, ?, ?)";
    pdo_execute($sql, $username, $password, $email);
}

function checkuser($username, $password){
    $sql="SELECT * FROM user WHERE username=? and password=?";
    return pdo_query_one($sql, $username, $password);
}

function  user_update($username, $password, $email, $fullname, $address, $phone, $role, $id){
    $sql= "UPDATE user SET username=?, password=?, email=?, fullname=?, address=?, phone=?, role=? WHERE id=?";
    pdo_execute($sql, $username, $password, $email, $fullname, $address, $phone, $role, $id);

}

function get_user($id){
    $sql="SELECT * FROM user WHERE id=?";
    return pdo_query_one($sql, $id);
}
?>
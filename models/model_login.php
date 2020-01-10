<?php

function m_login($data){
    include "connection.php";
    $email = $_POST['email'];
    $password = $_POST['password'];
    $_SESSION['email'] = $email ;
    $_SESSION['password'] =$password;
    $query = "SELECT * FROM tbl_user";
    $result = mysqli_query($connection,$query);
    $record = [];
    if($result && mysqli_num_rows($result)){
        foreach($result as $row){
            $record[] = $row;
        }
    }
    return $record;
}
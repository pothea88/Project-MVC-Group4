<?php
function material_data(){
    include "connection.php";
    $query = "select * from tbl_material";
    $result = mysqli_query($connection,$query);
    $rows = [];
    if($result && mysqli_num_rows($result) > 0 ){
        foreach ($result as $record) {
            $rows[] = $record;
        }
    }
    return $rows;
}
// m_detail material 
function m_detail() {
    $id = $_GET['id'];
    include "connection.php";
    $query =  "SELECT * FROM tbl_material
    LEFT JOIN tbl_room ON tbl_material.id_material = tbl_room.id_room WHERE id_material = $id";
    $result = mysqli_query($connection,$query);
    return $result;
}
// query room
function m_query_room(){
    include "connection.php";
    $query = "SELECT * FROM tbl_room";
    $result = mysqli_query($connection,$query);
    $rows = [];
    if($result && mysqli_num_rows($result) > 0){
        foreach($result as $record){
            $rows[] = $record;
        }
    }
    return $rows;
}
// add data material 
function add_material_data($data){
    include "connection.php";
    $name = $_POST['name'];
    $quality = $_POST['quality'];
    $quantity = $_POST['quantity'];
    $date = $_POST['date'];
    $room = $_POST['room'];
    $query = "INSERT INTO tbl_material(material_name, quantity, quality, date,id_room) 
    VALUES('$name','$quantity','$quality','$date','$room')";
    $result = mysqli_query($connection, $query);
    return $result;
}
function delete_material_data(){
    include "connection.php";
    $id = $_GET['id'];
    $query = "DELETE FROM tbl_material
     WHERE id_material = $id";
    $result = mysqli_query($connection, $query);
    return $result;
}

// update material data 

function updatate_material(){
    include "connection.php";
    $id = $_GET['id'];
    $name = $_POST['name'];
    $quality = $_POST['quality'];
    $quantity = $_POST['quantity'];
    $date = $_POST['date'];
    $room = $_POST['room'];
    $query = "UPDATE tbl_material 
    SET material_name = '$name',quantity ='$quantity',quality ='$quality',date ='$date',id_room = '$room' WHERE id_material = $id";
    $result = mysqli_query($connection, $query);
    return $result;
}


//view user

function user_data(){
    include "connection.php";
    $query = "SELECT * FROM tbl_user";
    $result = mysqli_query($connection,$query);
    $rows = [];
    if($result && mysqli_num_rows($result) > 0){
        foreach($result as $record){
            $rows[] = $record;
        }
    }
    return $rows;
}
// add new user

function m_add_user($data){
    include_once "connection.php";
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $role = $_POST['role'];
    $query = "INSERT INTO tbl_user (email, password) VALUE ('$email' , '$pwd', '$role')";
    $result = mysqli_query($connection, $query);
    if($result){
        header('location:views/admin/view_user.php');
    }else{
        echo "cannot add user";
    }
}
?>
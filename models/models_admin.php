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
function room(){
    include_once "connection.php";
    $query_room = "SELECT * FROM tbl_material WHERE id_room = 1";
}
function add_material_data($data){
    include "connection.php";
    $name = $_POST['name'];
    $quantity = $_POST['quanlity'];
    $quanlity = $_POST['quantity'];
    $date = $_POST['date'];
    $query = "INSERT INTO tbl_material (name, quantity, quanlity, date) VALUE ('$name', '$quantity', '$quanlity', '$date')";
    $result = mysqli_query($connection, $query);
    if($result){
        header("location:index.php");
    }else{
        echo "cannot insert data";
    }
}
function delete_material_data(){
    include "connection.php";
    $id = $_GET['id'];
    $query = "DELETE FROM tbl_material WHERE id = $id";
    $result = mysqli_query($connection, $query);
    if($result){
        header('location:index.php');
    }else{
        echo 'cannot delete data';
    }
}
?>
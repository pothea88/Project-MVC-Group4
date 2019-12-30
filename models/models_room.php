<?php
    function v_room(){
        include_once "connection.php";
        $query_room = "SELECT * FROM tbl_room";
        $room_data = mysqli_query($connection,$query_room);
        $row = [];
        foreach ($room_data as $row_room){
            $row[] = $row_room;
        }
        return $row;
    }
    function a_room(){
        include_once "connection.php";
        $room_name = $_POST['name'];
        $room_floor = $_POST['floor'];
        $description = $_POST['description'];
        $query = "INSERT INTO tbl_room(room_name,floor,description) 
        VALUES('$room_name','$room_floor','$description')";
        $result = mysqli_query($connection,$query);
        return $result;
    }
    function m_delete_room(){
        $id = $_GET['id'];
        include_once "connection.php";
        $query = "DELETE FROM tbl_room WHERE id_room = $id";
        $result = mysqli_query($connection , $query);
   
        return $result;
    }
    function m_get_detail() {
        $id = $_GET['id'];
        include_once "connection.php";
        $query = "SELECT * FROM tbl_room WHERE id_room = $id";
        $getResult = mysqli_query($connection,$query);
        $rows =[];
        if($getResult && mysqli_num_rows($getResult) > 0){
            foreach ($getResult as $record){
                $rows[] = $record;
            }
        }
        return $rows;
    }
    function m_edit_form(){
        $id = $_POST['id'];
        include_once "connection.php";
        $room_name = $_POST['name'];
        $room_floor = $_POST['floor'];
        $description = $_POST['description'];
        $query = "UPDATE tbl_room SET room_name = '$room_name', floor = '$room_floor', description = '$description' WHERE id_room = $id";
        $result = mysqli_query($connection,$query);
        return $result;
    }
?>
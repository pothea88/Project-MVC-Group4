<?php
function material_data(){
    include "connection.php";
    $query = "SELECT mat.id_material,material_name,quantity,quality,date,room.room_name
                FROM tbl_material mat
                LEFT JOIN tbl_room room ON room.id_room = mat.roomID";
    $result = mysqli_query($connection,$query);
    $rows = [];
    if($result && mysqli_num_rows($result) > 0 ){
        foreach ($result as $record) {
            $rows[] = $record;
        }
    }
    return $rows;
}
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
?>
<?php
$data = array();
get_action($data);

function get_action(&$data){
    $function = 'material';
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
        $function = $action;
    }
    $function($data);
}
// function select_room(&$data){
//     $data['data'] = room();
//     $data['page'] = "admin/view";
// }
function material(&$data){
    $data['data'] = material_data();
    $data['page'] = "admin/view";
}
function add_material(&$data){
    $data['page'] = "admin/add";
}
function add_data_material(&$data){
    $data['data'] = add_material_data($_POST);
}
function delete(&$data){
    $data['data'] = delete_material_data();
}
?>
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
function material(&$data){
    $data['data'] = material_data();
    $data['page'] = "n-user/view";
}

function request(&$data) {
    $data['page'] = "n-user/request";
}
function view_room(&$data) {
    $data['data'] = v_room();
    $data['page'] = "n-user/view_room";
}

?>
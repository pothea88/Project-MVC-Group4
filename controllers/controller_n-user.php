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

function request_material(&$data) {
    $data['page'] = "n-user/request";
}

?>
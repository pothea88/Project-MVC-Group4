<?php
$data = array();
get_action($data);

function get_action(&$data){
    $function = 'view';
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
        $function = $action;
    }
    $function($data);
}
function view_room(&$data) {
    $data['data'] = v_room();
    $data['page'] = "room/view";
}
function add_room(&$data){
    $data['page'] = "room/add";
}
function room_form(&$data){
    $data = a_room($_POST);
    if($data){
        $action = 'view_room';
    }else{
        $action = 'add_room';
    }
    header("Location: index2.php?action=$action");
}
function delete_room(&$data){
    $data = m_delete_room();
    if($data){
        $action = "view_room";
    }else{
        echo "cannot delete";
    }
    header("Location: index2.php?action=$action");
}
function edit_room(&$data){
    $data['room_edit'] = m_get_detail();
    $data['page'] = "room/edit";
}
function edit_form(&$data){
    $data_room = m_edit_form($_POST);
    if($data_room){
        $action = 'view_room';
    }else{
        echo "Cannot edit form";
    }
    header("Location: index2.php?action=$action");
}

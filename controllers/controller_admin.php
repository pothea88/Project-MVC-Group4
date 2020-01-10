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
    $data['page'] = "admin/view";
}
// query room 
  function room(&$data){
    $data['room_data'] = m_query_room();
    $data['page'] = "admin/add";
    }
// link to add material form 
function add_material(&$data){
    $data['room_data'] = m_query_room();
    $data['page'] = "admin/add";
}
// add data material 
function add_data_material(&$data){
    $add_material_data = add_material_data($_POST);
    if( $add_material_data){
        $action = 'material';
    }else{
        $action ='add_material';
    }
    header("Location: index0.php?action=$action");
}
//delete
function delete(){
    $delete_material = delete_material_data($_POST);
    if($delete_material){
        $action = 'material';
    }else{
        echo "Cannot delete data";
    }
    header("Location: index0.php?action=$action");
}

// edit material 

function edit(&$data){
    $data['data_material'] = m_detail();
    $data['room_data'] = m_query_room();
    $data['page'] = "admin/edit";
}

// edit data material 

function edit_data_material(&$data){
    $update_data_material = updatate_material();
    if($update_data_material){
        $action = 'material';
    }else{
        echo "Cannot update material data";
    }
    header("Location:index0.php?action=$action");
}

function add_user(&$data){
    $data['page'] = "admin/creat_user";
}

function add_userdata(&$data){
    $data['user'] = m_add_user($_POST);
}
?>


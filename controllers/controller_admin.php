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
    header("Location: index.php?action=$action");
}
//delete
function delete(&$data){
    $delete_material = delete_material_data();
    if($delete_material){
        $action = 'material';
    }else{
        echo "Cannot delete data";
    }
    header("Location: index.php?action=$action");
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
    header("Location:index.php?action=$action");
}
?>


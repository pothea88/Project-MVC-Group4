<?php

$data = array();
get_action($data);

function get_action(&$data){
    $function = 'login';
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
        $function = $action;
    }
    $function($data);
}

function login(&$data){
    $data['page'] = "index.php";
} 
function form_login(&$data){
    session_start();
    $data['user']= m_login($_POST);
    foreach ($data['user'] as $value){
        if ($value['password'] == $_SESSION['password'] && $value['email'] == $_SESSION['email'] && $value['role'] == '1') {
            header("location:index0.php");
        }
        if ($value['password'] == $_SESSION['password'] && $value['email'] == $_SESSION['email'] && $value['role'] == '2') {
            header("location:index1.php");
        }
    }
}
function logout(){
    if(isset($_POST['but_logout'])){
        session_destroy();
        header('Location: index.php');
    }
}
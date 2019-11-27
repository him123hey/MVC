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

function view(&$data) {
    $data['student_data'] = m_get_data();
    $data['page'] = "students/view";
}

function add(&$data) {
    $data['add'] = m_add_data();
    $data['page'] = "students/add";
}

function form_data(&$data) {
    $add_data = m_add_data($_POST);
    if($add_data) {
        $action = "view";
    }else {
        $action = "add";
    }
    header("Location: index.php?action=$action");
}
function detail(&$data){
    $data['student'] = m_detail();
    $data['page'] = "students/detail";
}
function edit(&$data){
    $data['student'] = m_edit();
    $data['page'] = "students/edit";
}
function edit_new(&$data){
    $data['student'] = m_edit_new();
}
function delete(&$data){
    $data['student'] = m_delete();
}

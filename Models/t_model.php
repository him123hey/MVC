<?php

function m_get_data() {
    $query = "SELECT * FROM student";
    include "connection.php";
    $result = mysqli_query($connection,$query);
    $rows = [];
    if($result && mysqli_num_rows($result) > 0 ){
        foreach ($result as $record) {
            $rows[] = $record;
        }
    }
    return $rows;
}

function m_add_data() {
    include "connection.php";
    if(isset($_POST['create'])){
        $name = $_POST['name'];
        $class = $_POST['class'];
        $mark = $_POST['mark'];
        $sex = $_POST['sex'];
        $query = "INSERT INTO student(name,class,mark,sex)
                  VALUES('$name', '$class', '$mark', '$sex')";
        $result = mysqli_query($connection, $query);
        return $result;
    }
}
function m_detail(){
    include_once "connection.php";
    $id = $_GET['id'];
    $query = "SELECT * FROM student WHERE id = $id";
    $result = mysqli_query($connection, $query);
    $rows = [];
    if($result && mysqli_num_rows($result) > 0 ){
        foreach ($result as $record) {
            $rows[] = $record;
        }
    }
    return $rows;
}
function m_edit(){
    include_once "connection.php";
    $id = $_GET['id'];
    $query = "SELECT * FROM student WHERE id = $id";
    $result = mysqli_query($connection, $query);
    $rows = [];
    if($result && mysqli_num_rows($result) > 0 ){
        foreach ($result as $record) {
            $rows[] = $record;
        }
    }
    return $rows;
}
function m_delete(){
    include_once "connection.php";
    $id = $_GET['id'];
    $query = ("DELETE FROM student WHERE id = $id");
    $result = mysqli_query($connection, $query);
    if($result){
        header("location:index.php");
    }else{
        echo "cannot delete";
    }
}
function m_edit_new(){
    include_once "connection.php";
    if(isset($_POST['edit'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $sex = $_POST['sex'];
        $mark = $_POST['mark'];
        $class = $_POST['class'];
        $query = "UPDATE student SET name = '$name', sex = '$sex', mark = '$mark', class = '$class' WHERE id = $id";
        $result = mysqli_query($connection, $query);
        if($result){
            header("location:index.php");
        }else{
            echo "cannot updata..";
        }
    }
}


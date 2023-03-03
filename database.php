<?php

function make_connection()
{
    $host='localhost';
    $username='root';
    $password='';
    $dbname='doordie';
    $conn = new mysqli($host,$username,$password,$dbname);

    if ($conn->connect_error)
    {
        echo "error in db ";
    }
    // else{
    //     echo "success";
    // }
    return $conn;
}

make_connection();

function add_items($value){

    $conn = make_connection();
    $query = "INSERT INTO doordielist(id,item,status) VALUES(NULL,'$value','0') ";
    $conn->query($query);
}


function get_items()
{
    $conn = make_connection();
    $query = "SELECT id,item from doordielist WHERE status='0'";
    $result = $conn->query($query);

    // print_r($result);
    return $result;
}


function update_items($id){
    $conn = make_connection();
    $query = "UPDATE doordielist set status='1' WHERE id='$id'";
    $result = $conn->query($query);

}

function get_item_checked()
{
    $conn = make_connection();
    $query = "SELECT id,item from doordielist WHERE status='1'";
    $result = $conn->query($query);
    return $result;

}


function delete_items($id)
{
    $conn = make_connection();
    $query = "DELETE from doordielist WHERE id='$id' ";
    $result = $conn->query($query);
    return $result;
}




?>
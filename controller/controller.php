<?php
require 'model/model.php';

function insertInBdd($text){
    inserbdd($text);
}

function getAllBdd(){
    $req = get();

    return $req;
}

function deletePost($id){
    delete_u($id);
}
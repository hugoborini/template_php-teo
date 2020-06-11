<?php

function dbConnect() {
    try { $bdd = new PDO('mysql:host=localhost;dbname=test2;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch (Exception  $e) {
        $retour["sucess"] = false;
        $retour["msg"] = "chakal c pas bon";
    die('Error : ' .  $e->getMessage());
    }
    return $bdd;
}



function get(){
    $bdd = dbConnect();

    $req = $bdd->query("SELECT * from toto");

    return $req;
}

function inserbdd($text){
    $bdd = dbConnect();

    $req = $bdd->prepare("INSERT INTO toto(text) VALUE(:text)");
    $req->execute([
        "text" => $text
    ]);
}


function delete_u($id){
    $bdd = dbConnect();

    $req = $bdd->prepare("DELETE FROM `toto` WHERE `toto`.`id` = :id ");
    $req->execute([
        "id" => $id
    ]);
}
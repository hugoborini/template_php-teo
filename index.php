<?php

require 'controller/controller.php';

if (isset($_GET['action'])){
    if ($_GET["action"] == "page1"){
        include 'vue/page.php';
    }
    if ($_GET["action"] == "page2"){
        insertInBdd($_POST["value"]);
        header("Location: index.php?action=page1");
    };
    if ($_GET["action"] == "delete"){
        deletePost($_GET['id']);
        header("Location: index.php?action=page1");
    }
}
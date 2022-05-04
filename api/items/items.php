<?php
if($api === "items"){
    if($method == "GET"){
       include_once "getItems.php";
    }

     if($method == "POST"){
       include_once "postItems.php";
    }

    if($method == "POST" && $_POST['_method'] == "PUT"){
       include_once "putItems.php";
    }

    if($method == "POST" && $_POST['_method'] == "DELETE"){
       include_once "deleteItems.php";
    }
}
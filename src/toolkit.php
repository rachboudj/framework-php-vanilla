<?php

function dd(...$params) {
    foreach($params as $param) {
        echo "<pre>";
        var_dump($param);
        echo "</pre>";
    }
    return;
}

function ddd(...$params) {
    echo "<pre>";
    var_dump($params);
    echo "</pre>";
    die();
}

function debugMode($active) {
    if($active) {
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        return;
    }
}

function fromInc($name) {
    include "./templates/includes/" . $name . ".inc.php";
}

function fromPage($name) {
    $_GET["page"] = $name;
    include "./templates/includes/" . $name . ".inc.php";
}
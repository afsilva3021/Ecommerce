<?php


switch($_GET['?Pages']){
    case "home":
        require_once('./home.php');
    break;

    case "":
        require_once('');
    break;
}
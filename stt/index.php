<?php

session_start();
error_reporting(0);

include_once 'include/database.php';
include_once 'include/user.php';
include_once 'include/lib.php';
//koneksi ke database
connectMysql();


$base_url = "http://localhost/sekolahtinggitindik/stt";

$link = preg_replace("[']", "", $_SERVER['REQUEST_URI']);

$url = (explode('/', $link));
$urlController = isset($url[2]) ? $url[2] : '';
$urlAction = isset($url[3]) ? $url[3] : '';
$urlId = isset($url[4]) ? $url[4] : '';
$urlDescription = isset($url[5]) ? $url[5] : '';

$index = "controller/" . $urlController . "Controller.php";

if(isset($_SESSION['id'])){
    
    if (file_exists($index)) {
        include_once $index;
        if (!empty($urlAction)) {
            $display = "views/" . $urlController . "/" . $urlAction . ".php";
        } else {
            $display = "views/" . $urlController . "/list.php";
        }
    } else if(empty ($urlController) or $urlController == "home"){
        $display = "views/site/home.php";
    }

    include_once "views/default/header.php";
    if (file_exists($display)) {
        include $display;
    } else {
        include 'views/default/404.php';
    }
    include_once "views/default/footer.php";
}else{
	include 'views/default/login.php';
}
echo $link;
?>

<?php

$script_dir1 = realpath(dirname(__FILE__));
$script_dir2 = realpath($_SERVER['DOCUMENT_ROOT']);
$subdir = trim(substr($script_dir1, strlen($script_dir2)), "/\\");

$request_scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? 'https' : 'http';

$site_url = $request_scheme.'://'.$_SERVER['HTTP_HOST'].'/';
if(!empty($subdir)){
    $site_url .= $subdir.'/';
}

$request = substr($_SERVER['REQUEST_URI'], strlen('/'.$subdir));
if($request === '/') $request = '/main';
$path = 'pages'.$request.'.php';

if(!file_exists($path)){
    header('Location: '.$site_url.'404');
    exit();
}
if($request === '/404'){
    header($_SERVER["SERVER_PROTOCOL"]." 404 not found");
}

define('SITE_URL', $site_url);
define('PAGE', basename($path, '.php'));

require 'header.php';
include $path;
require 'footer.php';
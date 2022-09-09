<?php

session_start();

define("SQL_HOST","localhost");
define("SQL_USER","root");
define("SQL_PASS","");
define("SQL_DBNAME","prevot");

try{
    $db = new PDO("mysql:dbname=".SQL_DBNAME.";charset=utf8;host=".SQL_HOST, SQL_USER,SQL_PASS);
}catch(Exception $e){
    die('Erreur :'.$e->getMessage());
}

function flash_in($type, $message){
    if(empty($_SESSION['message']))
        $_SESSION['message'] = [];
    array_push($_SESSION['message'], array($type,$message));
}
function flash_out(){
    if(!empty($_SESSION['message']))
        foreach($_SESSION['message'] as $value)
            echo '<p class="alert alert-'.$value[0].'">'.$value[1].'</p>';
    $_SESSION['message'] = [];
}

function crypt_password($begin){
	return hash('sha512','%dfkj53_45H43?'.hash('sha512', $begin));
}
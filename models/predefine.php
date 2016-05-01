<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 2016. 4. 21.
 * Time: 오전 7:01
 */
$page=$_GET['pages'];
$action=$_GET['action'];

$phone=$_POST['phone'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$test=$_POST['test'];

$game=$_COOKIE['game'];

if ($page=='sold'){
    $phone=(int)$_COOKIE['username'];
    $trial=(int)($_COOKIE['trial']%5);
    $val=(int)$_POST['val'];
#    if(20<$_COOKIE['trial'] or $_COOKIE['trial']<=25){
#        setcookie('action','reset',time()+(86400*30));
#    }
#    else{
        setcookie('action','progress',time()+(86400*30));
#ㅊ    }
}


define("user_add", "INSERT INTO user (phone, gender, age, test) VALUES($phone,$gender,$age,$test)");
define("game_add", "INSERT INTO $game (username, trial, val) VALUES($phone,$trial, $val)");

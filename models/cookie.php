<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 2016. 4. 21.
 * Time: 오전 8:38
 */
$past = time() - 3600;
$future = time()+(86400*30);

if($phone){
    setcookie('username',$phone,$future);
}

if($page=="index" or $page=="application"){
    setcookie("game", "", $past);
    setcookie("trial", "", $past);
    setcookie("value", "", $past);
    setcookie("action", "", $past);
    setcookie("username", "", $past);
}

if($page=="game_1" or $page=="game_2"){
    if ($_COOKIE['action']=='reset'){
        setcookie("trial", "0", $future);
        setcookie("value", "", $past);
        setcookie("action", "", $past);
    }
    $i=$_COOKIE['trial'];
    if ($_COOKIE['action']=='progress') {
        $i = $i + (5 - (int)($_COOKIE['trial'] % 5));
        setcookie("action", "", $past);
    }
    $i++;
    setcookie("trial", $i, $future);
    setcookie('game',$page ,$future);
}



<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 2016. 4. 21.
 * Time: 오전 3:46
 */
function db_connect($server,$user,$password,$db,$port)
{
    global $link;
    $link = mysqli_connect($server, $user, $password, $db, $port);
    if (!$link) {
        echo('Could Not Connect!!' . mysqli_connect_error(). mysqli_error($link));
    }
    mysqli_query($link, "set session character_set_connection=utf8;");
    mysqli_query($link, "set session character_set_results=utf8;");
    mysqli_query($link, "set session character_set_client=utf8;");
}

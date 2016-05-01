<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 2016. 4. 21.
 * Time: 오전 2:35
 */
require('models/predefine.php');
require('models/cookie.php');
require('config.php');
require('models/db.php');
db_connect($db_server,$db_user,$db_password,$db,$db_port);


if (!$page) {
    header("Location: ?pages=index");
    exit();
} elseif (!file_exists('views/' . $page . '.php')) {
    header("Location: ?pages=404");
    exit();
}

include('views/templates/header.html');
include('views/' . $page . '.php');
include('views/templates/footer.html');

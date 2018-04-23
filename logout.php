<?php
/**
 * Created by PhpStorm.
 * User: louise
 * Date: 23/04/18
 * Time: 10:39
 */
session_start();
unset($_SESSION['loginname']);
setCookie('cart[$basket]', '', (time() - 3600), '/');
session_destroy();
header('Location:login.php');
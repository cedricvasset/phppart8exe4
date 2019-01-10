<?php
if(isset($_POST ['ident'])){
setcookie('login',  $_POST['ident']);
}
if(isset($_POST['password'])){
setcookie('password', $_COOKIE['password']);
}
?>
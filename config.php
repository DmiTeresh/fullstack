<?php
define ('PRODUCTS_IMAGE_PATH', '/images/products/');
session_start();
$user = 'root';
    # $password = '12345';
    # $user = $password = 'root';
$pdo = new Pdo('mysql:dbname=fullstack2;host=127.0.0.1', $user, $password);
$document_root = $_SERVER['DOCUMENT_ROOT'];



?>
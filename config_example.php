<?php

 define('TITLE', '');
 define('CDN_URL', '');

 // ! Database Configuration
 define('DB_HOST', '');
 define('DB_USER', '');
 define('DB_PASS', '');
 define('DB_NAME', '');

 try{ $database = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8', DB_USER,DB_PASS); }catch(PDOException $e){ die('Veritabanı bağlantı sırasında bir hata oluştu, lütfen daha sonra tekrar deneyin.'); }
?>
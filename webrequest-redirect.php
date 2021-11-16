<?php
/**
 * Redirect to webrequest.cc page based on http referer.
 */

if (empty($_SERVER['HTTP_REFERER'])) {
  header('Location: http://webrequest.javanile.org/'); 
  return;
} 

$path = explode('/', parse_url($_SERVER['HTTP_REFERER'], PHP_URL_PATH));  

header('Location: http://webrequest.javanile.org/'.@$path[1].'/'.@$path[2]);

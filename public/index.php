<?php


$PATH = '/index';
if (isset($_SERVER['PATH_INFO'])) {
  $PATH = $_SERVER['PATH_INFO'];
}

require __DIR__ . '/../app/views' . $PATH . '.php';

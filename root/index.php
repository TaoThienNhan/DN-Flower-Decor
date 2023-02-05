<?php
define('ASSETS', 'assets');
$components = [
    'banner',
    'home-products',
    'banner-fb',
    'order-on-request',
    'home-instruct',
    'home-blogs',
    'collection',
    'footer'
];
require_once 'header.php';
require_once 'functions.php';
foreach ($components as $component){
    if (file_exists('components/' . '/' . $component . '.php')){
        require 'components/' . '/' . $component . '.php';
    }
}
require_once 'footer.php';
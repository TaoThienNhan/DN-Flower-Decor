<?php
define('ASSETS', 'assets');
$components = [
    'products-details',
    'similar-product',
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
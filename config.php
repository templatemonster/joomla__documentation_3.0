<?php

$path = 'https://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['SCRIPT_NAME']);

// Variables
$product_name = "Magento 2";
$product_desc = "documentation v4-1";
$doc_title = $product_name . " " . $product_desc;


//$path = 111;

// Variables
$product_name = "Joomla 3.x";
$product_desc = "Documentation";
$doc_title = $product_name . " " . $product_desc;

$lang = 'en';
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
}

$section_param = 'introduction';
if (isset($_GET['section'])) {
    $section_param = $_GET['section'];
}
if (isset($_GET['utm_campaign'])) {
    header('Location: index.php');
}
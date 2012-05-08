<?php
require_once('../bootstrap.php');
AutoLoader::load();
$docx = new CreateDocx();

$paramsHeader = array(
    'font' => 'Times New Roman',
    'jc' => 'right',
    'textWrap' => 5,
);

$docx->addHeader('Header text', $paramsHeader);

$docx->createDocx(WEBROOT_PATH.'/files/example_header');

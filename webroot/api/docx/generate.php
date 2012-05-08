<?php
require_once('../../../bootstrap.php');
AutoLoader::load();

$success = TRUE;
try {
	$docx = new CreateDocx();
	$paramsHeader = array(
		'font' => 'Times New Roman',
		'jc' => 'right',
		'textWrap' => 5,
	);

	$header_text = "{$_POST['title']} {$_POST['firstname']} {$_POST['lastname']}\n";
	$header_text .= "{$_POST['address']}\n";
	$header_text .= "Email: {$_POST['email']} Phone number:{$_POST['phone']}";

	$docx->addHeader($header_text, $paramsHeader);
	$docx->createDocx(FILEUPLOAD_PATH.'/template');

	$message = "Document generated completely";
	$filepath = FILEUPLOAD_URL.'/template.docx';
} catch (Exception $e) {
	$success = FALSE;
	$message = $e->getMessage();
	$filepath = '';
}

$ret = new stdClass();
$ret->success = $success;
$ret->message = $message;
$ret->filepath = $filepath;

header('Content-type: application/json');
echo json_encode($ret);
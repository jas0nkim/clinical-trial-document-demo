<?php
require_once('../../../bootstrap.php');
AutoLoader::load();

$success = TRUE;
try {
	$docx = new CreateDocx();

    // header
	$params_header = array(
		'jc' => 'right',
		'textWrap' => 5,
	);

	$header_text = "{$_POST['profile_title']} {$_POST['firstname']} {$_POST['lastname']}";
	$docx->addHeader($header_text, $params_header);

    $header_text = $_POST['address'];
    $docx->addHeader($header_text, $params_header);

    $header_text = "Email: {$_POST['email']} Phone number:{$_POST['phone']}";
    $docx->addHeader($header_text, $params_header);

    // body
    $body_text = "Title";
    $params_body = array(
        'b' => 'single'
    );
    $docx->addText($body_text, $params_body);

    $body_text = $_POST['title'];
    $docx->addText($body_text);

    $docx->createDocx(FILEUPLOAD_PATH.'/clinical_trial_doc_demo');

	$message = "Document generated completely";
	$filepath = FILEUPLOAD_URL.'/clinical_trial_doc_demo.docx';
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
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
	// 1. table of content
	$body_text = "Table of Content";
	$params_body = array(
		'b' => 'single'
	);
	$docx->addText($body_text, $params_body);

	$body_text = 'Table of content here';
	$docx->addText($body_text);

	// page break
	$docx->addBreak('page');

	// 2. content
	foreach($_GET['order'] as $key) {
		switch ($key) {
			case 0: // title
				$body_text = "Title";
				$params_body = array(
					'b' => 'single'
				);
				$docx->addText($body_text, $params_body);

				$body_text = $_POST['title'];
				$docx->addText($body_text);
				break;

			case 1: // registration
				$body_text = "Trial registration a)";
				$params_body = array(
					'b' => 'single'
				);
				$docx->addText($body_text, $params_body);

				$body_text = $_POST['registration_a'];
				$docx->addText($body_text);

				$body_text = "Trial registration b)";
				$params_body = array(
					'b' => 'single'
				);
				$docx->addText($body_text, $params_body);

				$body_text = $_POST['registration_b'];
				$docx->addText($body_text);

				$body_text = "Trial registration c)";
				$params_body = array(
					'b' => 'single'
				);
				$docx->addText($body_text, $params_body);

				$body_text = $_POST['registration_c'];
				$docx->addText($body_text);
				break;

			case 2: // protocol_version
				$body_text = "Protocol version";
				$params_body = array(
					'b' => 'single'
				);
				$docx->addText($body_text, $params_body);

				$body_text = $_POST['protocol_version'];
				$docx->addText($body_text);
				break;

			case 3: // funding
				$body_text = "Funding";
				$params_body = array(
					'b' => 'single'
				);
				$docx->addText($body_text, $params_body);

				$body_text = $_POST['funding'];
				$docx->addText($body_text);
				break;

			case 4: // roles_and_resp
				$body_text = "Roles and responsibilities a)";
				$params_body = array(
					'b' => 'single'
				);
				$docx->addText($body_text, $params_body);

				$body_text = $_POST['roles_and_resp_a'];
				$docx->addText($body_text);

				$body_text = "Roles and responsibilities b)";
				$params_body = array(
					'b' => 'single'
				);
				$docx->addText($body_text, $params_body);

				$body_text = $_POST['roles_and_resp_b'];
				$docx->addText($body_text);

				$body_text = "Roles and responsibilities c)";
				$params_body = array(
					'b' => 'single'
				);
				$docx->addText($body_text, $params_body);

				$body_text = $_POST['roles_and_resp_c'];
				$docx->addText($body_text);

				$body_text = "Roles and responsibilities d)";
				$params_body = array(
					'b' => 'single'
				);
				$docx->addText($body_text, $params_body);

				$body_text = $_POST['roles_and_resp_d'];
				$docx->addText($body_text);
				break;

			case 5: // bg_and_rationale
				$body_text = "Background and rationale a)";
				$params_body = array(
					'b' => 'single'
				);
				$docx->addText($body_text, $params_body);

				$body_text = $_POST['bg_and_rationale_a'];
				$docx->addText($body_text);

				$body_text = "Background and rationale b)";
				$params_body = array(
					'b' => 'single'
				);
				$docx->addText($body_text, $params_body);

				$body_text = $_POST['bg_and_rationale_b'];
				$docx->addText($body_text);
				break;

			default:
				break;
		}
	}

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
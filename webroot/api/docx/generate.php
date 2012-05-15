<?php
require_once('../../../bootstrap.php');
AutoLoader::load();

$success = TRUE;
try {
	$docx = new CreateDocx();
    $docx->setDefaultFont('Times New Roman');

    // header
	$params_header = array(
		'jc' => 'right',
		'textWrap' => 5,
        'lineSpacing' => 120,
	);

	$header_text = "<w:br/>" . "{$_POST['profile_title']} {$_POST['firstname']} {$_POST['lastname']}";
    $header_text .= "<w:br/>" . $_POST['address'];
    $header_text .= "<w:br/>" . "Email: {$_POST['email']}";
    $header_text .= "<w:br/>" . "Phone:{$_POST['phone']}";
    $docx->addHeader($header_text, $params_header);

	// body
	// 1. table of content
	$body_text = "Table of Contents";
	$params_body = array(
		'b' => 'single'
	);
	$docx->addText($body_text, $params_body);
	$docx->addTableContents('Blackadder ITC');

	// page break
	$docx->addBreak('page');

	// 2. content
	foreach($_GET['order'] as $key) {
		switch ($key) {
			case 0: // title
				$title_text = "Title";
				$params_title = array(
					'val' => 1,
					'u' => 'single',
					'font' => 'Blackadder ITC',
					'sz' => 18
				);
				$docx->addTitle($title_text, $params_title);
                $docx->addBreak('line');

                $body_text = $_POST['title'];
				$docx->addText($body_text);
                $docx->addBreak('line');
                break;

			case 1: // registration
				$title_text = "Trial registration";
				$params_title = array(
					'val' => 1,
					'u' => 'single',
					'font' => 'Blackadder ITC',
					'sz' => 18
				);
				$docx->addTitle($title_text, $params_title);
                $docx->addBreak('line');

                $body_text = "Section a)";
				$params_body = array(
					'b' => 'single'
				);
				$docx->addText($body_text, $params_body);

				$body_text = $_POST['registration_a'];
				$docx->addText($body_text);
                $docx->addBreak('line');

                $body_text = "Section b)";
				$params_body = array(
					'b' => 'single'
				);
				$docx->addText($body_text, $params_body);

				$body_text = $_POST['registration_b'];
				$docx->addText($body_text);
                $docx->addBreak('line');
                break;

			case 2: // protocol_version
				$title_text = "Protocol version";
				$params_title = array(
					'val' => 1,
					'u' => 'single',
					'font' => 'Blackadder ITC',
					'sz' => 18
				);
				$docx->addTitle($title_text, $params_title);
                $docx->addBreak('line');

                $body_text = $_POST['protocol_version'];
				$docx->addText($body_text);
                $docx->addBreak('line');
                break;

			case 3: // funding
				$title_text = "Funding";
				$params_title = array(
					'val' => 1,
					'u' => 'single',
					'font' => 'Blackadder ITC',
					'sz' => 18
				);
				$docx->addTitle($title_text, $params_title);
                $docx->addBreak('line');

                $body_text = $_POST['funding'];
				$docx->addText($body_text);
                $docx->addBreak('line');
                break;

			case 4: // roles_and_resp
				$title_text = "Roles and responsibilities";
				$params_title = array(
					'val' => 1,
					'u' => 'single',
					'font' => 'Blackadder ITC',
					'sz' => 18
				);
				$docx->addTitle($title_text, $params_title);
                $docx->addBreak('line');

                $body_text = "Section a)";
				$params_body = array(
					'b' => 'single'
				);
				$docx->addText($body_text, $params_body);

				$body_text = $_POST['roles_and_resp_a'];
				$docx->addText($body_text);

				$body_text = "Section b)";
				$params_body = array(
					'b' => 'single'
				);
				$docx->addText($body_text, $params_body);

				$body_text = $_POST['roles_and_resp_b'];
				$docx->addText($body_text);

				$body_text = "Section c)";
				$params_body = array(
					'b' => 'single'
				);
				$docx->addText($body_text, $params_body);

				$body_text = $_POST['roles_and_resp_c'];
				$docx->addText($body_text);

				$body_text = "Section d)";
				$params_body = array(
					'b' => 'single'
				);
				$docx->addText($body_text, $params_body);

				$body_text = $_POST['roles_and_resp_d'];
				$docx->addText($body_text);
                $docx->addBreak('line');
                break;

			case 5: // bg_and_rationale
				$title_text = "Background and rationale";
				$params_title = array(
					'val' => 1,
					'u' => 'single',
					'font' => 'Blackadder ITC',
					'sz' => 18
				);
				$docx->addTitle($title_text, $params_title);
                $docx->addBreak('line');

                $body_text = "Section a)";
				$params_body = array(
					'b' => 'single'
				);
				$docx->addText($body_text, $params_body);

				$body_text = $_POST['bg_and_rationale_a'];
				$docx->addText($body_text);

				$body_text = "Section b)";
				$params_body = array(
					'b' => 'single'
				);
				$docx->addText($body_text, $params_body);

				$body_text = $_POST['bg_and_rationale_b'];
				$docx->addText($body_text);
                $docx->addBreak('line');
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
<?php

function json($code, $msg) {
    $array['code'] = $code;
    $array['msg']  = $msg;
    echo json_encode($array);
    exit ($code);
}


    session_start();

	/* on vérifie que la code est toujours mémorisé en session et = 6 caractères */
	if (!isset($_SESSION['secure_code'])) {
        json(1, "session: no secure_code defined");
	}

	// on récupère le code entré dans le formulaire
    if ($_POST['captcha'] != 'nope') {
    	$form_secure_code = $_POST['captcha'];
	    $md5_form_secure_code = md5($form_secure_code);
    }
    else {
        json(1, "no captcha defined");
    }

	// on vérifie que la code entré est valide
	$code_is_valid = 0;
	if ($_SESSION['secure_code'] != $md5_form_secure_code) {
        json(1, "secure code is not valid!");
	}

	$owner_email = $_POST["owner_email"];
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From:' . $_POST["email"] . "\r\n";
	$subject = 'A message from your site visitor ' . $_POST["name"];
	$messageBody = "";
	
	if($_POST['name']!='nope'){
		$messageBody .= '<p>Visitor: ' . $_POST["name"] . '</p>' . "\n";
		$messageBody .= '<br>' . "\n";
	}
	if($_POST['email']!='nope'){
		$messageBody .= '<p>Email Address: ' . $_POST['email'] . '</p>' . "\n";
		$messageBody .= '<br>' . "\n";
	}
	if($_POST['state']!='nope'){		
		$messageBody .= '<p>State: ' . $_POST['state'] . '</p>' . "\n";
		$messageBody .= '<br>' . "\n";
	}
	if($_POST['phone']!='nope'){		
		$messageBody .= '<p>Phone Number: ' . $_POST['phone'] . '</p>' . "\n";
		$messageBody .= '<br>' . "\n";
	}	
	if($_POST['fax']!='nope'){		
		$messageBody .= '<p>Fax Number: ' . $_POST['fax'] . '</p>' . "\n";
		$messageBody .= '<br>' . "\n";
	}
	if($_POST['message']!='nope'){
		$messageBody .= '<p>Message: ' . $_POST['message'] . '</p>' . "\n";
	}
	
	if($_POST["stripHTML"] == 'true'){
		$messageBody = strip_tags($messageBody);
	}

	try {
		if (!mail($owner_email, $subject, $messageBody, $headers)) {
			throw new Exception('Unable to send mail');
		}
        else {
			error_log('mail sent');
		}
	} catch(Exception $e) {
        json(1, $e->getMessage());
	}


    session_unset();
    session_destroy();

    json(0, "");
?>

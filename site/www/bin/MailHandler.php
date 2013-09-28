<?php

function json($code, $msg) {
    $array['code'] = $code;
    $array['msg']  = $msg;
    echo json_encode($array);
    exit ($code);
}

function replace_with_br($msg) {
    $order = array("\r\n", "\n", "\r");
    $replace = '<br/>';

    return str_replace($order, $replace, $msg);
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
        json(2, "secure code is not valid!");
	}

	$owner_email = $_POST["owner_email"];
	$headers  = 'From:' . $_POST["email"] . " <kaleessi>" . "\r\n";
	$headers .= 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//	$headers .= 'Content-Transfer-Encoding: quoted-printable' . "\r\n";
	$subject = 'Un message en provenance de kaleessi.fr - ' . $_POST["name"];

	$messageBody = "<html>\n";
	
	if($_POST['name']!='nope'){
		$messageBody .= '<p><strong>Nom du visiteur :</strong> ' . strip_tags($_POST["name"]) . '</p>' . "\n";
	}
	if($_POST['email']!='nope'){
		$messageBody .= '<p><strong>Adresse mail :</strong> ' . strip_tags($_POST['email']) . '</p>' . "\n";
	}
	if($_POST['phone']!='nope'){		
		$messageBody .= '<p><strong>T&eacute;l&eacute;phone :</strong> ' . strip_tags($_POST['phone']) . '</p>' . "\n";
	}	
	if($_POST['message']!='nope'){
		$messageBody .= '<p><strong>Message :</strong><br/>' . "\n";
        $messageBody .= replace_with_br(strip_tags($_POST['message'])) . '</p>' . "\n";
	}

	$messageBody .= "</html>\n";
	
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

<?php

function json($code, $msg) {
    $array['code'] = $code;
    $array['msg']  = $msg;
    echo json_encode($array);
    exit ($code);
}


	$owner_email = $_POST["owner_email"];
	$headers  = 'From:' . $_POST["email"] . " <kaleessi>" . "\r\n";
	$headers .= 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$subject = 'Demande de desinscription de la newsletter';

	$messageBody = "<html>\n";
	
	if($_POST['email']!='nope'){
		$messageBody .= '<p><strong>Adresse mail :</strong> ' . strip_tags($_POST['email']) . '</p>' . "\n";
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

    json(0, "");
?>

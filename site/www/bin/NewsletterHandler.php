<?php


$EMAILS_FILE = "../data/newsletter.txt";
// $GLOBALS["EMAILS_FILE"];


function json($code, $msg) {
    $array['code'] = $code;
    $array['msg']  = $msg;
    echo json_encode($array);
    exit ($code);
}



function is_email_already_exist($email) {
    if (! $fp = fopen($GLOBALS["EMAILS_FILE"], "r")) {
        error_log("Open file (read only mode): " . $GLOBALS['EMAILS_FILE'] . ": failed");
        return 1;
    }

    while(! feof($fp)) {
        $line = fgets($fp, 1024);
        if (chop($line) == $email) {
            error_log("Newsletter: email " . $email . " already exists!");
            return 0;
        }
    }
    fclose($fp);

    return 1;
}


function add_email($email) {
    if (! $fp = fopen($GLOBALS["EMAILS_FILE"], "a")) {
        error_log("Open file (append mode): " . $GLOBALS['EMAILS_FILE'] . ": failed");
        return 1;
    }

    fputs($fp, "$email\n");

    fclose($fp);

    return 0;
}


if ($_POST['email'] != 'nope') {
    $email = $_POST['email'];
    if (is_email_already_exist($email) == 0) {
        json(2, "");
    }
    if (add_email($email) == 0) {
        json(0, "");
    }
}

json(1, "");

?>

<?php


$PRICES_FILE="data/tarifs.txt";
// $GLOBALS["PRICES_FILE"];


function split_value($string, $pattern) {
    if ($string != "") {
        list($item, $value) = split("=", $string);        
        if ($item == $pattern) {
            return str_replace ('"', '', $value);
        }
    }

    return -1;
}

function is_title($line) {
    return split_value($line, "title");
}

function is_subtitle($line) {
    return split_value($line, "subtitle");
}

function is_prestation($line) {
    return split_value($line, "prestation");
}

function is_description($line) {
    return split_value($line, "description");
}

function is_price($line) {
    return split_value($line, "price");
}

function is_endtitle($line) {
    if ($line == "endtitle") {
        return 0;
    }
    return -1;
}

function is_endsubtitle($line) {
    if ($line == "endsubtitle") {
        return 0;
    }
    return -1;
}


function tag_grid_12($end) {
    if ($end) {
        echo '</div>' . "\n";
        return;
    }
    echo '<div class="grid_12">' . "\n";
}

function tag_class_pad4($msg) {
    echo '<h2 class="pad-4">' . $msg . '</h2>' . "\n";
}


function create_prices() {
    if (! $fp = fopen($GLOBALS["PRICES_FILE"], 'r')) {
        error_log("Unable to open file: " . $GLOBALS["PRICES_FILE"]);
        return 1;
    }

    while(! feof($fp)) {
        $title       = -1;
        $subtitle    = -1;
        $prestation  = -1;
        $description = -1;
        $price       = -1;

        $line = trim(chop(fgets($fp, 1024)));

        if (is_endtitle($line) == 0) {
            echo '</div>' . "\n";
            echo '<div class="grid_12 line-1"></div>' . "\n";
        }

        else if (is_endsubtitle($line) == 0) {
            echo '</ul>' . "\n";
            echo '</div><br/>' . "\n";
        }

        else if (($title = is_title($line)) != -1) {
            tag_grid_12(false);
            tag_class_pad4($title);
            tag_grid_12(true);
            echo '<div class="grid_12">' . "\n";
        }


        else if (($subtitle = is_subtitle($line)) != -1) {
            echo '<div class="extra-wrap">' . "\n";
            echo '<p class="color-1">' . $subtitle . '</p>' . "\n";
            echo '<ul class="leaders">' . "\n";
        }

        else if (($prestation = is_prestation($line)) != -1) {
            echo '<li class="color-5"><span>' . $prestation . '</span>' . "\n"; 
        }

        else if (($price = is_price($line)) != -1) {
            echo '<span>' . $price . ' €</span></li>' . "\n";
        }

        else if (($description = is_description($line)) != -1) {
            echo '<p class="it">(' . $description . ')</p>' . "\n";
        }
    }   

    fclose($fp);
}

create_prices();

?>

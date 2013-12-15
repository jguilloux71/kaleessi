function open_gift_certificate_conditions() {
    width  = 800;
    height = 600;

    if (window.innerWidth) {
        var left = (window.innerWidth-width)/2;
        var top = (window.innerHeight-height)/2;
    }
    else {
        var left = (document.body.clientWidth-width)/2;
        var top = (document.body.clientHeight-height)/2;
    }
    window.open(
        'cheques-cadeaux-conditions.php',
        'Conditions',
        'menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+''
    );
}

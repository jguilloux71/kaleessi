/*
Script: Core.js
        Extends mootools.

Copyright:
        Copyright (c) 2008 OVH. All rights reserved.
*/

//
// display tools
//

function displayMessage(msg)
{
    new Element("div", {
        'html': msg,
        'styles': {
            'position': 'absolute',
            'top': '20%',
            'left': '20%',
            'width': '200px',
            'background': '#fff',
            'padding': '20px',
            'border': '1px solid #000'
        }
    }).inject(document.body);
}

//
// url tools
//

function getProtocol(url)
{
    if(!$defined(url)) url = window.location.href;
    var urlparts = url.split('/');
    return urlparts[0];
}

function getHost(url)
{
    if(!$defined(url)) url = window.location.href;
    var urlparts = url.split('/');
    return urlparts[2].replace(/:\d+$/, ''); 
}

function getPort(url)
{
    if(!$defined(url)) url = window.location.href;
    var urlparts = url.split('/');
    return urlparts[2].match(/:\d+$/);
}


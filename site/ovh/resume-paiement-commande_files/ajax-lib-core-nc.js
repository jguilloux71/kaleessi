/*************************************************************************
 * OVH AJAX library
 *
 * - AJAX framework
 * - multi-browser js function abstraction
 *************************************************************************/
 
// TARGET BROWSERS: IE 5.5/6/7 Firefox 1/2, Opera 8/9, Konqueror, Safari, ...

// CHANGELOG:
// v0.1     added newXMLHttpRequest()
// v0.2     added set_attribute() for 'class' and 'id'
// v0.3     added set_attribute() for 'onclick'
// v0.4     added ajax framework, with exemples
// v0.5     clean, added logger and verbosity
// v0.6     allow POST method, with params and contentType in the function send
// v0.7     add get_attribute 

// README: see AJAX_REAME for details

/**
 * global vars
 */
var IE = document.all && !window.opera;

// verbose level are none(0) | info(1) | debug(2)
var VERBOSE = 0;

/************************************************************************
 *                         OVH AJAX framework                           *
 ************************************************************************/

/**
 * request constructor
 */

function ajaxRequest( url, postFunction, method)
{  
    try
    {
        this.xhr = ajax_newXMLHttpRequest();
    }
    catch (exception) 
    {
        alert("Error, your internet browser do not support AJAX requests : " + exception.description);
        window.location.href='http://www.ovh.com/managerv3/error.html';
        return;
    }
    
    // parameters
    method != undefined || ( method = 'GET' );
    
    // attributes
    this.url            = url;
    this.postFunction   = postFunction;
    this.method         = method;
}

/**
 * methods
 */

/**
 * send the AJAX request
 
 *  optional    param           the param string like 'var1=value1&var2=value2' (default is null)
 *  optional    contentType     the request content-type (default is text/xml)
 */
ajaxRequest.prototype.send = function( params, contentType, async)
{
    var object = this;
  
    // parameters
    params      != undefined || ( params = null );
    contentType != undefined || ( contentType = 'text/xml' );
    async       != undefined || ( async = true );
  
    //ajax_logger('sending ' + object.url); // INFO
    try
    {
        object.xhr.open( object.method, object.url, async);
        object.xhr.setRequestHeader("Content-Type", contentType);
        object.xhr.setRequestHeader("Cache-Control", "no-cache");
    
        params != undefined && ( object.xhr.setRequestHeader("Content-length", params.length) );
   
        if (async)
        {
            object.xhr.onreadystatechange = function()
            {
                try
                {
                    if (object.xhr.readyState==4 && object.xhr.status==200)
                    {
                        (VERBOSE > 1) && alert(object.xhr.responseText); // DEBUG
                            
                        if (object.postFunction != undefined)
                        {
                            object.postFunction(object);
                        }
                    }
                }
                catch (exception)
                {
                    // error
                    //alert("Error in onreadystatechange: " + exception);
                }
            }
        }
        
        this.xhr.send(params);
    }
    catch (exception)
    {
        alert("Error while sending ajax request: " + exception.description);
        return false;
    }

    return true;
}

//used for synchronous calls
ajaxRequest.prototype.responseText = function()
{
    return this.xhr.responseText;
}

ajaxRequest.prototype.responseXml = function()
{
    return this.xhr.responseXml;
}
/**
 * functions
 */

//return a new XMLHttpRequest
var newXMLHttpRequest = ajax_newXMLHttpRequest;  // keep backward compatibility
function ajax_newXMLHttpRequest()
{
    var xhr = false;

    /*@cc_on
        @if (@_jscript_version >= 5)
            try
            {
                xhr = new ActiveXObject("Msxml2.XMLHTTP");
            }
            catch (e)
            {
                try
                {
                    xhr = new ActiveXObject("Microsoft.XMLHTTP");
                }
                catch (e2)
                {
                    xhr = false
                }
            }
        @else
            xmlhttp = false;
        @end
    @*/

    if (!xhr && typeof XMLHttpRequest != 'undefined')
    {
        try
        {
            xhr = new XMLHttpRequest();
        }
        catch (e3)
        {
            xhr = false;
        }
    }
    return xhr;
}

// set verbosity level, info just show log, debug dump XML
function ajax_verbosity(level) 
{
    switch (level)
    {
        case 'info':
        VERBOSE = 1;
        break;

        case 'debug':
        VERBOSE = 2;
        break;

        default:
        VERBOSE = 0;
        break;
    }
}

// ajax logger, will create its own div automaticaly
function ajax_logger(msg)
{
    if (VERBOSE > 0)
    {
        var div = document.getElementById('divAjaxLog');

        if (div == undefined)
        {
            div         = document.createElement('DIV');
            var toolbar = document.createElement('DIV');
            var content = document.createElement('DIV');

            set_attribute( div, 'id', 'divAjaxLog'); 
            set_attribute( div, 'style', 'position: absolute; top: 10px; left: 10px; border: 1px solid grey; background-color: #ffffab; padding: 5px;'); 
            set_attribute( toolbar, 'style', 'text-align: center; font-weight: bold;');
            set_attribute( content, 'id', 'divAjaxLogContent');
            set_attribute( content, 'style', 'text-align: left; max-height: 750px; overflow-y: scroll;');
           
            div.appendChild( toolbar);
            div.appendChild( content);
            document.body.appendChild( div);
            
            toolbar.innerHTML = '<a href="#" onclick=\'document.getElementById("divAjaxLog").style.display="none"\'>close</a>';
        }

        var div_content         = document.getElementById('divAjaxLogContent');
        var content             = div_content.innerHTML;
        div_content.innerHTML   = msg + "<br/>" + content; 
    }
}


/************************************************************************
 *                 functions multi-browser abstraction                  *
 ************************************************************************/

function addLoadEvent(func)
{
    var oldonload = window.onload;
    if(typeof window.onload != 'function')
    {
        window.onload = func;
    }
    else
    {
        window.onload = function()
        {
            oldonload();
            func();
        }
    }
}

/**
 * get_attribute
 */
function get_attribute( object, name)
{
    if (object == undefined)
    {
        return null;    // near all browser return this
        //return '';    // but DOM specify empty string
    }

    switch (name)
    {
        case "class":
        if (IE) { // IE
            return object.getAttribute("className");
        } else {
            return object.getAttribute("class");
        }
        break;
        
        case "id":
        if (IE) { // IE
            return object.id;
        } else {
            return object.getAttribute("id");
        }
        break;
        
        case "style":
        if (IE) { // IE
            return object.style.getAttribute("cssText");
        } else {
            return object.getAttribute("style");
        }
        break;

        default:
        return object.getAttribute(name);
        break;
    }
}

/**
 * set_attribute
 *
 * => generic abstract layer for setAttribute DOM function
 * => managed attributes : 'class', 'id', 'style', 'onclick', 'onmouseover', 'onmouseout'
 *
 * @param   object      the object which attributes is set
 * @param   name        the name of the attribute set
 * @param   value       the value of the attribute set
 *
 * XXX /!\ XXX special IE case  XXX /!\ XXX
 * when you want to use function pointer as attributes and that it do not work, try use this :
 * @param   ie_pointer  pointer to the function that gonna be called
 * @param   ie_param    param to pass to the ie_pointer function
 * XXX /!\ XXX if not given, those args values are marked undefined XXX /!\ XXX
 *
 * tested on: IE 6.0, Firefox 1.X/2
 */
function set_attribute( object, name, value, ie_pointer, ie_param )
{
    if (object == undefined)
    {
        return null;
        //return '';
    }
    
    switch (name)
    {
        case "class":
        if (IE) { // IE
            object.setAttribute("className", value)
        } else {
            object.setAttribute("class", value)
        }
        break;
        
        case "id":
        if (IE) { // IE
            object.id = value;
        } else {
            object.setAttribute("id", value);
        }
        break;
        
        case "style":
        if (IE) { // IE
            object.style.setAttribute("cssText", value);
        } else {
            object.setAttribute("style", value);
        }
        break;

        case "onclick":
        if (IE) { // IE
            if( ie_pointer != undefined) {
                object.onclick = function(e) {
                    e=e || window.event;
                    ie_pointer( ie_param);
                };
            } else {
                object.onclick = function(e) {
                    eval( value);
                };
            }
        } else {
            object.setAttribute("onclick", value);
        }
        break;
 
        case "onmouseover":
        if (IE) { // IE
            if( ie_pointer != undefined) {
                object.onmouseover = function(e) {
                    e=e || window.event;
                    ie_pointer( ie_param);
                };
            } else {
                object.onmouseover = function(e) {
                    eval( value);
                };
            }
        } else {
            object.setAttribute("onmouseover", value);
        }
        break;

        case "onmouseout":
        if (IE) { // IE
            if( ie_pointer != undefined) {
                object.onmouseout = function(e) {
                    e=e || window.event;
                    ie_pointer( ie_param);
                };
            } else {
                object.onmouseout = function(e) {
                    eval( value);
                };
            }
        } else {
            object.setAttribute("onmouseout", value);
        }
        break;
     
        case "onblur":
        if (IE) { // IE
            if( ie_pointer != undefined) {
                object.onblur = function(e) {
                    e=e || window.event;
                    ie_pointer( ie_param);
                };
            } else {
                object.onblur = function(e) {
                    eval( value);
                };
            }
        } else {
            object.setAttribute("onblur", value);
        }
        break;

        case "onchange":
        if (IE) { // IE
            if( ie_pointer != undefined) {
                object.onchange = function(e) {
                    e=e || window.event;
                    ie_pointer( ie_param);
                };
            } else {
                object.onchange = function(e) {
                    eval( value);
                };
            }
        } else {
            object.setAttribute("onchange", value);
        }
        break;

        case "onfocus":
        if (IE) { // IE
            if( ie_pointer != undefined) {
                object.onfocus = function(e) {
                    e=e || window.event;
                    ie_pointer( ie_param);
                };
            } else {
                object.onfocus = function(e) {
                    eval( value);
                };
            }
        } else {
            object.setAttribute("onfocus", value);
        }
        break;

        default:
        object.setAttribute( name, value)
        break;
    }
}

//EOF

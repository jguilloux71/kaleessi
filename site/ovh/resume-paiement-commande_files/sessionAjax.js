// this package relies on some cgi that will give session info from session cookies contained in web browsers

// this code is used to allow customer to use their session
// from any page on the website



// display current session  
function checkSession()
{
    // ready to display from cgi ?
    var sessionCsidForAjaxHeader = document.getElementById('sessionCsidForAjaxHeader');
    var sessionNicForAjaxHeader  = document.getElementById('sessionNicForAjaxHeader');

    if ((sessionCsidForAjaxHeader  ) && (sessionNicForAjaxHeader && sessionNicForAjaxHeader.value != ''))
    {
        var div     = document.getElementById('ajaxSessionDivNic');
        var div2    = document.getElementById('ajaxSessionDivDelog');
        var div3    = document.getElementById('noSession');
        if (div)
        {
            //div.innerHTML=div.innerHTML.replace(/#NIC#/g, sessionNicForAjaxHeader.value);
            $('linkToManager').set('text', sessionNicForAjaxHeader.value);
            //a.innerHTML=a.innerHTML.replace(/#NIC#/g, sessionNicForAjaxHeader.value);
                
            document.getElementById('linkToManager').href='https://www.ovh.com/managerv3/beta/home.pl?csid='+sessionCsidForAjaxHeader.value;
            document.getElementById('ajaxCsid').value=sessionCsidForAjaxHeader.value;
            div.style.display   = "block";
            div2.style.display  = "block";
            div3.style.display  = "none";
        }
    }
    else
    {
        var csidElt=document.getElementById('ajaxCsid');
        if (csidElt)
        {
            var ssid = csidElt.value;
            var params='?sessionId='+ssid;
            request = new ajaxRequest( '/cgi-bin/ajax/sessionAjax.cgi'+params, rqCheckSession);

            request.send();
        }
    }
}

// delog session when the customer clicked "I am not X"
function delogSession(action, url)
{
    var csidElt=document.getElementById('ajaxCsid');
    if (csidElt)
    {
        var ssid = csidElt.value;
        var params='?sessionId='+ssid;
        request = new ajaxRequest( '/cgi-bin/ajax/delogAjax.cgi'+params, rqDelogSession);

        request.send();
        if (action == 1)
        {
            setTimeout("location.reload()",  1500);
        }
        else if (action == 2)
        {
            setTimeout("window.location='"+url+"'",  1500);
        }
    }        
}




// ----------------------------------------------------------------------------
function getPosElData(xml,tagName,pos)
{
	if(!xml) return false;
	var el = xml.getElementsByTagName(tagName).item(pos);
    if (el)
    {
        if (el.firstChild)
        {
            return el.firstChild.data;
        }
        else
        {
            return '';
        }
    }
    else
    {
        return 'no_el';
    }
}

function getFirstElData(xml,tagName)
{
    return  getPosElData(xml,tagName,0);
}




// ----------------------------------------------------------------------------
function rqCheckSession(object)
{
    var xml=object.xhr.responseXML;

    var div     = document.getElementById('ajaxSessionDivNic2');
    var div2    = document.getElementById('ajaxSessionDivDelog');
    var div3    = document.getElementById('noSession');
    var aNic    = document.getElementById('linkToManager');

    if (div)
    {

        if( getFirstElData(xml,'status') != 100) // failure, hide
        {
            // if there is other status than 100..
            if (div)
            {
                div.style.display = "none";
            }

            if (div2)
            {
                div.style.display = "none";
            }

            div3.style.display = "block";
            return;
        }
        else
        {
            var sessionQuantity=getFirstElData(xml,'sessionQuantity');
            var pos=0;
            var hostname = getFirstElData(xml,'hostname');
            while (sessionQuantity>0)
            {
                sessionQuantity--;

                //msg(getPosElData(xml,'nic',pos));
                $('linkToManager').set('text', getPosElData(xml, 'nic', pos));

                document.getElementById('linkToManager').href='https://'+hostname+getPosElData(xml,'specialP',pos)+'/managerv3/beta/home.pl?csid='+getPosElData(xml,'csid',pos);
                document.getElementById('ajaxCsid').value=getPosElData(xml,'csid',pos);
                pos++;
                div.style.display   = "block";
                div2.style.display  = "block";
                div3.style.display  = "none";

                sessionQuantity=0;
            }


        }
    }

}



// ----------------------------------------------------------------------------

function rqDelogSession(object)
{

    var xml=object.xhr.responseXML;

    var div     = document.getElementById('ajaxSessionDivNic');
    var div2    = document.getElementById('ajaxSessionDivDelog');
    var div3    = document.getElementById('noSession');

    
    // whatever the status, hide session
    if (div)
    {
        div.style.display = "none";
    }
    if (div2)
    {
        div2.style.display = "none";
    }
    if (div3)
    {
        div3.style.display = "block";
    }
    
    return;
}

window.addEvent('domready', function(){
    checkSession();
});






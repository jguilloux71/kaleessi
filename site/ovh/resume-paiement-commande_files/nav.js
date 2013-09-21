//javascript document

// Easy function allowing popup options/

function open_page(URL)
    { 
        // check if we have GET param and hod it in url
        if (URL.match('=') != null) {
            
            return !window.open(URL+"&gm=pop",'_blank','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=650,height=600,screenX=90,screenY=90');
            return false;
        }

        // Check if the variable is empty or not
        else if (URL != '')
        {   
            return !window.open(URL+'?gm=pop','_blank','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=650,height=600,screenX=90,screenY=90');
            return false;
        } 
       
        // Else return false and href will take the deal
        else  
        {
            return false;
        }
    }



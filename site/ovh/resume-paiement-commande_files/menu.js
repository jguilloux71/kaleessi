//
// JS menu
//

window.addEvent('domready',function() {

    // if a cookie exists, we read it, and add the class to the selected tab
    var selectedMenu = function() {
        if (Cookie.read('selectedMenuItem')) {
            var selectedItem = Cookie.read('selectedMenuItem');

            var url = window.location.href;
            var section = url.split('\/fr\/')[1];
                if (section) {
                    section = section.split('/')[0];
                }

            var validSelection = false;
            $$('.'+selectedItem+'Link').each(function(el) {
                if (el.href.contains(section)) {
                    validSelection = true;
                }
            });

            if ($$('#menuDropper li a.'+selectedItem) && validSelection) {
                $$('#menuDropper li a.'+selectedItem).addClass('selected');
            }
            else  {
                Cookie.dispose('selectedMenuItem');
            }
        }
    }

    selectedMenu();

    // we set a cookie to let the clicked tab coloured in navigation
    $$('div.drop-menu a').addEvent('click', function() {
        Cookie.write('selectedMenuItem',this.getParent('div.drop-menu').get('id').replace('-drop-down',''), {duration: '', path: '/'});
    }); 

    // add the dynamics to the links
    var hideTimer = "";

    $$('#menuDropper li a').addEvent('click', function(el) {
        // wether we morph the menu, wether the menu will toggle without effect
        var morph = true;
        var oneDisplayed = $$('.drop-menu').getStyle('display');
            if (oneDisplayed.contains('block')) morph = false
    
        var menuElement = el.target.get('class').replace(/ selected| /,'')+'-drop-down';
            menuElement = $$('#'+menuElement)[0];
            
        // if click happens on a menu item allready displayed, we'll hide it 
        var unMorph = false;
        if ($(el.target.get('class').replace(' selected','')+'-drop-down')) {
            var thisDisplayed = menuElement.getStyle('display');
                if (thisDisplayed.contains('block')) unMorph = true;
        }

        //action !
        $$('#menuDropper li a').removeClass('selected');
        if (unMorph) {
            // click intends to hide menu (same item clicked)
            hide(menuElement);
            // stop the script here
            return false;
        }
        else {
            // hide all menus for the new one to appear
            $$('#menuDropper li div.drop-menu').setStyles({
                'display':'none',
                'opacity':'0'
            });
        }
        if(morph) {
            // appears with effect
            menuElement.morph({
                'display' : 'block',
                'opacity' : 1
            });
            this.addClass('selected');
        } 
        else {
            // toggles without effect
             menuElement.setStyles({
                'display' : 'block',
                'opacity' : 1
            });
            this.addClass('selected');
        }
    });

    $$('#menuDropper li').addEvent('mouseenter', function() {  clearTimeout(hideTimer); });
    $$('#menuDropper li a').addEvent('mouseenter', function() {  clearTimeout(hideTimer); });
    
    $$('div.drop-menu').addEvents({
        'mouseleave' : function() {
                            $$('.drop-menu').each(function(el) {
                                if (el.getStyle('display') == 'block') {
                                    hideTimer = hide.delay('500','',el);    
                                }
                            });
                        },
        'mouseenter' : function() { clearTimeout(hideTimer); }
    });
    

   var hide = function(el) {
        var hideFx = new Fx.Morph(el,{duration: '350'});
        hideFx.start({
            'opacity' : 0
        });
        $$('#menuDropper li a').removeClass('selected');
        (function() {
            el.setStyle('display','none');
            selectedMenu();
        }).delay('350');
    }


});


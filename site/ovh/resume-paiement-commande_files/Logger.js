/*
Script: Logger.js
        Logger system. 

Examples:
        logger.setLevel(4);             // enable logger to the most verbose mode
        
        logger.debug('hello world');    // debug
        logger.info('hello world');     // info
        logger.warn('hello world');     // warn
        logger.error('hello world');    // error
        
        logger.time('myScript');        // start timer ...
        [...]                           // ... do some stuff ...
        logger.timeEnd('myScript');     // .. then display the time elapsed till start
        
        logger.clear;                   // clear logger

Copyright:
        Copyright (c) 2008 OVH. All rights reserved.

*/

var Logger = new Class({
    initialize: function(){
        this.level = 0;             // 0: disabled (default), 1: error, 2: warn, 3: info, 4: debug
        this.msgQ = new Array();
        this.msgCount = 0;
        this.timeMap = {};
    },
    setLevel: function(level){
        this.level = level;
        if (this.level) this.waitingForLoggerReady();
    },
    waitingForLoggerReady: function(){
    
        window.addEvent('domready', function(){
            
            if ($('log')) return;

            var toolbar = new Element('div', {
                'id': 'toolbar',
                'styles': {
                    'height': '14px',
                    'border-top': '1px solid ThreeDHighlight',
                    'border-bottom': '1px solid ThreeDShadow',
                    'padding': '2px 6px',
                    'background': 'ThreeDFace',
                    'clear': 'both'
                }
            }).inject(document.body);

            var clear = new Element('a', {
                'href': '#',
                'html': 'Clear',
                'styles': {
                    'text-decoration': 'none',
                    'position': 'absolute',
                    'left': '10px'
                },
                'events': {
                    'click': function(){
                        this.clear();
                    }.bind(this)
                }
            }).inject(toolbar);

            var close = new Element('a', {
                'href': '#',
                'html': 'Close',
                'styles': {
                    'text-decoration': 'none',
                    'position': 'absolute',
                    'right': '10px'
                },
                'events': {
                    'click': function(){
                        this.close();
                    }.bind(this)
                }
            }).inject(toolbar);

            var log = new Element('div', {
                'id': 'log',
                'styles': {
                    'overflow': 'auto',
                    'position': 'absolute',
                    'left': '0',
                    'width': '100%'
                } 
            }).inject(document.body);

            this.flush();

        }.bind(this) );
    },
    flush: function(){
        this.msgQ.each(function(item){
            this.log(item[0], item[1]);
        }, this);
    },   
    clear: function(){
        $('log').empty();
        this.msgCount = 0;
    },
    close: function(){
        $('toolbar').style.display='none';
        $('log').style.display='none';
    },
    debug: function(msg){
        if(this.level>3) this.log(msg, "debug");
    }, 
    info: function(msg){
        if(this.level>2) this.log(msg, "info");
    },
    warn: function(msg){
        if(this.level>1) this.log(msg, "warn");
    },
    error: function(msg){
        if(this.level) this.log(msg, "error");
    },
    log: function(msg, type)
    {
        if ($('log'))
        {
            if (this.msgCount++ > 1000) this.clear();

            switch(type)
            {
                case 'debug':
                    color = 'grey';
                break;
                case 'info':
                    color = 'blue';
                break;
                case 'warn':
                    color = 'orange';
                break;
                case 'error':
                    color = 'red';
                break;
                default:
                    color = 'black';
                break;
            }

            new Element('div', {
                'html': msg,
                'styles': {
                    'text-align': 'left',
                    'position': 'relative',
                    'border-bottom': '1px solid #D7D7D7',
                    'padding': '2px 4px 1px 6px',
                    'background-color': '#FFFFFF',
                    'color': color
                }
            }).inject($('log'), 'top');
        }
        else
        {
            this.msgQ.push([msg, type]);
        }
    },
    time: function(name){
        this.timeMap[name] = (new Date()).getTime()
    },
    timeEnd: function(name){
        if (name in this.timeMap)
        {
            var delta = (new Date()).getTime() - this.timeMap[name];
            this.log(name+ ":"+ delta+"ms");
            delete this.timeMap[name];
        }
    }
});

var logger = new Logger();


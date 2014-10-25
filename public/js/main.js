/**
 * main.js
 *
 * responsible for adding menu to the page
 */



;(function ( window, document, Btn, FastClick, undefined) {
    'use strict';



    // Used for creating alert messages popups for button
    function alertEvent( title ) {
        return function() { window.alert( title ); };
    }



    // Used for creating links for button
    function linkEvent( link ) {
        return function() { window.location.href = link; };
    }



    // remove CSS that makes the menu invisible onload
    function removeIsMainInvisble() {
        document.documentElement.classList.remove('is-main-invisible');
    }



    // The functions that run after `DOMContetedLoaded`
    function onload() {
        // fast click for iOS / Android
        if ( document.documentElement.classList.contains('touch-fix') ) FastClick.attach(document.body);


        // creates the menu
        new Btn( 'Menu' ).addClass('skin-main_menu')
            .append( new Btn('Artsy').addClass('queryButtonMood').addClass('skin-www').on( 'click', linkEvent('#') ) )

            .append( new Btn('Classy').addClass('queryButtonMood').addClass('skin-blog').on( 'click', linkEvent('#') ) )

            .append( new Btn('Festive').addClass('queryButtonMood').addClass('skin-twitter').on( 'click', linkEvent('#') ) )

            .append( new Btn('Category Menu').addClass('skin-menu')

                .append( new Btn('Family Time').addClass('queryButtonCategory').addClass('skin-disaster_artist').on( 'click', linkEvent('#') ) )

                .append( new Btn('Date Night').addClass('queryButtonCategory').addClass('skin-nyan_cat').on( 'click', linkEvent('#') ) )

                .append( new Btn('Live Music').addClass('queryButtonCategory').addClass('skin-streets_of_rage').on( 'click', linkEvent('#') ) )

                .append( new Btn('Search by Price').addClass('skin-menu')
                    .append( new Btn('Free').addClass('queryButtonPrice').addClass('skin-alert'))
                    .append( new Btn('$').addClass('queryButtonPrice').addClass('skin-alert').on( 'click', linkEvent('#') ) )
                    .append( new Btn('$$$').addClass('queryButtonPrice').addClass('skin-alert').on( 'click', linkEvent('#') ) )
                    .append( new Btn('$$$$').addClass('queryButtonPrice').addClass('skin-alert').on( 'click', linkEvent('#') ) )
                    .append( new Btn('$$$$$').addClass('queryButtonPrice').addClass('skin-alert').on( 'click', linkEvent('#') ) )
                    .append( new Btn('Go!').addClass('queryButtonAction').addClass('skin-fontef'))
                )
                .append( new Btn('Another Cat').addClass('queryButtonCategory').addClass('skin-www'))
                .append( new Btn('Go!').addClass('queryButtonAction').addClass('skin-fontef') ) )

            .append( new Btn('Rainy Day').addClass('queryButtonMood').addClass('skin-hacker_news').on( 'click', linkEvent('#') ) )

            .append( new Btn('Go!').addClass('queryButtonAction').addClass('skin-fontef').on( 'click', linkEvent('#') ) )

            .append( new Btn('Sporty').addClass('queryButtonMood').addClass('skin-processing').on( 'click', linkEvent('#') ) )

            .append( new Btn('mood').addClass('queryButtonMood').addClass('skin-html5rocks').on( 'click', linkEvent('#') ) )

            // Appending the button menu to the DOM - `#main` element
            .appendTo( '#main' );



        // remove the class that makes the menu invisible
        if ('requestAnimationFrame' in window) {
            window.requestAnimationFrame( removeIsMainInvisble );
        } else if ('webkitRequestAnimationFrame' in window) {
            window.webkitRequestAnimationFrame( removeIsMainInvisble );
        } else {
            window.setTimeout( removeIsMainInvisble, 0 );
        }
    }



    // the init function - also call it self
    (function init() {
        // iOS / Android - touch hack fix by sniff user agent - maybe better to use modernizr touch event detect - but not sure it's a problem of all Webkit
        document.documentElement.className += ((/(like Mac OS X)|(Android)/i.test(window.navigator.userAgent)) ? ' touch-fix' : ' no-touch-fix');

        // Makes the menu invisible for fading in animation
        document.documentElement.className += ' is-main-invisible';

        // Makes sure everything is work when blocking render
        document.addEventListener( 'DOMContentLoaded', onload, false );
    } ());


} (window, document, Btn, FastClick) );

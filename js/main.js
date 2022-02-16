import $ from 'jquery';
import { appearence } from './animations/appearence';

$(document).ready(function(){
    appearence();
    
    $('#menu-language-switcher-desktop').click(function(e){
        $(this).find('.sub-menu').toggleClass('active-switcher')
    });

    $('#burgerButton').click(function(){
        $(this).toggleClass('active-burger');
        $('#mobileNavigation').toggleClass('active-mobile-navigation');
    })

    $('.menu-item-has-children').click(function(){
        $(this).toggleClass('active-item')
    })
})
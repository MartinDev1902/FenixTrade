import $ from 'jquery';

function header(){
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
}

export {header};
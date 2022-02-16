import $ from 'jquery';
import { appearence } from './animations/appearence';
import { header } from './parts/header';
import 'slick-carousel';

$(document).ready(function(){
    appearence();
    header();
    $('#mainSlider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        centerMode: true,
        variableWidth: true,
        infinite: true,
        focusOnSelect: true,
        cssEase: 'linear',
        touchMove: true,
      });
})
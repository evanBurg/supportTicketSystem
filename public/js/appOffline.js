
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

/*require('./bootstrap');*/

/*require('jquery');*/

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('#zohan').hover(function(event){
    let bottom = $(this).offset().top + 1250;
    console.log(bottom);
    $('html,body').animate({scrollTop: bottom}, 'slow');
});
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});


$(document).ready(function () {
    $('#content').summernote();
});

import Timer from 'easytimer.js';

var timer = new Timer();
$('#chronoExample .startButton').click(function () {
    timer.start();
});
$('#chronoExample .pauseButton').click(function () {
    timer.pause();
});
$('#chronoExample .stopButton').click(function () {
    timer.stop();
});
$('#chronoExample .resetButton').click(function () {
    timer.reset();
});
timer.addEventListener('secondsUpdated', function (e) {
    $('#chronoExample .values').html(timer.getTimeValues().toString());
});
timer.addEventListener('started', function (e) {
    $('#chronoExample .values').html(timer.getTimeValues().toString());
});
timer.addEventListener('reset', function (e) {
    $('#chronoExample .values').html(timer.getTimeValues().toString());
});

$('#summernote').summernote({
    placeholder: 'Описание',
    tabsize: 2,
    height: 400,
    // width: 900
});

// $(document).ready(function () {
//     if (window.location.pathname === '/close-eye') {
//         console.log($('#close-eye-e'));
//         let randomNumber = Math.floor((Math.random() * 4) + 1);
//             console.log(randomNumber);
//         let round = 1;
//         do{
//             $("button").click(function () {
//
//                 buttonClick($(this), randomNumber)
//             });
//
//         } while(round < 6)
//
//         // for(let round = 1; round <= 15; i++){
//         //
//         //     $("button").click(function () {
//         //
//         //         if (($(this).attr('id') === 'close-eye-arrow-right' && randomNumber === 1) ||
//         //             ($(this).attr('id') === 'close-eye-arrow-down' && randomNumber === 2) ||
//         //             ($(this).attr('id') === 'close-eye-arrow-lef' && randomNumber === 3) ||
//         //             ($(this).attr('id') === 'close-eye-arrow-up' && randomNumber === 4)){
//         //             console.log('right answer');
//         //         } else {
//         //             console.log('wrong answer')
//         //         }
//         //         console.log($(this).attr('id'));
//         //         round++;
//         //     });
//         // }
//         // let round = 1;
//         // do {
//         //
//         // } while(round <= 15);
//
//
//         // }
//     }
//
//     function buttonClick(buttonClicked, randomNumber){
//                 if (($(this).attr('id') === 'close-eye-arrow-right' && randomNumber === 1) ||
//                     ($(this).attr('id') === 'close-eye-arrow-down' && randomNumber === 2) ||
//                     ($(this).attr('id') === 'close-eye-arrow-lef' && randomNumber === 3) ||
//                     ($(this).attr('id') === 'close-eye-arrow-up' && randomNumber === 4)) {
//                     console.log('right answer');
//                 } else {
//                     console.log('wrong answer')
//                 }
//                 console.log($(this).attr('id'));
//                 round++;
//     }
// });



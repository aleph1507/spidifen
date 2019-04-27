
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app'
// });

class vidController {

   constructor(video) {
       this.video = video;
       this.ratingsDiv = document.getElementById("ratingsDiv");
       this.registerVideoEndedListener();
       this.videoEnded();
   }

   registerVideoEndedListener() {
       this.video.addEventListener('ended', this.videoEnded.bind(this));
    }

    videoEnded(event) {
       $(this.ratingsDiv).collapse('show');
       let ratings = document.getElementsByClassName('starRating');
       let rCtrl = new ratingController(ratings);
    }
}

class ratingController {
    constructor(ratings) {
        this.ratings = ratings;
        this.registerRatingsListener();
    }

    registerRatingsListener() {
        for(let i = 0; i<this.ratings.length; i++) {
            this.ratings[i].addEventListener('click', e => this.radioClicked(e))
        }
    }

    radioClicked(event) {
        document.getElementById('rating').value = event.target.value;
    }
}

window.addEventListener("load", function() {
    let hvid = document.getElementById("hvid"), hvid_controller;
    if(hvid) hvid_controller = new vidController(hvid);
});

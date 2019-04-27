
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

class sampleFormCtrl {
    constructor(sample_form) {
        this.sample_form = sample_form;
        this.registerSubmitListener();
    }

    registerSubmitListener() {
        this.sample_form.addEventListener('submit', e => this.formSubmitted(e))
    }

    formSubmitted(event) {
        event.preventDefault();
        let form = event.target;
        let valdation_ul = document.getElementById('validation-errors');
        valdation_ul.innerHTML = '';

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        let formData = {
            'code' : form.elements["code"].value,
            'fullName' : form.elements["fullName"].value,
            'email' : form.elements["email"].value,
            'address' : form.elements["address"].value,
            'cb1' : form.elements["cb1"].checked,
            'cb2' : form.elements["cb2"].checked,
            'cb3' : form.elements["cb3"].checked,
        };
        $.ajax({
            type: 'POST',
            url: '/sample/store',
            data: formData,
            dataType: 'json'
        })
            .done(function(data) {
                console.log('done');
                valdation_ul.innerHTML = '';
                $('#spidifen-modal').modal('hide');
                // $('#ty-form').modal('show');
                let ty_form_controller = new tyFormCtrl(data.id);
                console.log(data);
        })
            .fail(function(data) {
                console.log('fail');
                for(let key in data.responseJSON.errors) {
                    valdation_ul.innerHTML += "<li>" + data.responseJSON.errors[key] + "</li>";
                }
        });
    }
}

class tyFormCtrl {
    constructor(sample_id) {
        this.ty_form = document.getElementById('ty_form');
        this.sampleRecipient_id = sample_id;
        this.registerSubmitListener();
        $('#ty-modal').modal('show');
    }

    registerSubmitListener() {
        this.ty_form.addEventListener('submit', e => this.formSubmitted(e))
    }

    formSubmitted(event) {
        event.preventDefault();
        let form = event.target;
        let q1_value = this.ty_form.elements["Q1"].value,
            q2_value = this.ty_form.elements["Q2"].value;

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        let formData = {
            'Q1' : q1_value,
            'Q2' : q2_value,
            'sampleRecipient_id' : this.sampleRecipient_id
        };
        // $.ajax({
        //     type: 'POST',
        //     url: '/sample/store',
        //     data: formData,
        //     dataType: 'json'
        // })
        //     .done(function(data) {
        //         console.log('done');
        //         valdation_ul.innerHTML = '';
        //         $('#spidifen-modal').modal('hide');
        //         console.log(data);
        //     })
        //     .fail(function(data) {
        //         console.log('fail');
        //         for(let key in data.responseJSON.errors) {
        //             valdation_ul.innerHTML += "<li>" + data.responseJSON.errors[key] + "</li>";
        //         }
        //     });
        console.log(formData);
    }
}

window.addEventListener("load", function() {
    let hvid = document.getElementById("hvid"), hvid_controller;
    if(hvid) hvid_controller = new vidController(hvid);
    let sample_form = document.getElementById('sample_form'), sf_controller;
    if(sample_form) sf_controller = new sampleFormCtrl(sample_form);
});

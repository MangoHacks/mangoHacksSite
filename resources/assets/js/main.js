var Vue = require('vue');
Vue.use(require('vue-resource'));
import PreRegisterModal from './components/PreRegisterModal.vue'

Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('content');

new Vue({
    el: '#app',
    components: {
        PreRegisterModal
    },
    methods: {
        onExternalModal(e) {
            e.preventDefault();
            this.$broadcast('external-modal-open');
        }
    },
    ready() {
        console.log('ready');
    }
});

//$(document).ready(function(){
//    var $modal = $('#signup-form');
//
//    $('.button.register').on('click', function(e){
//        e.preventDefault();
//        $modal.addClass('active');
//    });
//
//    $('.button.cancel').on('click', function(e){
//        e.preventDefault();
//        $modal.removeClass('active');
//    });
//});
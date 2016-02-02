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

$(document).ready(function(){
  var $nav = $('.nav .menu');

  $('.nav').sticky();


  $('.mobile-trigger').on('click',function (e) {
     e.preventDefault();
     if(!$nav.hasClass('active')){
         $nav.addClass('active');
         $('.mobile-trigger').removeClass('active');
         $('.mobile-close').addClass('active');
     }
  });

  $('.mobile-close').on('click', function(e){
    e.preventDefault();
    if($nav.hasClass('active')){
        $nav.removeClass('active');
        $('.mobile-trigger').addClass('active');
        $('.mobile-close').removeClass('active');
    }
  });

  $('.nav .menu a[href^="#"], .anchors-wrap a').on('click',function (e) {
    if(this.hash){
      e.preventDefault();

      var target = this.hash;
      var $target = $(target);

      $('html, body').stop().animate({
        'scrollTop': $target.offset().top
      }, 900, 'swing', function () {
        window.location.hash = target;
      });
    }
  });
  $('.main-button.sponsor').on('click',function (e) {
    if(this.hash){
      e.preventDefault();

      var target = this.hash;
      var $target = $(target);

      $('html, body').stop().animate({
        'scrollTop': $target.offset().top
      }, 900, 'swing', function () {
        window.location.hash = target;
      });
    }
  });
});

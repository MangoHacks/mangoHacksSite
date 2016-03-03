var Vue = require('vue');
Vue.use(require('vue-resource'));
import PreRegisterModal from './components/PreRegisterModal.vue';
var moment = require('moment');

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

new Vue({
    el: '#live',
    data: {
        deadline: null,
        message: '',
        subtitle: '',
        updates: null,
        schedule_entries: null
    },
    methods: {
        formatParseDate(parseDate) {
            return moment(parseDate).format("ddd h:mm A");
        }
    },
    ready() {
        var self = this;
        var timer = null;
        var Deadline = Parse.Object.extend("CountdownItem");

        var query = new Parse.Query(Deadline);
        query.get("lFY2XFA6e8", {
            success: (countdownItem) => {
                var endTime = countdownItem.get('time');
                var then = moment(endTime);
                self.deadline = then;
                timer = setInterval(function() {
                    var now  = moment(Date.now());
                    var ms = moment(then,"DD/MM/YYYY HH:mm:ss").diff(moment(now,"DD/MM/YYYY HH:mm:ss"));
                    var d = moment.duration(ms);
                    var s = Math.floor(d.asHours()) + moment.utc(ms).format(":mm:ss");
                    self.message = s;

                    if(d == 0) {
                        self.subtitle = "It's time!";
                        return clearInterval(timer);
                    }
                    else {
                        self.subtitle = countdownItem.get('label');
                    }
                }, 1000);
            },
            error: (object, error) => {
                // The object was not retrieved successfully.
                // error is a Parse.Error with an error code and message.
            }
        });


        var Updates = Parse.Object.extend('Update');
        var updatesQuery = new Parse.Query(Updates);
        updatesQuery.ascending('startTime');
        updatesQuery.find({
            success: (updates) => {
                self.updates = updates;
            },
            error: (object, error) => {
            }
        });

        var Schedule = Parse.Object.extend('ScheduleItem');
        var schedulesQuery = new Parse.Query(Schedule);

        schedulesQuery.find({
            success: (dates) => {
                self.schedule_entries = dates;
            },
            error: (object, error) => {
            }
        });
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

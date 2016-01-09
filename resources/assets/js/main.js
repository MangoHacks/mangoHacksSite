$(document).ready(function(){
    var $modal = $('#signup-form');

    $('.button.register').on('click', function(e){
        e.preventDefault();
        $modal.addClass('active');
    });

    $('.button.cancel').on('click', function(e){
        e.preventDefault();
        $modal.removeClass('active');
    });

});
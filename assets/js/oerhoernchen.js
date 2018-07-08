/* general functions */


// console.log fallback
if (typeof console === 'undefined') {
  window.console = {
    log: function() {}
  };
}

$(document).ready(function() {

  $('[data-toggle="tooltip"]').tooltip();

  // toogle action for license filter, dynamic content event
  $("body").on('click',"a.card-body-toggle", function(e){
    e.preventDefault();
    $(this).parent().toggleClass("toggled");
    $(this).parent().parent().find('.card-body:first').toggle();
  });

});
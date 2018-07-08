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


  /* LICENSE FILTER */
    // listen for select change events
  // license filter explanation
  $('select[name="license-filter"], select[name="web-search-license-filter"], select[name="media-search-license-filter"]').change(function() {
    var val = $(this).find(':selected').val();
    var explanation_div = $(this).parent().parent().find('div.license-explanation:first');
    console.log('explanation_div',explanation_div,$(this).parent());
    $('div', explanation_div).hide();
    switch (val) {
      case 'only-oer':
        $('div[data-value="oer"]', explanation_div).show();
        break;
      case 'nc':
        $('div[data-value="oer"]', explanation_div).show();
        $('div[data-value="nc"]', explanation_div).show();
        break;
      case 'nc-nd':
        $('div[data-value="oer"]', explanation_div).show();
        $('div[data-value="nc-nd"]', explanation_div).show();
        break;
      case 'no-filter':
        $('div[data-value="no-filter"]', explanation_div).show();
        break;
    }
  }).change();

});
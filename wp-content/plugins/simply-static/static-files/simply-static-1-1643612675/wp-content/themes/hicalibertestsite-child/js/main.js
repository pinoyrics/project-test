var $wpAdminBar = $('#wpadminbar');
  if ($wpAdminBar.length) {
	  $('#header').addClass('topAdmin');
  } else {
	  $('#header').removeClass('topAdmin');
  }
  
var $ = jQuery.noConflict();
$(document).ready(function($){
//LAZY LOAD SCRIPT
	var lazyLoadInstance = new LazyLoad({
	  elements_selector: ".lazy"
	});
	
	//FILTER POST BY ISOTOPE
  // init Isotope
  var $container = $('.isotope').isotope({
    itemSelector: '.element-item'
  });

  // filter functions
  var filterFns = {
    // show if number is greater than 50
    numberGreaterThan50: function() {
      var number = $(this).find('.number').text();
      return parseInt(number, 10) > 50;
    },
    // show if name ends with -ium
    ium: function() {
      var name = $(this).find('.name').text();
      return name.match(/ium$/);
    }
  };

  // bind filter button click
  $('.filters-button-group').on( 'click', 'button', function() {
		var filterValue = $( this ).attr('data-filter');
		$container.isotope({ filter: filterValue });
	});
  
   $('.button-group').find('button').removeClass('is-checked');
   $('.button-group').find('button[data-filter="*"]').addClass('is-checked');

  // change is-checked class on buttons
  $('.button-group').each( function( i, buttonGroup ) {
		var $buttonGroup = $( buttonGroup );
		$buttonGroup.on( 'click', 'button', function() {
		  $buttonGroup.find('.is-checked').removeClass('is-checked');
		  $( this ).addClass('is-checked');
		});
	});




});
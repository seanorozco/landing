jQuery(document).ready(function($) {
  
// Inside of this function, $() will work as an alias for jQuery()
// and other libraries also using $ will not be accessible under this shortcut
  
  /* SmoothScroll */  
  smoothScroll.init({
    speed: 1000, // Integer. How fast to complete the scroll in milliseconds
    easing: 'easeInOutQuart', // Easing pattern to use
    updateURL: false, // Boolean. Whether or not to update the URL with the anchor hash on scroll
    offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
    callbackBefore: function ( toggle, anchor ) {}, // Function to run before scrolling
    callbackAfter: function ( toggle, anchor ) {} // Function to run after scrolling
  });
  
  
  /* .addClass to form button */
  $( ".gform_button" ).last().addClass( "btn btn-primary btn-lg" );
  
});
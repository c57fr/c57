import ajoutParImport from './homepagemsg.js';
ajoutParImport();

/*
 * Application
 */

/*
 $(document).tooltip({
 selector: "[data-toggle=tooltip]"
 })
 */

jQuery(document).ready(function ($) {

  /*
   * Auto hide navbar
   */
  var $header = $('.navbar-autohide'),
    scrolling = false,
    previousTop = 0,
    currentTop = 0,
    scrollDelta = 10,
    scrollOffset = 150

  $(window).on('scroll', function () {
    if (!scrolling) {
      scrolling = true

      if (!window.requestAnimationFrame) {
        setTimeout(autoHideHeader, 250)
      }
      else {
        requestAnimationFrame(autoHideHeader)
      }
    }
  })

  function autoHideHeader() {
    var currentTop = $(window).scrollTop()

    // Scrolling up
    if (previousTop - currentTop > scrollDelta) {
      $header.removeClass('is-hidden')
    }
    else if (currentTop - previousTop > scrollDelta && currentTop > scrollOffset) {
      // Scrolling down
      $header.addClass('is-hidden')
    }

    previousTop = currentTop
    scrolling = false
  }

});


(function ($) {

  $('#maCase').html('<strong>Salut</strong> le Monde !');
  $('#MoviesFilter').on('change', 'input, select', function () {
    var $form = $(this).closest('form');
    $form.request();
  })

})(jQuery);


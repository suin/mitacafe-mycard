// Generated by CoffeeScript 1.4.0
(function() {

  $(function() {
    var hideQRCodePopup, resizeSlide, resizeTimer, showQRCodePopup;
    showQRCodePopup = function() {
      $('#card_backward').show();
      return $('#card').hide();
    };
    hideQRCodePopup = function() {
      $('#card_backward').hide();
      return $('#card').show();
    };
    window.addEventListener('devicemotion', function(evt) {
      var z;
      z = evt.accelerationIncludingGravity.z;
      if (z > 3) {
        return showQRCodePopup();
      } else {
        return hideQRCodePopup();
      }
    });
    resizeTimer = null;
    resizeSlide = function() {
      $('#container').hide();
      clearTimeout(resizeTimer);
      return resizeTimer = setTimeout(function() {
        $('#container').show();
        return $('div').css("z-index", 1);
      }, 100);
    };
    return $(window).resize(resizeSlide);
  });

}).call(this);

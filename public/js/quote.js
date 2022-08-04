$(window).on('load', function () {
  $(function() {
    var i = 0;
    slideCount = 5;
    function timeout() {
      setTimeout(function() {
        // Move $("#quote" + i) off to the left
        $("#quote" + i).animate({
          right: "150%"
        }, 1000);
        // Change selected quote
        i++;
        if(i > (slideCount - 1)) {
          i = 0;
        }
        // Move $("#quote" + i) to right side then back to middle
        $("#quote" + i).css("right", "-150%");
        $("#quote" + i).animate({
          right: "10%"
        }, 1000);
        timeout();
      }, 7000);
    };
    timeout();
    });
});

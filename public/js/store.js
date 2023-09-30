

$( document ).ready(function() {

    $('.promotionProduct').mouseenter(function() {
        $(this).css({
            "box-shadow": "0px 3px 12px rgba(0, 0, 0, 0.30)",
          });
    });

    $('.promotionProduct').mouseleave(function() {
        $(this).css({
            "box-shadow": "",
          });
    });


});


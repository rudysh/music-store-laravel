

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

    $(".addcart").on('click', function (event) {
        const productToCart = $(this).attr('data-product-id');

        let productFinded = null;

        $.ajax({
            type: 'GET',
            url: '/cart/' + productToCart,
            dataType: 'json',
            success: function (data) {
                swal({
                    title: 'Articulo Agregado',
                    text: "Su articulo se a agregado al carrito de compras",
                    button: {text: "Continuar Comprando!", className: 'bg-color-yellow'},
                });
            },
            error: function () {
                console.error("fallo la busqueda de producto")
            }
        });


    });



});


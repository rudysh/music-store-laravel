$(document).ready(function () {
    $(".seeProductInfo").on('click', function (event) {
        const productIdToFind = $(this).attr('data-product-id');

        let productFinded = null;

        $.ajax({
            type: 'GET',
            url: '/api/products/' + productIdToFind,
            dataType: 'json',
            success: function (data) {
                console.log(data);
                let contentDynamic = `<img src="${data.img}" alt="Harmonics music logo"  style="width:100px;heigth:auto" >
                 <a class='fs-3 color-yellow fw-bold text-decoration-none'>${data.price}</a>`;
                var dataInfo = document.createElement("div");
                dataInfo.innerHTML = contentDynamic;

                swal({
                    title: data.name,
                    text: data.description,
                    button: {text: "Continuar Comprando!", className: 'bg-color-yellow'},
                    content: dataInfo,
                });
            },
            error: function () {
                console.error("fallo la busqueda de producto")
            }
        });


    });

    $('.promotionProduct').mouseenter(function () {
        $(this).css({
            "box-shadow": "0px 3px 12px rgba(0, 0, 0, 0.30)",
        });
    });

    $('.promotionProduct').mouseleave(function () {
        $(this).css({
            "box-shadow": "",
        });
    });


});


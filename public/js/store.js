
const productos = [
    {"productId":1,"img":"img/promotions/bigsky.png", "productName":"BigSky","productDesc":"Conéctese a BigSky y eleve instantáneamente su sonido a la estratosfera con 12 reverberaciones exuberantes y radiantes diferentes.","productPrize":"$420","catehory":"pedals"},
    {"productId":2,"img":"img/promotions/bajo-promo.webp", "productName":"G&L - M2000 ","productDesc":"Un bajo completamente cargado que es lo suficientemente dinámico para cualquier estilo del legendario Leo Fender.","productPrize":"$900","catehory":"bajo"},
    {"productId":3,"img":"img/promotions/vox.png", "productName":"Vox - AC30C2","productDesc":"Para aquellos que anhelan más potencia, el AC30 amplía el cautivador sonido de su hermano pequeño al duplicar la potencia","productPrize":"$1000","catehory":"speaker"},
    {"productId":4,"img":"img/promotions/vox2.jpg", "productName":"Vox - VT20X","productDesc":"¡El VT20X presenta un nuevo motor de modelado y suena incluso mejor que nunca!","productPrize":"$400","catehory":"speaker"},
    {"productId":5,"img":"img/promotions/cuerdas.jpg", "productName":"Elixir Light Strings - 9-46","productDesc":"Mejores cuerdas Electric Nanoweb ","productPrize":"$15","catehory":"cuerdas"},
    {"productId":6,"img":"img/promotions/drum-set.jpg", "productName":"SET MICRÓFONOS STUDIO (4-PCS)","productDesc":"Viene en un maletín de transporte con cierre ","productPrize":"$300","catehory":"drum"},
    {"productId":7,"img":"img/promotions/clarinete.jpg", "productName":"CLARINETE BB","productDesc":"Sistema Boehm ","productPrize":"$350","catehory":"clarinete"},
    {"productId":8,"img":"img/promotions/sax.jpg", "productName":"SAXOFON ALTO","productDesc":"Saxofón alto para niños, cuenta con Cuerpo de latón, llaves de latón","productPrize":"$700","catehory":"saxofon"},
    {"productId":9,"img":"img/promotions/lira.jpg", "productName":"LIRA 25 TECLAS ","productDesc":"Lira de marcha estándar con 25 teclas y Incluye cargador, bolillo y estuche transparente ","productPrize":"$150","category":"lira"},
];


$( document ).ready(function() {
    productos.forEach(function(item) {
        let query = "<div class='col-md-6 col-lg-4 my-4  row align-items-center promotionProduct p-3'>"+
        "<div class='col-4'><img class='img-fluid' src='"+ item.img +"' alt='"+ item.productName +"'></div>" +
        "<div class='col-8'>"+
        "<h3 class='text-black' fs-4 text-uppercase>"+item.productName+"</h3>"+
        "<p>"+item.productDesc+"</p>"+
        "<a class='fs-3 color-yellow fw-bold text-decoration-none'>"+ item.productPrize+"</a>"+
        "<a data-product-id='"+item.productId+"' class='btn mt-4 d-block bg-color-yellow text-center p-1 text-uppercase seeProductInfo'>Agregar al carrito</a>"+
        "</div>"+
        "</div>"; 
        $('#zonaProductos').append(query);
    });

    $(".seeProductInfo").on('click', function(event){
       const productIdToFind =  $(this).attr('data-product-id');

       let productFinded= null;
       $.each(productos, function(index, product) {
        if (product.productId == productIdToFind) {
            productFinded = product;
          return false; // Detener la iteración una vez que se encuentra el objeto
        }
      });

    });

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


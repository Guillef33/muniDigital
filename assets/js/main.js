// //////////////////////////////////////////////////////
// //////////////////////////////////////////////////////
// //Carousel Footer Gallery
// var owlFooterGallery= $(".owl_footer_gallery");
// owlFooterGallery.owlCarousel({
//     items: 1,
//     dots: false,
//     nav: false,
//     loop: true,
//     autoplay: true,
//     autoplayTimeout:3100,
//     autoplayHoverPause: false
// }); 

// //////////////////////////////////////////////////////
// //////////////////////////////////////////////////////
// //Menu Sticky
// var alturaNavbar = $('#navbar-menu').offset().top;
// $(document).on('scroll', function(){
//     var alturaVentana = $(this).scrollTop();

//     if(alturaVentana >= alturaNavbar){
//         $('#navbar-menu').addClass('navbar_sticky');
//         $('#logo_header_sticky').addClass('logo_header_sticky_active');
//     }
//     else{
//         $('#navbar-menu').removeClass('navbar_sticky');
//         $('#logo_header_sticky').removeClass('logo_header_sticky_active');
//     }
// });


// //////////////////////////////////////////////////////
// ////////////////////////////////////////////////////// MENU HAMBURGUESA

// const burger = document.querySelector('.burger');
// const navSection = document.querySelector('.burger_subMenu');


// $(burger).click(function(){
//     $(navSection).toggleClass('burger_subMenu_active');
//     // $(this).toggleClass('toggle_menuBurger_desktop') ; esto es la animacion del menu
// });


// //////////////////////////////////////////////////////
// ////////////////////////////////////////////////////// BUSCADOR


// $('#result-wrapper').hide();

// $('#search_text').keyup(function(){
//     load_data();
//     function load_data(query){
//         $.ajax({
//             url:"includes/inc_searchFetch.php",
//             method:"post",
//             data:{query:query},
//             success:function(data){
//                 if(data != ''){
//                     $('#result').html(data);
//                     $('#result-wrapper').show();
//                 }else{
//                     $('#result-wrapper').hide();
//                 }
//             }
//         });
//     }   
    
    
//     let search = $(this).val();
//     if(search != ''){
//         load_data(search);
//     }else{
//         load_data();			
//     }
    
// });


// //////////////////////////////////////////////////////
// ////////////////////////////////////////////////////// CARRITO

// getCart(); //------------ muestra los items dentro del carrito en el NAVBAR

// $('#callout').hide();

// $('#productForm').submit(function(e){
//     e.preventDefault();
//     var product = $(this).serialize();
//     console.log(product);
//     $.ajax({
//         type: 'POST',
//         url: 'cart_add.php',
//         data: product,
//         dataType: 'json',

//         success: function(response){
//             // console.log(response);
//             window.scrollTo(0,0);
//             $('#callout').slideDown();
//             $('.message').html(response.message);
//             if(response.error){
//                 $('#callout').removeClass('bg-success').addClass('bg-danger');
//             }
//             else{
//                 $('#callout').removeClass('bg-danger').addClass('bg-success');
//                 getCart();
//             }
//         }    
//     });
// });



// $(document).on('click', '.close-msg-btn', function(){
//     $('#callout').slideUp();
// });

// //Esto sirve para el header (por ahora)


// function getCart(){
// 	$.ajax({
// 		type: 'POST',
// 		url: 'cart_fetch.php',
// 		dataType: 'json',
// 		success: function(response){
//             $('#cart_menu').html(response.list);
//             $('.cart_count').html(response.count);
//             if(response.count > 0){
//                 $('#divider-product').removeClass('d-none');
//             }else{
//                 $('#divider-product').addClass('d-none');
//             }
// 		}
// 	});
// }
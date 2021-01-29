let productsInBasket;
let productsPrice;
let cartLength;
let totalPrice;
$(document).ready(function(){

  populateShopSectionOnPageLoad();

  productsInBasket = JSON.parse(localStorage.getItem('cart'));
  productsInBasket ? cartLength = productsInBasket.length : cartLength = 0;
  $('.js--total-quantity').text(`${cartLength}`)

  totalPrice = JSON.parse(localStorage.getItem('totalPrice'));
  $('.js--total-price').text(`${totalPrice ? '€' + totalPrice : '€0,00'}`)
  
  if(productsInBasket){
    populateBasketDOM(productsInBasket);
  }
    })

//Changes the colors of the shop buttons on click
$('#business-laptops, #laptops, #gaming-laptops, #macbooks, #discount').click(function() {
    $('#business-laptops, #laptops, #gaming-laptops, #macbooks, #discount').removeClass("active");
    $(this).addClass("active");
});

// jQuery animations on scroll
$('.js--title-shop-button').click(function(){
    $('html, body').animate({scrollTop: $('.js--section-shop').offset().top}, 1000);
});
$('.js--title-review-button').click(function(){
    $('html, body').animate({scrollTop: $('.js--section-review').offset().top}, 1000);
});
$('.js--section-discount').waypoint(function(direction){
    if(direction == "down"){
        $('nav').addClass('sticky');
    }else{
        $('nav').removeClass('sticky');
        }
        }, {
        offset: '80px'
    });

  //Removes the item from the dropdown shopping cart on click
  //Also decreases the value which is representing the total number of the items in the dropdown shopping cart
$(".js--dropdown-cart").on("click", ".js--close-button", function() {
    item_name = $(this).data('item_name');
    item_price = $(this).data('item_price');
    itemId = $(this).data('item_id');
    //Update TotalPrice stored in Local Storage
    totalPrice = updateLocStoragePriceOnDelete(item_price);
    //Update TotalPrice in DOM
    $('.js--total-price').text(`€${totalPrice == 0 ? '0.00' : totalPrice.toFixed(2)}`);
    //Removing from local storage
    removeLocStorageBasketItemOnDelete(itemId);
    //Removing from DOM
    $(this).closest('.js--shopping-cart-pill').remove();
    //Updating amount of the items in basket
    cartLength = productsInBasket.length;
    $('.js--total-quantity').html(cartLength);
   });

$('.option').click(function(){
        let query
        $('#overlay').fadeIn();
        query = $(this).data('value'); 
        console.log(query)
    $.ajax({
    url: "php/getProducts.php",
    type:"GET",
    data:{
        q:  `${query}`,
    },
    success: function(response){
        setTimeout(function () {
        $('#overlay').fadeOut();        
        $('#item-capsule').html(null)
        const products = JSON.parse(response);
        
        populateProducts(products)
    }, 1000,)},
    error: function(){
    }
    })
});



    $("#item-capsule").on("click", "#addToBasket", function(){
        item_name = $(this).data('item-laptop_name');
        item_price = $(this).data('item-laptop_price');
        item_id = $(this).data('item_id');

        const basketItem = {
            'item_name': item_name,
            'item_price': item_price,
            'item_id': item_name,
        }

        updateLocStorageBasketOnAddToBasket(item_id, item_name, item_price);
    
        totalPrice = updateLocStorageTotalPriceOnAddToBasket(item_price);

        localStorage.setItem('totalPrice', JSON.stringify(totalPrice));
        
        //Adding total price to DOM
        $('.js--total-price').text(`€${totalPrice.toFixed(2)}`);
        
        //Adding item item to DOM
        appendToBasket(basketItem);

       //Updating amount of the items in basket
        productsInBasket = JSON.parse(localStorage.getItem('cart'));
        cartLength = productsInBasket.length;
        $('.js--total-quantity').html(cartLength)
        });
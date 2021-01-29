<section class="shop js--section-shop">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 >Pick up your new laptop.</h2>
                    </div>
                    
                </div>
                <div class="row">
                
                    <div class="col-md-3">
                        <div class="list-group">
                            <a class="list-group-item list-group-item disabled flex-fill">
                            <h5 class="text-center" >CHOOSE A CATEGORY</h5>
                            </a>
                            <hr>
                            <a class="text-center list-group-item list-group-item-action option" id="business-laptops" data-value="SELECT * FROM laptops WHERE laptop_screenSize < '15.6'" ><b>Business laptops</b></a>
                            <a class="text-center list-group-item list-group-item-action option" id="laptops" data-value="SELECT * FROM laptops WHERE laptop_type = 'Laptop'" ><b>Laptops</b></a>
                            <a class="text-center list-group-item list-group-item-action option" id="gaming-laptops" data-value="SELECT * FROM laptops WHERE laptop_type = 'Gaming laptop'"><b>Gaming laptops</b></a>
                            <a class="text-center list-group-item list-group-item-action option" id="macbooks" data-value="SELECT * FROM laptops WHERE laptop_OS = 'macOS Catalina'"><b>Macbooks</b></a>
                            <a class="text-center list-group-item list-group-item-action option" id="discount" data-value="SELECT * FROM laptops WHERE laptop_type = 'Discounted laptop'" ><b>Discounted laptops</b></a>
                        </div>  
                    </div>
                    <div class="col-md-9">
                        <div class="list-laptops" id="item-capsule">
                            
                        </div>
                    </div>
                </div>
</section>
<script>


// $(document).ready(function(){
//     $.ajax({
//     url: "php/getProducts.php",
//     type:"GET",
//     data:{
//         q:  `SELECT * FROM laptops`,
//         },

//     success: function(response){    
//         $('#item-capsule').html(null)
//         const products = JSON.parse(response);
//         populateProducts(products)
//         },

//     error: function(){

//         }
//     });
// });
    
    
// $('.option').click(function(){
//         let query
//         $('#overlay').fadeIn();
//         query = $(this).data('value'); 
//         console.log(query)
//     $.ajax({
//     url: "php/getProducts.php",
//     type:"GET",
//     data:{
//         q:  `${query}`,
//     },

//     success: function(response){
//         setTimeout(function () {
//         $('#overlay').fadeOut();        
//         $('#item-capsule').html(null)
//         const products = JSON.parse(response);
        
//         populateProducts(products)
//     }, 1000,)},

//     error: function(){

//     }
//     })
// });


// function populateProducts(items){
//     for (item of items){
//         $('#item-capsule').append(`
//          <span class='d-block p-2'> <h5 class='js--laptop-name'><b>${item.laptop_name}</b></h5>
//              <hr>
//               <div class='d-flex flex-row align-items-center justify-content-around'>
//                  <div class='p-2'><b>Screen size: </b>&nbsp${item.laptop_screenSize}<br><b>Processor: </b>&nbsp${item.laptop_CPU}<br><b>RAM: </b>&nbsp${item.laptop_RAM}<br><b>Storage: </b>&nbsp${item.laptop_storage}<br><b>Graphic card: </b>&nbsp${item.laptop_graphicsCard}</div>
//                  <img src='img/laptops/${item.laptop_name}.jpg' class='laptop-img-shop'>
//                  <div class='d-flex flex-column'>
//                  <div class='p-2 align-items-start'><h5 class='old-price'>${item.old_price ? '€' + item.old_price : '' }</h5><h4 class='js--laptop-price'>€${item.laptop_price}</h4><p class='text-muted js--vat-price'>€${item.excludedVAT} excl. VAT</p></div>
//                  <div class='p-2'>
//                     <button class='btn btn-dark js--add-cart' 
//                             id="addToBasket" 
//                             data-item-laptop_name="${item.laptop_name}"
//                             data-item-laptop_price="${item.laptop_price}"
//                             data-item_id = "${item.laptop_id}"
//                             >Add to cart  <i class='fas fa-cart-arrow-down'></i></button></div>
//                  </div>
//              </div>
//          </span>
//          `);
//         }
//     }

//     $("#item-capsule").on("click", "#addToBasket", function(){
//         item_name = $(this).data('item-laptop_name');
//         item_price = $(this).data('item-laptop_price');
//         item_id = $(this).data('item_id');
//         console.log(item_id)
//         basketItem = {
//             'item_id': item_id,
//             'item_name': item_name,
//             'item_price': item_price,
//         }

//         let cart = [];
//         currentCart = JSON.parse(localStorage.getItem('cart'));
//         if(currentCart !== null){
//             cart = [...currentCart];
//         }
//         cart.push(basketItem);
//         localStorage.setItem('cart', JSON.stringify(cart));


//         totalPrice;
//         currentTotalPrice = JSON.parse(localStorage.getItem('totalPrice'));
//         if(currentTotalPrice !== null){
//             totalPrice = currentTotalPrice;
//             totalPrice = totalPrice + item_price;
//         }else{
//             totalPrice = item_price;
//         }
//         localStorage.setItem('totalPrice', JSON.stringify(totalPrice));
        
//         //Adding total price to DOM
//         $('.js--total-price').text(`€${totalPrice.toFixed(2)}`);
        
//         //Adding cart item to DOM
//         $( ".js--dropdown-cart" ).append( 
//            `<div class='d-block p-2 shopping-cart-pill js--shopping-cart-pill'>\
//                <p class='font-weight-bold cart-text js--laptop-name'>${item_name}</p>\
//                <div class='d-flex flex-fill flex-row align-items-center justify-content-around'>\
//                    <img src='img/laptops/${item_name}.jpg' class='laptop-img-cart'>\
//                    <div class='p-2 flex-fill'><p class='font-weight-bolder cart-text js--price '>€${item_price}</p></span></div>\
//                    <button class='btn btn-danger fa fa-close cart-item js--close-button' data-item_name="${item_name}" data-item_id="${item_id}" data-item_price="${item_price}"></button>\
//                </div>\
//            </div>`
//        );

//        //Updating amount of the items in basket
//         productsInBasket = JSON.parse(localStorage.getItem('cart'));
//         cartLength = productsInBasket.length;
//         $('.js--total-quantity').html(cartLength)
//         });
</script>
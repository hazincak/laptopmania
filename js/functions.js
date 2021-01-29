function populateBasketDOM(productsInBasket){
    for (product of productsInBasket){
        appendToBasket(product);
        }
}
function updateLocStoragePriceOnDelete(deletedItemPrice){
    totalPrice = JSON.parse(localStorage.getItem('totalPrice')); 
    totalPrice = totalPrice - deletedItemPrice;
    localStorage.setItem('totalPrice', JSON.stringify(totalPrice));
    return totalPrice;
}

function removeLocStorageBasketItemOnDelete(id){
    productsInBasket = JSON.parse(localStorage.getItem('cart'));
    let removeIndex = productsInBasket.map(item => item.item_id).indexOf(id);
    productsInBasket.splice(removeIndex, 1);
    localStorage.setItem('cart', JSON.stringify(productsInBasket));
}

function updateLocStorageBasketOnAddToBasket(id ,name, price){
    basketItem = {
        'item_id': id,
        'item_name': name,
        'item_price': price,
    }

    let tempCart = [];
    productsInBasket = JSON.parse(localStorage.getItem('cart'));
    if(productsInBasket !== null){
            tempCart = [...productsInBasket];
        }
    tempCart.push(basketItem);
    localStorage.setItem('cart', JSON.stringify(tempCart));
}

function updateLocStorageTotalPriceOnAddToBasket(price){
    let updatedTotalPrice;
    currentTotalPrice = JSON.parse(localStorage.getItem('totalPrice'));
        if(currentTotalPrice !== null){
            updatedTotalPrice = currentTotalPrice;
            updatedTotalPrice = updatedTotalPrice + item_price;
        }else{
            updatedTotalPrice = item_price;
        }
    localStorage.setItem('totalPrice', JSON.stringify(totalPrice));
    return updatedTotalPrice;

}

function populateShopSectionOnPageLoad(){
    $(document).ready(function(){
        $.ajax({
        url: "php/getProducts.php",
        type:"GET",
        data:{
            q:  `SELECT * FROM laptops`,
            },
    
        success: function(response){    
            $('#item-capsule').html(null)
            const products = JSON.parse(response);
            populateProducts(products)
            },
    
        error: function(){
    
            }
        });
    });
}

function populateProducts(items){
    for (item of items){
        $('#item-capsule').append(`
         <span class='d-block p-2'> <h5 class='js--laptop-name'><b>${item.laptop_name}</b></h5>
             <hr>
              <div class='d-flex flex-row align-items-center justify-content-around'>
                 <div class='p-2'><b>Screen size: </b>&nbsp${item.laptop_screenSize}<br><b>Processor: </b>&nbsp${item.laptop_CPU}<br><b>RAM: </b>&nbsp${item.laptop_RAM}<br><b>Storage: </b>&nbsp${item.laptop_storage}<br><b>Graphic card: </b>&nbsp${item.laptop_graphicsCard}</div>
                 <img src='img/laptops/${item.laptop_name}.jpg' class='laptop-img-shop'>
                 <div class='d-flex flex-column'>
                 <div class='p-2 align-items-start'><h5 class='old-price'>${item.old_price ? '€' + item.old_price : '' }</h5><h4 class='js--laptop-price'>€${item.laptop_price}</h4><p class='text-muted js--vat-price'>€${item.excludedVAT} excl. VAT</p></div>
                 <div class='p-2'>
                    <button class='btn btn-dark js--add-cart' 
                            id="addToBasket" 
                            data-item-laptop_name="${item.laptop_name}"
                            data-item-laptop_price="${item.laptop_price}"
                            data-item_id = "${item.laptop_id}"
                            >Add to cart  <i class='fas fa-cart-arrow-down'></i></button></div>
                 </div>
             </div>
         </span>
         `);
        }
    }





function appendToBasket(product){
    $('.js--dropdown-cart ').append(`
        <div class='d-block p-2 shopping-cart-pill js--shopping-cart-pill'>\
            <p class='font-weight-bold cart-text js--laptop-name'>${product.item_name}</p>\
            <div class='d-flex flex-fill flex-row align-items-center justify-content-around'>\
                <img src='img/laptops/${product.item_name}.jpg' class='laptop-img-cart'>\
                <div class='p-2 flex-fill'><p class='font-weight-bolder cart-text js--price '>€${product.item_price}</p></span></div>\
                <button class='btn btn-danger fa fa-close cart-item js--close-button' data-item_name="${product.item_name}" data-item_id="${product.item_id}" data-item_price="${product.item_price}"></button>\
            </div>\
          </div>
         `);
}
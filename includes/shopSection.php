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
                            <a class="text-center list-group-item list-group-item-action option" data-value="SELECT * FROM laptops WHERE laptop_screenSize < '15.6'" ><b>Business laptops</b></a>
                            <a class="text-center list-group-item list-group-item-action option" data-value="SELECT * FROM laptops WHERE laptop_type = 'Laptop'" ><b>Laptops</b></a>
                            <a class="text-center list-group-item list-group-item-action option" data-value="SELECT * FROM laptops WHERE laptop_type = 'Gaming laptop'"><b>Gaming laptops</b></a>
                            <a class="text-center list-group-item list-group-item-action option" data-value="SELECT * FROM laptops WHERE laptop_OS = 'macOS Catalina'"><b>Macbooks</b></a>
                            <a class="text-center list-group-item list-group-item-action option" data-value="SELECT * FROM laptops WHERE laptop_type = 'Discounted laptop'" ><b>Discounted laptops</b></a>
                        </div>  
                    </div>
                    <div class="col-md-9">
                        <div class="list-laptops" id="item-capsule">
                            
                        </div>
                    </div>
                </div>
</section>
<script>


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


function populateProducts(items){
    for (item of items){
         console.log(item);
        $('#item-capsule').append(`
         <span class='d-block p-2'> <h5 class='js--laptop-name'><b>${item.laptop_name}</b></h5>
             <hr>
              <div class='d-flex flex-row align-items-center justify-content-around'>
                 <div class='p-2'><b>Screen size: </b>&nbsp${item.laptop_screenSize}<br><b>Processor: </b>&nbsp${item.laptop_CPU}<br><b>RAM: </b>&nbsp${item.laptop_RAM}<br><b>Storage: </b>&nbsp${item.laptop_storage}<br><b>Graphic card: </b>&nbsp${item.laptop_graphicsCard}</div>
                 <img src='img/laptops/${item.laptop_name}.jpg' class='laptop-img-shop'>
                 <div class='d-flex flex-column'>
                 <div class='p-2 align-items-start'><h5 class='old-price'>${item.old_price ? '€' + item.old_price : '' }</h5><h4 class='js--laptop-price'>€${item.laptop_price}</h4><p class='text-muted js--vat-price'>€${item.excludedVAT} excl. VAT</p></div>
                 <div class='p-2'><button class='btn btn-dark js--add-cart' href='#'>Add to cart  <i class='fas fa-cart-arrow-down'></i></button></div>
                 </div>
             </div>
         </span>
         `);
        }
    }

</script>
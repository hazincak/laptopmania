<?php
            $arrayIndex = 0;
            $itemsArray[] = array(); 
            $sql = "SELECT laptop_name, laptop_price, old_price FROM laptops WHERE laptop_type = 'Discounted laptop'";
            $result = mysqli_query($connection,$sql);
            //   while($row = mysqli_fetch_assoc ($result)){
            //     $itemsArray[$arrayIndex] = $row;
            //     $arrayIndex++;
            //     }
            // $randomArrayIndex = rand(0,count($itemsArray)-1); 
            // $randomItem = $itemsArray[$randomArrayIndex];
            // $vatExcludedPrice = vatCalculator($randomItem['laptop_price'], $excludedVat);   
        ?>  

    <section class="discount-section">
        <div class="container-fluid">
            <h1 class='display-4'>SUMMER OFFER</h1>
            <p class='lead'>Pick up your electronical companion for discounted price.</p>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                  <?php
                    $isFirst = true;
                    while($row = mysqli_fetch_assoc ($result)){
                        $itemsArray[$arrayIndex] = $row;
                  ?>
                <div class="carousel-item discount-carousel-item{ <?php echo ($isFirst ? 'active' :  '') ?>">
                    <span class='d-block p-2 carousel-product'> 
                        <h4><b><?php echo $itemsArray[$arrayIndex]['laptop_name'] ?></b></h4>
                        <hr>
                        <div class='d-inline-flex flex-row justify-content-around '>
                            <div class='p-2 align-self-start'><h3>WOW!</h3></div>
                            <div class='p-2 align-self-center'><h3 class='old-price'>WAS: € <?php echo $itemsArray[$arrayIndex]['old_price'] ?></h3></div>
                            <div class='p-2 align-self-end'><h3>NOW: € <?php echo $itemsArray[$arrayIndex]['laptop_price'] ?></h3></div>
                            <div p-2>
                                <img style="width: 500px" src='img/laptops/<?php echo $itemsArray[$arrayIndex]['laptop_name']?>.jpg' class='laptop-img-jumbotron'>
                            </div>
                            
                        </div>
                    </span>  
                </div>
              

                <?php
                $isFirst = false; 
                $arrayIndex++;
                } 
                //ending while loop
                ?>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
              </div>
            </div>
        </div>
    </section>
        <!-- <section class="discount-section js--section-discount">
            <div class="container-fluid">
                <div class="jumbotron">
                    <h1 class='display-4'>SUMMER OFFER</h1>
                    <p class='lead'>Pick up your electronical companion for discounted price.</p>
                    <span class='d-block p-2'> 
                        <h4><b><?php echo $randomItem['laptop_name'] ?></b></h4>
                        <hr>
                        <div class='d-inline-flex flex-row justify-content-around '>
                        <div class='p-2 align-self-start'><h3>WOW!</h3></div>
                        <div class='p-2 align-self-center'><h3 class='old-price'>WAS: € <?php echo $randomItem['old_price'] ?></h3></div>
                        <div class='p-2 align-self-end'><h3>NOW: € <?php echo $randomItem['laptop_price'] ?></h3></div>
                        <img src='img/laptops/<?php echo $randomItem['laptop_name']?>.jpg' class='laptop-img-jumbotron'>
                        </div>
                    </span>   
                </div>
            </div>
        </section> -->

        
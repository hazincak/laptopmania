<?php
            $arrayIndex = 0;
            $itemsArray[] = array(); 
            $sql = "SELECT laptop_name, laptop_price, old_price FROM laptops WHERE laptop_type = 'Discounted laptop'";
            $result = mysqli_query($connection,$sql);
        ?>  

    <section class="discount-section js--section-discount">
        <div class="container">
        <div class="row">
                <div class="col-12 text-center">
                    <h1 class='display-4'>SUMMER OFFER</h1>
                    <p class='lead'>Pick up your electronical companion for discounted price.</p>
                </div>
        </div>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner" style="width:100%; height: 100% !important;">
               <!-- style="width:100%; height: 100% !important;" -->
                  <?php
                    $isFirst = true;
                    while($row = mysqli_fetch_assoc ($result)){
                        $itemsArray[$arrayIndex] = $row;
                  ?>
                
                <div class="carousel-item discount-carousel-item { <?php echo ($isFirst ? 'active' :  '') ?>">  
                     
                    <h3><b><?php echo $itemsArray[$arrayIndex]['laptop_name'] ?></b></h3>
                    <hr>
                    <div class="row h-100 align-items-center justify-content-around ">
                        <div class="col-4 h-100">
                            <div class="row text-center"><h3 class='old-price'>WAS:&nbsp;€<?php echo $itemsArray[$arrayIndex]['old_price'] ?></h3></div>
                            <div class="row text-right m-2"><h3>NOW:&nbsp;€<?php echo $itemsArray[$arrayIndex]['laptop_price'] ?></h3></div>
                        </div>
                        <div class="col-8 text-right">
                        <img class="carousel-img" src='img/laptops/<?php echo $itemsArray[$arrayIndex]['laptop_name']?>.jpg'>
                        </div>
                    </div>
                 </div> 
                <?php
                $isFirst = false; 
                $arrayIndex++;
                } 
                //ending while loop
                ?>
              </div>
            </div>
        </div>
    </section>


        
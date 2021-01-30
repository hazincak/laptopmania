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
                            <!-- <a class="text-center list-group-item list-group-item-action option" id="business-laptops" data-value="SELECT * FROM laptops WHERE laptop_screenSize < '15.6'" ><b>Business laptops</b></a>
                            <a class="text-center list-group-item list-group-item-action option" id="laptops" data-value="SELECT * FROM laptops WHERE laptop_type = 'Laptop'" ><b>Laptops</b></a>
                            <a class="text-center list-group-item list-group-item-action option" id="gaming-laptops" data-value="SELECT * FROM laptops WHERE laptop_type = 'Gaming laptop'"><b>Gaming laptops</b></a>
                            <a class="text-center list-group-item list-group-item-action option" id="macbooks" data-value="SELECT * FROM laptops WHERE laptop_OS = 'macOS Catalina'"><b>Macbooks</b></a>
                            <a class="text-center list-group-item list-group-item-action option" id="discount" data-value="SELECT * FROM laptops WHERE laptop_type = 'Discounted laptop'" ><b>Discounted laptops</b></a>
                             -->
                            <a class="text-center list-group-item list-group-item-action option js--option" id="business-laptops"  onclick="setOption(this.text)" ><b>Business laptops</b></a>
                            <a class="text-center list-group-item list-group-item-action option js--option" id="laptops" onclick="setOption(this.text)"><b>Laptops</b></a>
                            <a class="text-center list-group-item list-group-item-action option js--option" id="gaming-laptops" onclick="setOption(this.text)"><b>Gaming laptops</b></a>
                            <a class="text-center list-group-item list-group-item-action option js--option" id="macbooks" onclick="setOption(this.text)"><b>Macbooks</b></a>
                            <a class="text-center list-group-item list-group-item-action option js--option" id="discount" onclick="setOption(this.text)"><b>Discounted laptops</b></a>
                        
                        </div>  
                    </div>
                    <div class="col-md-9">
                        <div class="list-laptops" id="item-capsule">
                            
                        </div>
                        <div class="col-md-12 text-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center js--pagination">
                           
                            </ul>
                        </nav>
                        </div>
                    </div>
                </div>
                </div>
</section>
<script>
function setPage(page){
    localStorage.setItem('page', page);
}

function getPage(){
    return JSON.parse(localStorage.getItem('page'));
}

function setOption(option){

    localStorage.setItem('selectedOption', option);
}

function getOption(){
    return (localStorage.getItem('selectedOption'));
}

</script>

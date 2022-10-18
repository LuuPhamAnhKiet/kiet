<section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Record</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*" ><a href="?page=content">All</a></li>
                            <?php Featured($conn); ?>
                            
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <?php
                    if(isset($_GET['id'])){
                        $id=$_GET['id'];
                        $result = mysqli_query($conn,"SELECT product.Product_ID, product.Product_Name, product.Price, product.Pro_qty, product.Pro_image, category.Cat_Name 
                        from product, category where product.Cat_ID = category.Cat_ID and '$id'=category.Cat_ID ");

                    }
                    else{
                    
                    $result = mysqli_query($conn,"SELECT Product_ID, Product_Name, Price, Pro_qty, Pro_image, Cat_Name 
                    from product a, category b 
                    where a.Cat_ID = b.Cat_ID order by Pro_image desc");
                    }
                    $No=1;
                    while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) { 
                        if($No <9){
                    ?>



                       
                <div class="col-lg-3 col-md-4 col-sm-6 mix ">
                
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/<?php echo $row['Pro_image'] ?>">
                            <ul class="featured__item__pic__hover">
                            
                                <li><a href="#"><span class="fa fa-heart"></span></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="?page=shop-details&&id=<?php echo  $row['Product_ID'] ?>"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="?page=shop-details&&id=<?php echo  $row['Product_ID'] ?>"><?php echo $row["Product_Name"] ?></a></h6>
                            <h5>$<?php echo $row["Price"] ?></h5>
                        </div>
                    </div>
                    
                </div>
                <?php 
                }
                $No++; }
                ?>


                
            </div>
        </div>
    </section>



    

  
        

   

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                        <?php Department($conn ); ?>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+84 949 010 942</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/backgroundvinyl.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Vinyl Shop</h2>
                        <div class="breadcrumb__option">
                            <a href="?page=content">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Department</h4>
                            <ul>
                            
                            <?php Department($conn ); ?>
                                
                            </ul>
                        </div>
                        <div class="sidebar__item">
                            <h4>Price</h4>
                            <div class="price-range-wrap">
                                <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                    data-min="10" data-max="540">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                </div>
                                <div class="range-slider">
                                    <div class="price-input">
                                        <input type="text" id="minamount">
                                        <input type="text" id="maxamount">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar__item sidebar__item__color--option">
                            <h4>Colors</h4>
                            <div class="sidebar__item__color sidebar__item__color--white">
                                <label for="white">
                                    White
                                    <input type="radio" id="white">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--gray">
                                <label for="gray">
                                    Gray
                                    <input type="radio" id="gray">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--red">
                                <label for="red">
                                    Red
                                    <input type="radio" id="red">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--black">
                                <label for="black">
                                    Black
                                    <input type="radio" id="black">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--blue">
                                <label for="blue">
                                    Blue
                                    <input type="radio" id="blue">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--green">
                                <label for="green">
                                    Green
                                    <input type="radio" id="green">
                                </label>
                            </div>
                        </div>
                        <div class="sidebar__item">
                            <h4>Popular</h4>
                            <div class="sidebar__item__size">
                                <label for="33RPM">
                                    33RPM
                                    <input type="radio" id="33RPM">
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="45RPM">
                                    45RPM
                                    <input type="radio" id="45RPM">
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="Signature">
                                    Signature
                                    <input type="radio" id="Signature">
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="Trend">
                                    Trend
                                    <input type="radio" id="Trend">
                                </label>
                            </div>
                        </div>
                        <div class="sidebar__item">
                            <div class="latest-product__text">
                                <h4>Latest Products</h4>
                                <div class="latest-product__slider owl-carousel">
                                    <div class="latest-prdouct__slider__item">
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="img/latest-product/queen.jpg" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6></h6>
                                                <span></span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="img/latest-product/letitbe.jpg" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6></h6>
                                                <span></span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="img/latest-product/eltonjohn_diamonds.jpg" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6></h6>
                                                <span></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="latest-prdouct__slider__item">
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="img/latest-product/pf_finalcut.jpg" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6></h6>
                                                <span></span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="img/latest-product/the_abbey_road.jpg" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6></h6>
                                                <span></span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="img/latest-product/eltonjohn_yellowbrick.jpg" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6></h6>
                                                <span></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2> Bestseller</h2>
                        </div>
                        <div class="row">
                            <div class="product__discount__slider owl-carousel">
                            <?php 
                             if(isset($_GET['id'])){
                                $id=$_GET['id'];
                                $result = mysqli_query($conn,"
SELECT product.Product_ID, product.Product_Name, product.Price, product.Pro_qty, product.Pro_image, category.Cat_Name 
                                from product, category
where product.Cat_ID = category.Cat_ID and '$id'=category.Cat_ID ");
                                
        
                            }
                            else{

                                $result = mysqli_query($conn,"SELECT Product_ID, Product_Name, Price, Pro_qty, Pro_image, Cat_Name 
                                from product a, category b 
                                where a.Cat_ID = b.Cat_ID order by Price desc");
                            }
                                $number=1;

                                while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) { 
                                if($number<11){
                                ?>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/<?php echo $row['Pro_image'] ?>">
                                            
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="?page=shop-details&&id=<?php echo  $row['Product_ID'] ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span> </span>
                                            <h5><a href="?page=shop-details&&id=<?php echo  $row['Product_ID'] ?>"><?php echo $row["Product_Name"] ?></a></h5>
                                            <div class="product__item__price"><?php echo $row["Price"]  ?>đ </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            <?php 
                                $number++;
                            } ?>
                                
                            </div>
                        </div>
                    </div>
                    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="filter__sort">
                                    <span>Sort By</span>
                                    <select>
                                        <option value="0">Default</option>
                                        <option value="0"> </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                    <h6><span>21</span> Products found</h6>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <div class="filter__option">
                                    <span class="icon_grid-2x2"></span>
                                    <span class="icon_ul"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <?php 
                        if(isset($_GET['id'])){
                            $id=$_GET['id'];
                            $result = mysqli_query($conn,"SELECT product.Product_ID, product.Product_Name, product.Price, product.Pro_qty, product.Pro_image, category.Cat_Name 
                            from product, category where product.Cat_ID = category.Cat_ID and '$id'=category.Cat_ID ");
                        
                        }
                        else{

                            $result = mysqli_query($conn,"SELECT Product_ID, Product_Name, Price, Pro_qty, Pro_image, Cat_Name 
                            from product a, category b 
                            where a.Cat_ID = b.Cat_ID order by Cat_Name desc");
                        }
                        
                    while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) { 
                        
                    ?>
                    

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/<?php echo $row['Pro_image'] ?>">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="?page=shop-details&&id=<?php echo  $row['Product_ID'] ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="?page=shop-details&&id=<?php echo  $row['Product_ID'] ?>"><?php echo $row["Product_Name"] ?></a></h6>
                                    <h5><?php echo $row["Price"] ?>đ</h5>
                                </div>
                            </div>
                        </div>
                            <?php } ?>
                         
                        
                        
                        
                    </div>
                    <div class="product__pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

   
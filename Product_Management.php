


 

    
<script>
        function deleteConfirm(){
            if(confirm("Are you sure?")){
                return true;
            }
            else{
                return false;
            }
        }
    </script>
    
   

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
                        <li ><a  href="?page=pm">All</a></li>

                        <?php Category_List($conn ); ?>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                    
                                </div>
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
                        <h2>Products Management</h2>
                        <div class="breadcrumb__option">
                            <a href="?page=content">Home</a>
                            <span>Products Management</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Management Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th class="shoping__product">Category</th>
                                    
                                    
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th><a href="?page=addp">Add</a></th>
                                    
                                    
                                </tr>
                            </thead>
                            <?php //del button on pm 
                                include_once("connection.php");
                                if(isset($_GET["function"])=="del"){
                                    if(isset($_GET["id"])){
                                        $id=$_GET["id"];
                                        $sq="SELECT Pro_image from product WHERE Product_ID='$id'";
                                        $res= mysqli_query($conn, $sq);
                                        $row= mysqli_fetch_array($res, MYSQLI_ASSOC);
                                        $filePic= $row['Pro_image'];
                                        mysqli_query($conn,"DELETE FROM product WHERE Product_ID='$id'");
                                        echo '<meta http-equiv="refresh" content="0;URL =?page=pm"/>'
                                        ?>
                                        <!-- <script> document.getElementById("CMM").click();</script>  -->
                                        
                                        <?php
                                        
                                    }
                                ?>
                                    
            
                                <?php  
                                }
                                ?>
                            <tbody>
                            <?php //
                                 if(isset($_GET['id'])){
                                    $id=$_GET['id'];
                                    $result = mysqli_query($conn,"SELECT product.Product_ID, product.Product_Name, product.Price, product.Pro_qty, product.Pro_image, category.Cat_Name 
                                    from product, category where product.Cat_ID = category.Cat_ID and '$id'=category.Cat_ID ");
            
                                }else{
                                $result = mysqli_query($conn,"SELECT product.Product_ID, product.Product_Name, product.Price, product.Pro_qty, product.Pro_image, category.Cat_Name 
                                    from product, category where product.Cat_ID = category.Cat_ID ");
                                }
                                while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) { 
                                    ?>



                                <tr>
                                    <td class="shoping__cart__item" style="width: 1000px">
                                        <img src="img/<?php echo $row['Pro_image'] ?>" alt="">
                                        <h5><?php echo $row["Product_Name"]; ?></h5>
                                    </td>
                                    <td class="shoping__cart__item">
                                        
                                        <h5><?php echo $row["Cat_Name"]; ?></h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        $<?php echo $row["Price"]; ?>
                                    </td>
                                    <td class="shoping__cart__price">
                                        
                                            
                                                <?php echo $row["Pro_qty"]; ?>
                                            
                                        
                                    </td>
                                    <td class="shoping__cart__total">
                                       <a href="?page=edit&&id=<?php echo $row['Product_ID'] ?>"> EDIT</a>
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        
                                        <a href="?page=pm&&function=del&&id=<?php echo $row["Product_ID"];?>" onclick="return deleteConfirm()"><span class="icon_close"></span>
                                        
                                    </td>
                                </tr>
                                <?php
                                     
                                     }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
           
            
        </div>
    </section>
    <!-- Shoping Cart Section End -->
    
	
	

   
    
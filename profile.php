<section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <li><a href="#">Vinyl</a></li>
                            <li><a href="#">Cassette</a></li>
                            
                            <li><a href="#">Audio</a></li>
                            
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
<section class="breadcrumb-section set-bg" data-setbg="img/backgroundvinyl.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Profile</h2>
                        <div class="breadcrumb__option">
                            <a href="?page=content">Home</a>
                            <span>Profile</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
		
		
		if(isset($_SESSION['us'])){
			$account =$_SESSION['us'];
			$result = mysqli_query($conn, "SELECT * from customer where Username='$account' ");
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $Cusname = $row['CustName'];
            $Gender = $row['gender'];
            $Address = $row['Address'];
            $telephone = $row['telephone'];
            $email = $row['email'];
            $CusDate = $row['CusDate'];
            $CusMonth = $row['CusMonth'];
            $CusYear = $row['CusYear'];

	?>
<div class="container">
        <h2>Member UpdateProfile</h2>
			 	<form id="form1" name="form1" method="post" action="" class="form-horizontal" role="form">
					<div class="form-group">
						    
                            <label for="txtTen" class="col-sm-2 control-label">Username(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtUsername" id="txtID" class="form-control"  value="<?php echo $account;?>" readonly/>
							</div>
                      </div>  
                       
                       <div class="form-group">                               
                            <label for="lblFullName" class="col-sm-2 control-label">Full name(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtCustName" id="txtCustName"  class="form-control"  value="<?php echo $Cusname;?>"readonly/>
							</div>
                       </div> 
                       
                       <div class="form-group">      
                            <label for="lblEmail" class="col-sm-2 control-label">Email(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtEmail" id="txtEmail"  class="form-control"  value="<?php echo $email;?>" readonly />
							</div>
                       </div>  
                       
                        <div class="form-group">   
                             <label for="lblDiaChi" class="col-sm-2 control-label">Address(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtAddress" id="txtAddress"  class="form-control"  value="<?php echo $Address;?>"readonly/>
							</div>
                        </div>  
                        
                         <div class="form-group">  
                            <label for="lbltelephone" class="col-sm-2 control-label">Telephone(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txttelephone" id="txttelephone" class="form-control"  value="<?php echo $telephone;?>"readonly/>
							</div>
                         </div> 
                         
                         
                          
                          <div class="form-group"> 
                            <label for="lblNgaySinh" class="col-sm-2 control-label">Date of Birth(*):  </label>
                            <div class="col-sm-10 input-group">
                                <span class="input-group-btn">
                                  <select name="slDate" id="slDate" class="form-control" readonly >
                						<option value="<?php echo $CusDate;?> " ><?php echo $CusDate;?></option>
										<?php
                                            for($i=1;$i<=31;$i++)
                                             {                                                
                                                 echo "<option value='".$i."'>".$i."</option>";
                                             }
                                        ?>
                				 </select>
                                </span>
                                <span class="input-group-btn">
                                  <select name="slMonth" id="slMonth" class="form-control" readonly>
                					<option value="<?php echo $CusMonth;?>"><?php echo $CusMonth;?></option>
									<?php
                                        for($i=1;$i<=12;$i++)
                                         {
                                             echo "<option value='".$i."'>".$i."</option>";
                                         }
                          
                                    ?>
                				</select>
                                </span>
                                <span class="input-group-btn">
                                  <select name="slYear" id="slYear" class="form-control" readonly>
                                    <option value="<?php echo $CusYear;?>"><?php echo $CusYear;?></option>
                                    <?php
                                        for($i=1970;$i<=2020;$i++)
                                         {
                                             echo "<option value='".$i."'>".$i."</option>";
                                         }
                                    ?>
                                </select>
                                </span>
                           </div>

                      </div>	
                      <div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
						      <input type="button"  class="site-btn" name="btnUpdate" id="btnUpdate" value="Update" onclick="window.location='?page=upa'"/>
                              <input type="button" class="site-btn" name="btnIgnore"  id="btnIgnore" value="Ignore" onclick="window.location='?page=content'" />
                              	
                        </div>
                        
                    </div>
                </form>
</div>
                                    
                      <?php
		
        }
    
    
    ?> 
    
.<?php
include('lock.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Legal Lawyer</title>
   <?php include 'include/user_csslinks.php';?>
     <?php include 'include/user_jslinks.php';?>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>

<body>
 <?php if(@$login_session==''){
include 'include/header.php';} else {
include 'include/header1.php';}?>
	<section id="slider">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>L</span>-awyer</h1>
									<h2>Legal Lawyer</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl1.jpg" class="girl img-responsive" alt="" />
									<!--<img src="images/home/pricing.png"  class="pricing" alt="" />-->
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>L</span>-awyer</h1>
									<h2>Legal Lawyer</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl2.jpg" class="girl img-responsive" alt="" />
									<!--<img src="images/home/pricing.png"  class="pricing" alt="" />-->
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>L</span>-awyer</h1>
									<h2>Legal Lawyer</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl3.jpg" class="girl img-responsive" alt="" />
									<!--<img src="images/home/pricing.png" class="pricing" alt="" />-->
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<?php include 'include/sitebar.php';?>
				<div class="col-sm-9 padding-right">
					
					
					<div class="category-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="index" >For User</a></li>
								<li><a href="#blazers" data-toggle="tab">For Lawyer</a></li>
								<li><a href="#sunglass" data-toggle="tab">Top Lawyers</a></li>
<!--								<li><a href="#kids" data-toggle="tab">Kids</a></li>
								<li><a href="#poloshirt" data-toggle="tab">Polo shirt</a></li>-->
							</ul>
						</div>
                                            
                                            
                                            
                                            
                                            
						<div class="tab-content">
							<div class="tab-pane fade active in" id="tshirt" >
                                                            <?php 
                                                             include 'admin/db.php';
                                                                $select = mysql_query("SELECT * from page_manu_category where isuser=1 and isactive=1");
                                                                while($row = mysql_fetch_array($select))
                                                                {
                                                                ?>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
                                                                                            <?php // echo $row['id'];?>
                                                                                            <img src="admin/images/<?php echo $row['logo'];?>" name="logo" rel="logo"alt=""  style="width: 100px;height: 75px"/>
												<a href="<?php if($row['url']!=""){ echo $row['url']; }else {?>India?id=<?php echo $row['id'];}?>" style="width: 150px;" class="btn btn-default add-to-cart"><?php echo $row['name'];?></a>
											</div>
											
										</div>
									</div>
								</div>
                                                            <?php } ?>    
							</div>
							
                                                    
							<div class="tab-pane fade" id="blazers" >
								<?php 
                                                             include 'admin/db.php';
                                                                $select = mysql_query("SELECT * from page_manu_category where islawyer=1 and isactive=1");
                                                                while($row = mysql_fetch_array($select))
                                                                {
                                                                ?>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
                                                                                            <img src="admin/images/<?php echo $row['logo'];?>" name="logo" rel="logo" alt="" style="width: 100px;height: 75px" />
												<a href="<?php if($row['url']==""){?> India?name=<?php echo $row['name']; } else { echo $row['url'];}?>" style="width: 150px;" class="btn btn-default add-to-cart"><?php echo $row['name'];?></a>
											</div>
											
										</div>
									</div>
								</div>
                                                            <?php }?>	
                                                        </div>
							
							<div class="tab-pane fade" id="sunglass" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery3.jpg" alt="" />
												<h2>Title</h2>
												<p>Easy Polo Black Edition</p>
												<a href="profile_details" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Details</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery4.jpg" alt="" />
												<h2>Title</h2>
												<p>Easy Polo Black Edition</p>
												<a href="profile_details" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Details</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>Title</h2>
												<p>Easy Polo Black Edition</p>
												<a href="profile_details" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Details</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery2.jpg" alt="" />
												<h2>Title</h2>
												<p>Easy Polo Black Edition</p>
												<a href="profile_details" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Details</a>
											</div>
											
										</div>
									</div>
								</div>
                                                           </div>
						</div>
					</div><!--/category-tab-->
					
					<!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>
	<?php include 'include/footer.php';?>
	<!--/Footer-->
	

  
</body>
</html>
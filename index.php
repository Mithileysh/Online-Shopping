    <?php include_once('assets/script.php'); include_once('header.php'); ?>	
<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							
                            <div class="panel panel-default">
								<?php 
                                     $cats=get_all('category');
                                     
                                     foreach($cats as $c)
                                     {
										 echo '<div class="panel-heading">
													<h4 class="panel-title">
														<a data-toggle="collapse" data-parent="#accordian" href="#'.$c['catid'].'">
															<span class="badge pull-right"><i class="fa fa-plus"></i></span>
															'.$c['catname'].'
														</a>
													</h4>
												</div>';
                                         $data=get_all('brand b,category c,product p','b.brandid=p.brandid and c.catid=p.catid and c.catid='.$c['catid']);
                                          echo '<div id="'.$c['catid'].'" class="panel-collapse collapse">
														<div class="panel-body">
															<ul>';
                                         foreach($data as $d)
                                         {	
                                             echo '
																<li><a href="index.php?brandid='.$d['brandid'].'">'.$d['brandname'].'</a></li>
																
															';
                                         }
										 
										 echo '				</ul>
														</div>
												  </div>';
                                     }
                                ?>
                            </div>
                             <div class="panel panel-default">
							                                   
								
							</div>
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Popular Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<?php
											$brands=get_all('brand');
											foreach($brands as $b)
											{
												echo ' <li><a href="index.php?brandid='.$b['brandid'].'"> <span class="pull-right"></span>'.$b['brandname'].'</a></li>';
											}
									?>
                                   
									
								</ul>
							</div>
						</div><!--/brands_products-->
						
						
						
						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Featured Items</h2>
						
                        <?php 
								$cond=NULL;
								if(isset($_GET['brandid']))
								{
									$cond='brandid='.$_GET['brandid'];
								}
								$prods=get_all('product',$cond);
								foreach($prods as $p)
								{
									echo '<div class="col-sm-4">
											<div class="product-image-wrapper">
												<div class="single-products">
														<div class="productinfo text-center">
														<img src="productfile/'.$p['productpic_filename'].'" height="220" alt="" />
															<h2>Rs.'.$p['price'].'</h2>
															<p>'.$p['pname'].'</p>
															<a href="manage_cart.php?pcode='.$p['pcode'].'" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
														</div>
														<div class="product-overlay">
															<div class="overlay-content">
																<h2>Rs.'.$p['price'].'</h2>
																<p>'.$p['pname'].'</p>
																<a href="manage_cart.php?pcode='.$p['pcode'].'" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
															</div>
														</div>
												</div>
												<div class="choose">
													<ul class="nav nav-pills nav-justified">
														<li><a href="product-details.php?pcode='.$p['pcode'].'"><i class="fa fa-plus-square"></i>View Details</a></li>										
													</ul>
												</div>
											</div>
										</div>';
								}
						?>
                        
						
						
					</div><!--features_items-->
               </div>
	</section>
<?php  include_once('footer.php'); ?>
    	<?php include ("assets/script.php");?><?php include ("header.php");?>
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
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								
								
							</div>
									<?php
											if(!isset($_GET['pcode']))
											{
												header('location:shop.php');
											}
											$p=get_all('product p, brand b',"pcode='{$_GET['pcode']}' and b.brandid=p.brandid");										
											$p=$p[0];	
									?>

								
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
			                        
								<h2><?php echo $p['pname'] ?></h2>
								<p></p>
					
								<span>
                                   <form action="manage_cart.php">

									<span> Rs.<?php echo $p['price'] ?></span>
                                    	
										<label>Quantity:</label>
										<input type="hidden" name="pcode" value="<?php echo $p['pcode'] ?>" />
                                        <input type="text" name="quantity" value="1" />
                                        <button type="submit" class="btn btn-fefault cart">
                                            <i class="fa fa-shopping-cart"></i>
                                            Add to cart
                                        </button>
                                    </form>
								</span>
								<p><b>Availability:</b> In Stock</p>
								<p><b>Condition:</b> New</p>
								<p><b>Brand:</b> <?php echo $p['brandname'] ?></p>
								<a href=""><img src="productfile/<?php echo $p['productpic_filename']?>" alt=""  class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="#details" data-toggle="tab">Details</a></li>
								
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade" id="details" >
								
								
								
								
							</div>
							
							
							
							
								
							
							
							
						</div>
					</div><!--/category-tab-->
					
					
					
				</div>
			</div>
		</div>
	</section>
	<?php include ("footer.php");?>
	
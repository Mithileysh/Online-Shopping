<?php include_once('assets/script.php'); include_once('header.php'); ?>	
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description">Description</td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total=price*quantity">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
                    	<?php
						        $totalAll=0;
								foreach($_SESSION['cart'] as $k=>$v)
								{
									$p=get_by_id('product','pcode',$k);
								
									echo '<tr>
							<td class="cart_product">
								<a href=""><img src="productfile/'.$p['productpic_filename'].'" alt="" height="110px" width="110px"></a>
							</td>
							<td class="cart_description">
								<h4><a href="">'.$p['pname'].'</a></h4>
								
							</td>
							<td class="cart_price">
								<p>Rs.'.$p['price'].'</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									
									<input class="cart_quantity_input" readonly type="text" name="quantity" value="'.$v.'" autocomplete="on" size="2">
									
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">Rs.'.($p['price']*$v).'</p>
							</td>
							

						</tr>';
                        			$totalAll=$totalAll + ($v*$p['price']);
								}
								
								$_SESSION['billtotal']=$totalAll;
								
						?>
                        

						
						
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class="row">
				<div class="col-sm-6 col-sm-offset-6">
					<div class="total_area">
						<ul>
							<li>Cart Sub total<span><?php echo $totalAll ?></span></li>
						
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span><?php echo $totalAll ?></span></li>
						</ul>
                        <?php if(!isset($_SESSION['logid'])){
						      	echo '<a class="btn btn-default check_out" href="login.php?checkout=true">Check Out</a>';
							  }else{
							  	echo '<a class="btn btn-default check_out" href="checkout.php">Check Out</a>';
							  }
						 ?>
							
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->
<?php  include_once('footer.php'); ?>
	


   
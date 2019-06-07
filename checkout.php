<?php include_once('assets/script.php'); include_once('header.php'); ?>	
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->

			

			<div class="shopper-informations">
				<div class="row">
					
					<div class="col-sm-8 col-sm-offset-2 clearfix">
						<div class="bill-to">
							<p>Billing Details</p>
							<div class="form-one">
                            	<?php
									$cust=get_by_id('customer','emailid',$_SESSION['logid']);
								?>
								<form>
				
									<input type="text" placeholder="Email*" value="<?php echo $cust['emailid'] ?>">
									<input type="text" placeholder="Name"  value="<?php echo $cust['name'] ?>">
									<textarea rows="5" cols="20" placeholder="Address"><?php echo $cust['address'] ?></textarea>
									
								</form>
							</div>
							<div class="form-two">
								<form>
									<input type="text" placeholder="City" value="<?php echo $cust['city'] ?>">
                                    <input type="text" placeholder="Contactno" value="<?php echo $cust['contactno'] ?>">
								</form>
							</div>
						</div>
					</div>					
				</div>
			</div>
			<div class="review-payment">
				<h2>Bill Details</h2>
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
            <div class="review-payment">
				<h2>Payment</h2>
			</div>
            <div class="shopper-informations">
				<div class="row">
					
					<div class="col-sm-8 col-sm-offset-2 clearfix">
						<div class="bill-to">
							<p>Payment Details</p>
							<div class="form-one">
                            	
								<form class="form" method="post">
									<select name="paymentmode">
                                    	<option>Debit Card</option>
                                        <option>Credit Card</option>
                                    </select>
                                    <br/><br/>
									<input type="text" placeholder="Card Number" name="cardno">
									<input type="text" placeholder="Card Holder Name" name="cardholder">
                                    <input type="text" placeholder="CVV" name="cvv">
									<button type="submit" name="btnPay" class="btn btn-success">Pay Now</button>
                                   
    								</form>
                                    <br/><br/><br/>
                                    <h4>
                                    	<?php
                                        	if(isset($_POST['btnPay']))
											{
												$orderid=save_bill();
												
												
												if($orderrid!=-1)
												{
													unset($_SESSION['cart']);
													header('location:bill.php?billno='.$orderid);
												}
												else
												{
													echo "failed to checkout...";
												}
											}
                                   		?>
                                    </h4>
							</div>
							
						</div>
					</div>					
				</div>
			</div>
					</div>
	</section> <!--/#cart_items-->
<?php include_once('footer.php'); ?>
<?php include_once('assets/script.php'); include_once('header.php'); ?>	
	<section><!--form-->
		<div class="container">
        	<div class="row">
            	<div class="col-sm-8 col-sm-offset-2">
                	
                	 <?php
					 
							if(isset($_POST['btnUpdate']))
							{
								$updated=update('customer',$_POST,"emailid",$_SESSION['logid'],'btnUpdate');
								
								if($updated)
								{
									msg_box('Your details updated successfully... ','success');
								}
								else
								{
									msg_box('update failed...','danger');
								}
							}
							
							$prof=get_by_id('customer',"emailid",$_SESSION['logid']);
							
					?>		
                </div>
            </div>
			<div class="row">
				<div class="col-sm-4 col-sm-offset-2">
					<h3 class="well">Welcome <?php echo $prof['name']?></h3>	
				
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Your Profile Details</h2>
						<form action="profile.php" method="post">
							<input type="text" value="<?php echo $prof['name']?>" name="name" placeholder="Name"/>
							<input type="email" readonly value="<?php echo $prof['emailid']?>" name="emailid" placeholder="Email Address"/>
							<input  type="text" readonly value="<?php echo $prof['address']?>" name="address" placeholder="Address">
                            <input type="text" readonly value="<?php echo $prof['city']?>" name="city" placeholder="city"/>
                            <input type="text" readonly value="<?php echo $prof['contactno']?>" name="contactno" placeholder="contactno"/>
							<button type="submit" name="btnUpdate" class="btn btn-default">Update</button>
						</form>
					</div><!--/sign up form-->
                   
				</div>
                
			</div>
		</div>
	</section><!--/form-->
<?php include_once('footer.php'); ?>
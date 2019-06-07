<?php include_once('assets/script.php'); include_once('header.php'); ?>	
	<section id="form"><!--form-->
		<div class="container">
        	<div class="row">
            	<div class="col-sm-8 col-sm-offset-2">
                	 <?php
					 		if(isset($_GET['checkout']))
							{
								$_SESSION['redirect']='checkout.php';
							}
					 
							if(isset($_POST['btnRegister']))
							{
								$registered=register();
								
								if($registered)
								{
									msg_box('You are registered successfully... ','success');
								}
								else
								{
									msg_box('Registration failed...','danger');
								}
							}
							
							if(isset($_POST['btnLogin']))
							{
								$redirect_page='profile.php';
								
								if(isset($_SESSION['redirect'])){
									$redirect_page=$_SESSION['redirect'];
									unset($_SESSION['redirect']);
								}
								
								login('customer',$_POST['emailid'],$_POST['password'],$redirect_page);
							}
					?>		
                </div>
            </div>
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="login.php" method="post">
                        	<input type="email" name="emailid" placeholder="Email Address" />
							<input type="password" name="password" placeholder="Password" />
							
							<!--<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>-->
							<button type="submit" name="btnLogin" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="login.php" method="post">
							<input type="text" name="name" placeholder="Name"/>
							<input type="email" name="emailid" placeholder="Email Address"/>
							<input type="password" name="password" placeholder="Password"/>
                            <textarea name="address" rows="3" placeholder="Address"></textarea>
                            <br></br>
                            <input type="text" name="city" placeholder="City"/>
                            <input type="text" name="contactno" placeholder="Contactno"/>
							<button type="submit" name="btnRegister" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
                   
				</div>
                
			</div>
		</div>
	</section><!--/form-->
<?php include_once('footer.php'); ?>
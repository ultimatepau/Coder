	<section id="signup-form">
		<div class="container">
			<div class="row">
			      <div class="col-md-4 col-md-offset-4">
			      	<div class="signup-form bottom">
                        <h1 class="text-center">Sign Up</h1>
					      <form role="form" method="post" action="<?= base_url()?>login/do_signup">
					        	<div class="form-group">
					          		<input type="text" class="form-control" name="name" placeholder="Name">
					        	</div>
					        	<div class="form-group">
						          	<input type="text" class="form-control" name="username" placeholder="Username">
						        </div>
						        <div class="form-group">
						          	<input type="email" class="form-control" name="email" placeholder="Email">
						        </div>
					        	<div class="form-group">
					          		<input type="password" class="form-control" name="password" placeholder="Password">
					        	</div>
					        	<div class="form-group">
					          		<input type="password" class="form-control" name="validate_password" placeholder="Reenter password">
					        	</div>
					        	<div class="form-group">
                                	<input type="submit" name="submit" class="btn btn-submit" value="Sign Up">
                                </div>
                            </div>
					      </form>
			      </div>
				</div>
			</div>
		</div>
	</section>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Log In or Register</title>
	<link class="cssdeck" rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/css/bootstrap-responsive.min.css" class="cssdeck">
	<STYLE TYPE="text/css">
	.well
	{
		height: 500px;
	}

	</STYLE>
</head>
<body>

<div class="" id="loginModal">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3>Have an Account?</h3>
	</div>
	<div class="modal-body">
		<div class="well">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#login" data-toggle="tab">Login</a></li>
				<li><a href="#create" data-toggle="tab">Create Account</a></li>
			</ul>
			<div id="myTabContent" class="tab-content">
				<div class="tab-pane active in" id="login">
					<form class="form-horizontal" action='/users/login' method="POST">
						<fieldset>
							<div id="legend">
								<legend class="">Login</legend>
							</div>    
							<div class="control-group">
								<!-- Username -->
								<label class="control-label"  for="email">Email</label>
								<div class="controls">
									<input type="text" id="email" name="email" placeholder="" class="input-xlarge">
								</div>
							</div>
							
							<div class="control-group">
								<!-- Password-->
								<label class="control-label" for="password">Password</label>
								<div class="controls">
									<input type="password" id="password" name="password" placeholder="" class="input-xlarge">
								</div>
							</div>
							
							
							<div class="control-group">
								<!-- Button -->
								<div class="controls">
									<button class="btn btn-success">Login</button>
								</div>
							</div>
						</fieldset>
					</form>                
				</div>
				<div class="tab-pane fade" id="create">
					<form id="tab" action = "/sessions/register" method = "post">
						<label>First Name</label>
						<input type="text" name = "first_name" value="" class="input-xlarge">
						<label>Last Name</label>
						<input type="text" name = "last_name" value="" class="input-xlarge">
						<label>Email</label>
						<input type="text" name = "email" value="" class="input-xlarge">
						<label>Password</label>
						<input type="text" name = "password" value="" class="input-xlarge">
						<label>Confirm Password</label>
						<input type="text" name = "confirm_password" value="" class="input-xlarge">
						<input class="btn btn-primary" type = 'submit' value = 'create account'>
					</form>
					<?php echo $this->session->flashdata('errors'); ?>
				</div>
				<div id="myTabContent" class="tab-content">
				<div class="tab-pane active in" id="login">
					<form class="form-horizontal" action='/sessions/login' method="POST">
						<fieldset>
							<div id="legend">
								<legend class="">Admin</legend>
							</div>    
							<div class="control-group">
								<!-- Username -->
								<label class="control-label"  for="email">Email</label>
								<div class="controls">
									<input type="text" id="email" name="email" placeholder="" class="input-xlarge">
								</div>
							</div>
							
							<div class="control-group">
								<!-- Password-->
								<label class="control-label" for="password">Password</label>
								<div class="controls">
									<input type="password" id="password" name="password" placeholder="" class="input-xlarge">
								</div>
							</div>
							
							
							<div class="control-group">
								<!-- Button -->
								<div class="controls">
									<button class="btn btn-success">Login</button>
								</div>
							</div>
						</fieldset>
					</form>                
				</div>
			</div>
		</div>
	</div>

<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
</body>
</html>
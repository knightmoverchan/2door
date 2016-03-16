 <!DOCTYPE html>
<html lang="en">
<head>
	<title>Login </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

 	<link rel="stylesheet" style="text/css" href="/template/bootstrap/css/styl2.css">
	<link rel="stylesheet" style="text/css" href="/template/bootstrap/css/bootstrap.css">
</head>
<body>
	<div class="container">
 		<div class="row">
  			<br/><br/>
 			<div class="row">
 			<div class="col-sm-1"></div>
				<div class="col-sm-3" style="left:25px; top:-20px;"><img class="ligid" src="images/ligid3.jpg"></div>
				<div class="col-sm-4 bord">

					<h3>Please login</h3>
					 <hr/>
					<div class="panel-body"><br>  

						@if(count($errors) > 0)
			              <div class="alert alert-danger">
			                <strong>Whooops!</strong>There's an error!
			                <ul>
			                  @foreach($errors->all() as $error)
			                    <li>
			                      {{ $error }}
			                    </li>
			                  @endforeach
			                </ul>
			              </div>
			            @endif      
			              
					   	<form class="form-horizontal" role="form" method="POST" action="/">
					 		
					 		<input type="hidden" name="_token" value="{{ csrf_token() }}">

							<div class="form-group">
								<div class="col-md-12">
									<input type="email" class="form-control input-lg" name="email" placeholder="Enter email" required>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-12">
									<input type="password" class="form-control input-lg" name="password" placeholder="Password" required>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-12">
									<div class="checkbox">
										<label>
											<a>
												<input type="checkbox" name="remember"> Remember Me
											</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href="/password/email">Forgot Your Password? </a>
										</label><br><br>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-12">
									<button type="submit" class="btns btn-block input-lg" style="margin-right: 15px;">
									  	Login
									</button><br><br>

									<center><a href="register"> Create New Account</a> </center>
								</div>
							</div>
					    </form>
 					</div>
			    </div>

				<div class="col-sm-4">
				<div class="row"><br><br></div>
				<div class="row">
				  <img src="/template/img/truck.jpg">
				</div>
 			</div>
 		</div>
 	</div>
 </div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register User</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/login.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading"><h3>Registration</h3></div>
					<div class="panel-body">
						<form class="form-horizontal" role='form' method="POST" action="registerAnswer">
							<div class="form-group">
								<label for="name" class="col-md-4 control-label">Name</label>
								<div class="col-md-6">
									<input id="name" type="text" class="form-control" name="name" value="" required autofocus>
								</div>
							</div>
							<div class="form-group">
								<label for="email" class="col-md-4 control-label">E-mail address</label>
								<div class="col-md-6">
									<input id="email" type="email" class="form-control" name="email" value="" required>
								</div>
							</div>
							<div class="form-group">
								<label for="password" class="col-md-4 control-label">Password</label>
								<div class="col-md-6">
									<input id="password" type="password" class="form-control" name="password" required>
								</div>
							</div>
							<div class="form-group">
								<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
								<div class="col-md-6">
									<input id="password-confirm" type="password" class="form-control" name="confirm" required>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									<button type="submit" class="btn btn-primary" name="save">
										Register
									</button>
								</div>
							</div>
							<p style="padding-top: 10px;"><a href="./">Web site</a></p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>
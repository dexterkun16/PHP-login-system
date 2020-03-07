<!DOCTYPE html>
<html lang="">

<head>
	<meta charset="utf-8">
	<title>Login System</title>
	<meta name="author" content="Your Name">
	<meta name="description" content="Example description">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="icon" type="image/x-icon" href=""/>
</head>

<body>
	<div class="container">
    <div class="login-box">
	    <div class="row">
	        <div class="col-md-6 login-left">
	            <h2>Log Here</h2>
	            <form action="validation.php" method="post">
	                <div class="form-group">
	                    <label for="">Username</label>
	                    <input type="text" name="user" class="form-control" required>
                    </div>
	               <div class="form-group">
	                    <label for="">Password</label>
	                    <input type="password" name="password" class="form-control" required>
	                </div>
	                <button type="submit" class="btn btn-primary">LOGIN</button>
	            </form>
	        </div>
	        
	        <div class="col-md-6 login-right">
	            <h2>Register Here</h2>
	            <form action="registration.php" method="post">
	                <div class="form-group">
	                    <label for="">Username</label>
	                    <input type="text" name="user" class="form-control" required>
                    </div>
	               <div class="form-group">
	                    <label for="">Password</label>
	                    <input type="password" name="password" class="form-control" required>
	                </div>
	                <button type="submit" class="btn btn-primary">REGISTER</button>
	            </form>
	        </div>
	        
	    </div>
	</div>
    </div>
</body>

</html>
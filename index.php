<!DOCTYPE html>
<html lang ="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device=width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Login</title>
</head>
<body style=" background-image: url(/img/star.jpg)">
        <div class="container">
        	<div class="row">
        		<div class="col-lg-6 m-auto">
        			<div class="card bg-blue mt-5">
        				<div class="card-title bg-primary text-white">
        					<h3 class="text-center py-3  ">Login Form</h3>
        				</div>
                         <?php 
        				if(@$_GET['Empty']==true)
                             {
        					?>
                              <div class="alert-light text-danger text-center"><?php echo $_GET['Empty']?></div>
        				<?php
                             }
                         ?>

        				<?php 
        				if(@$_GET['Invalid']==true)
                             {
        					?>
                              <div class="alert-light text-danger text-center"><?php echo $_GET['Invalid']?></div>
        				<?php
                             }
                         ?>
        				<div class="card-body">

        					<form action="process.php" method="POST">
        						<input type="text" name="name" placeholder="UserName" class="form-control mb-3">
        						<input type="password" name="password" placeholder="Password" class="form-control mb-3">
        						<button class="btn btn-success mt-3" name="Login">Login</button>
        					</form>
        					
        				</div>
        			</div>
        			
        		</div>
        		
        	</div>
        	
        </div>
</body>
</html>
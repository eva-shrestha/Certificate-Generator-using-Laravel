<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CertiGen</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

	<link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">


</head>
<body>
	

	<nav class="navscroll navbar transparent fixed-top navbar-expand-lg navbar-light bg-white">
    
		<div class="container">
	
			<!-- logo -->
			<!-- <a class="navbar-brand text-dark font-weight-bold" href="/" ><img src="logo-certi-01.png" class="img-fluid logo" alt="logo"></a> -->
			<a class="navbar-brand font-weight-bold" href="#" target="_blank" style="color: rgb(12, 79, 110);">
				CertiGen
			</a>

			<!-- Collapse button -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<!-- ---navbar links-------- -->
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item ">
						<a class="nav-link " href="/">Home</a>
					</li>

					<li class="nav-item">
						<a class="nav-link " href="#" >Templates</a>
					</li> 

					<li class="nav-item">
						<a class="nav-link " href="{{ route('login') }}" >Login</a>
					</li> 	
				</ul>
			</div>
			<!-- --end of navbar links----------- -->
	
	
		</div>
	
	</nav>

	<section class="homepage">
		<div class="container">
                <h2 class=" font-weight-bold">Create a Certificate Easliy</h2>
				<h1 class="font-weight-bold">with CertiGen </h1>
				<p class="text-justify">Succesfully conducted an event? Want to create a certificate?<br>
					CertiGen has got your back. Create an impact with professional <br>certificate designs without 
						 spending a cent.</p>
					
                <a href="{}"><button class="btn" >Get started</button></a><br>

		</div>
	</section>



	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://kit.fontawesome.com/789f0dffd4.js" crossorigin="anonymous"></script>

	<!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
        
</body>
</html>
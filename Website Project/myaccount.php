<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<meta name="description" content="Services web design">
		<meta cname="keywords" content="armut, web design, Services, professional web design">
		<meta name="author" content="Kuzey Cetin">
		<title>Widget | My Account</title>
		<link rel="stylesheet" href="./css/style.css">
		<!-- <i class="fas fa-search"></i> arama motoru ikonu -->
	</head>
	<body>
		<header>
			<div class="container">
				<div id="branding">
					<nav class="navbar">
	<span class="open-slide">
		<a href="#" onclick="openSlideMenu()">
			<svg width="25" height="12">
				<path d="M0,1 25,1" stroke="#e8491d"
				stroke-width="2"/>	
				<path d="M0,6 25,6" stroke="#e8491d"
				stroke-width="2"/>
				<path d="M0,11 25,11" stroke="#e8491d"
				stroke-width="2"/>
			</svg>	
		</a>
	</span>

	</nav>
	<div id="side-menu" class="side-nav">
		<a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
		<a href="index.php">Home</a>
		<a href="renderservices.php">Services</a>
		<a href="myaccount.php">My Account</a>
	</div>
				</div>
				<nav>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="renderservices.php">Render Services</a></li>
						<li class="current"><a href="myaccount.php">My account</a></li>
					</ul>
				</nav>
			</div>
		</header>

		<section id="mainsubs">
			<div class="col">
			<ul class="price-box">
				<li class="headercol">Simple</li>
				<li class="emph"><strong>$5.99</strong> / Month</li>
				<li><strong>5</strong> Clients</li>
				<li><strong>24/7</strong> support</li>
				<li><strong>8.0%</strong> Additional fees</li>
				<li><strong>-</strong></li>
				<li><strong>-</strong></li>
				<li class="emph"><a href="#" class="sign-button">Sign Up</a></li>
			</ul>
		</div>

		<div class="col">
			<ul class="price-box best">
				<li class="headercol-green">Standard</li>
				<li class="emph"><strong>$15.99</strong> / Month</li>
				<li><strong>20</strong> Clients</li>
				<li><strong>24/7</strong> support</li>
				<li><strong>5.0%</strong> Additional fees</li>
				<li><strong>Professional</strong> reports</li>
				<li><strong>-</strong></li>
				<li class="emph"><a href="#" class="sign-button">Sign Up</a></li>
			</ul>
		</div>

		<div class="col">
			<ul class="price-box">
				<li class="headercol">Super</li>
				<li class="emph"><strong>$35.99</strong> / Month</li>
				<li><strong>Unlimited</strong> Clients</li>
				<li><strong>24/7</strong> support</li>
				<li><strong>2.0%</strong> Additional fees</li>
				<li><strong>Professional</strong> reports</li>
				<li><strong>Personalized</strong> content recommendations</li>
				<li class="emph"><a href="#" class="sign-button">Sign Up</a></li>
			</ul>
		</div>
		</section>

		<script>
			function openSlideMenu(){
				document.getElementById('side-menu').style.width = '250px' ;
			}

			function closeSlideMenu(){
				document.getElementById('side-menu').style.width = '0' ;
			}
		</script>

		<footer>	
		<p>Services web design, Copyright &copy; 2020</p>
		</footer>
	</body>
</html>
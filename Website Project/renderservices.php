<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<meta name="description" content="Services web design">
		<meta cname="keywords" content="armut, web design, Services, professional web design">
		<meta name="author" content="Kuzey Cetin">
		<title>Widget | Render Sevices</title>
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
						<li class="current"><a href="renderservices.php">Render Services</a></li>
						<li><a href="myaccount.php">My account</a></li>
					</ul>
				</nav>
			</div>
		</header>


		<section id="main">
			<div class="container">
				<article id="main-col">
					<h1 class="page-title">Render Services</h1>
					<ul id="services">
						<li>
							<h3>Personal Trainer</h3>
							<p>fiziksel özelliğe sahip malın tersine, elle tutulamayan ve saklanması mümkün olmayan, insan ihtiyaçlarının giderilmesine yönelik olarak üretilen veya organize edilen, turizm, haberleşme, danışmanlık gibi faaliyetlerdir. Üretilen çıktının mülkiyetinin olmaması hizmeti üründen ayrılan temel özellikti</p>
							<p>Pricing: $300 - $550 per month</p>
						</li>
						<li>
							<h3>Website Designer</h3>
							<p>fiziksel özelliğe sahip malın tersine, elle tutulamayan ve saklanması mümkün olmayan, insan ihtiyaçlarının giderilmesine yönelik olarak üretilen veya organize edilen, turizm, haberleşme, danışmanlık gibi faaliyetlerdir. Üretilen çıktının mülkiyetinin olmaması hizmeti üründen ayrılan temel özellikti</p>
							<p>Pricing: $1,000 - $3,000</p>
						</li>
						<li>
							<h3>Architecture</h3>
							<p>fiziksel özelliğe sahip malın tersine, elle tutulamayan ve saklanması mümkün olmayan, insan ihtiyaçlarının giderilmesine yönelik olarak üretilen veya organize edilen, turizm, haberleşme, danışmanlık gibi faaliyetlerdir. Üretilen çıktının mülkiyetinin olmaması hizmeti üründen ayrılan temel özellikti</p>
							<p>Pricing: $100 - $1,000</p>
						</li>
					</ul>
				</article>
				<aside id="sidebar">
					<div class="dark">
						<h3>Get A Quote</h3>
						<form class="quote">
							<div>
								<label>Name</label><br>
								<input type="text" placeholder="Name">
							</div>
							<div>
								<label>Name</label><br>
								<input type="email" placeholder="Email Address">
							</div>
							<div>
								<label>Name</label><br>
								<textarea placeholder="Message"></textarea>
							</div>
							<button class="button_1" type="submit">Send</button>
						</form>
					</div>
				</aside>
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
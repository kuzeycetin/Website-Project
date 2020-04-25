<!DOCTYPE html>
<html>
	<head>
		<script defer src=https://use.fontawesome.com/releases/v5.0.6/js/all.js></script>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<meta name="description" content="Services web design">
		<meta cname="keywords" content="armut, web design, Services, professional web design">
		<meta name="author" content="Kuzey Cetin">
		<title>Widget | Welcome</title>
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
						<li class="current"><a href="index.php">Home</a></li>
						<li><a href="renderservices.php">Render Services</a></li>
						<li><a href="myaccount.php">My account</a></li>
					</ul>
				</nav>
			</div>
		</header>

		<section id="showcase">
			<div class="container">
				<img src="./img/homescreen.png"> <!-- logomuz buraya gelicek -->
			</div>
		</section>

		<section>
			<div class="headersb">
				<form method="post">
					
					<div class="form-box"></div>
					<input class="search-field" name="search" type="text" placeholder="Evden Eve Nakliyat..."/>

					<button class="search-btn1" type="submit" name="submit">Search</button>

				</form>
			</div>
		</section>

		<section id="boxes">
			<div class="container">
				<div class="box">
					<img src="./img/hizmet.png">
					<h3>Kaliteli hizmet al</h3>
					<p>Teklif aldığın hizmet verenlerin kalitesini daha önceki işlerinde aldıkları gerçek müşteri yorumları sayesinde görür, güvenle kararını verirsin.</p>
				</div>
				<div class="boxk">
					<img src="./img/kurir.png">
					<h3 id="h3kurir">Hizli servis</h3>
					<p>Aradığın hizmet için dükkan dükkan dolaşmak ya da tanıdıklarından referans aramakla uğraşma. Teklifler cebine gelsin, zamanın sevdiklerinle sana kalsın.</p>
				</div>
				<div class="box">
					<img src="./img/main logo task.png">
					<h3>Hizmet ver</h3>
					<p>Daha çok müşteriye ulaş, daha çok kazan.</p>
				</div>
			</div>	
		</section>

		<!-- <section id="newsletter">
			<div class="search-box">
				<input class="search-txt" type="text" name="" placeholder="Evden Eve Nakliyat..">
				<a class="search-btn" href="#">
					<i class="fas fa-search"></i>	
				</a>
			</div>
		</section> --> 

		<footer>
			
		<p>Services web design, Copyright &copy; 2020</p>
		</footer>


		<script>
			function openSlideMenu(){
				document.getElementById('side-menu').style.width = '250px' ;
			}

			function closeSlideMenu(){
				document.getElementById('side-menu').style.width = '0' ;
			}
		</script>

	</body>
</html>

<?php
$con = new PDO("mysql:host=localhost;port=3308;dbname=websiteproject",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `search` WHERE Name = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table>
			<tr>
				<th>Name</th>
				<th>Description</th>
			</tr>
			<tr>
				<td><?php echo $row->Name; ?></td>
				<td><?php echo $row->Description;?></td>
			</tr>

		</table>
<?php
	}
		
		else{
			echo "Name Does not exist";
		}
}

?>

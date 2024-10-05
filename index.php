<?php

require_once "/var/www/api.ntfg.net/htdocs/hammer/hammer.php";
$hammer = new Hammer;
$hammer->setHS(1);
$d = new david_document($hammer);

function composition($title,$composer,$image,$link,$instrumentation,$note="")
{
	echo "<div class=\"col-md-3\"><div class=\" alert alert-success\"><a href=\"".$link."\" target=\"_BLANK\"><img src=\"".$image."\" alt=\"".$composer."-".$title."\" style=\"max-width:100%\" /><br /><h3>".$title."</h3><h4>".$composer."</h4>".$instrumentation."</a></div></div>";
}



?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		<title>NoiseDots</title>
		<link rel="shortcut icon" href="/assets/favicon.png"/>
		<!-- Font Awesome icons (free version)-->
		<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
		<!-- Google fonts-->
		<link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
		<!-- Core theme CSS (includes Bootstrap)-->
		<link href="css/styles.css" rel="stylesheet" />
		<?php $hammer->tzscript(); ?>
	</head>
	<body id="page-top">
		<!-- Navigation-->
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
			<a class="navbar-brand js-scroll-trigger" href="#page-top">
				<span class="d-block d-lg-none">NoiseDots</span>
				<span class="d-none d-lg-block"><img class="img-fluid mx-auto mb-2" src="/assets/NoiseDotsWhite.png" alt="..." /></span>
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#solo">Solo</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#chamber">Chamber</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#choral">Choral</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#large-ensemble">Large Ensemble</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#albums">Albums</a></li>
				</ul>
			</div>
		</nav>
		<!-- Page Content-->
		<div class="container-fluid p-0">
			<!-- About-->
			<section class="resume-section" id="about">
				<div class="resume-section-content">
					<h1 class="mb-0">NoiseDots</h1>
					<div class="subheading mb-5">
						The publishing arm of NDSU Music Composition
					</div>
					<p class="lead mb-5"></p>
					<!--<div class="social-icons">
						<a class="social-icon" href="#!"><i class="fab fa-linkedin-in"></i></a>
						<a class="social-icon" href="#!"><i class="fab fa-github"></i></a>
						<a class="social-icon" href="#!"><i class="fab fa-twitter"></i></a>
						<a class="social-icon" href="#!"><i class="fab fa-facebook-f"></i></a>
					</div>-->
				</div>
			</section>
			<hr class="m-0" />
			
			<!-- Solo -->
			<section class="resume-section" id="solo">
				<div class="resume-section-content">
					<h2 class="mb-5">Solo</h2>
					<div class="row">
					<?php composition("Dance of The Fairies","Owen Cary","/assets/scorepics/Owen_dance_Fairies.png","https://www.sheetmusicplus.com/en/product/dance-of-the-fairies-22086755.html","Solo Piano");?>
					<?php composition("Montecian Festival","Jonathon Erickson","/assets/scorepics/Erickson-MontecianFestival.png","https://www.sheetmusicplus.com/en/product/montecian-festival-22608114.html","Clarinet and Piano");?>
					<?php composition("Return me Home to Frost Laden Trees","Jonathon Erickson","/assets/scorepics/Erickson-FrostTreesPiano.png","https://www.sheetmusicdirect.com/en-US/se/ID_No/1460904/Product.aspx","Solo Piano");?>
					<?php composition("Sonata for Tuba and Piano","Connor McCormick","https://f4.bcbits.com/img/0031555293_36.jpg","https://connormccormick.bandcamp.com/merch/sonata-for-tuba-and-piano","Tuba and Piano");?>
					<?php composition("Head in the Clouds","Kyle Vanderburg",$d->getURL("10EBA100-9135-426F-8EB1-3EB85D25C4A9"),"https://kylevanderburg.com/music/head-in-the-clouds/","Soprano Sax and Piano");?>
					</div>
				</div>
			</section>
			<hr class="m-0" />
			
			<!-- Chamber-->
			<section class="resume-section" id="chamber">
				<div class="resume-section-content">
					<h2 class="mb-5">Chamber Music</h2>
					<div class="row">
					<?php composition("Into the Forest","Owen Cary","/assets/scorepics/Owen_Forest.png","https://www.sheetmusicplus.com/en/product/into-the-forest-22086493.html","Percussion Duet");?>
					<?php composition("Metalshop Meltdown","Owen Cary","/assets/scorepics/Owen_Metalshop.png","https://www.sheetmusicplus.com/en/product/metalshop-meltdown-22165912.html","Percussion Ensemble");?>
					<?php composition("Excerpt from The Shadow of Mercy","Jonathon Erickson","/assets/scorepics/Erickson-ShadowMercy.png","https://www.sheetmusicdirect.com/en-US/se/ID_No/1401375/Product.aspx","String Quintet");?>
					<?php composition("The Emissary of Hope","Jonathon Erickson","/assets/scorepics/Erickson-Emissary.png","https://www.sheetmusicdirect.com/en-US/se/ID_No/1426946/Product.aspx","Mixed Chamber Ensemble");?>
					<?php composition("Hexagon","Connor McCormick","https://f4.bcbits.com/img/0031554708_36.jpg","https://connormccormick.bandcamp.com/merch/hexagon-for-clarinet-quartet","Clarinet Quartet");?>
					<?php composition("Petty Larceny","Connor McCormick","https://f4.bcbits.com/img/0031555384_36.jpg","https://connormccormick.bandcamp.com/merch/petty-larceny-for-brass-quintet","Brass Quintet");?>
					<?php composition("House of Mirrors","Connor McCormick","https://f4.bcbits.com/img/0031555580_36.jpg","https://connormccormick.bandcamp.com/merch/house-of-mirrors-for-woodwind-quintet","Woodwind Quintet");?>
					<?php composition("Looking for my Keys","Connor McCormick","https://f4.bcbits.com/img/0031555777_36.jpg","https://connormccormick.bandcamp.com/merch/looking-for-my-keys-for-woodwind-quintet","Woodwind Quintet");?>
					
					</div>
				</div>
			</section>
			<hr class="m-0" />
			
			<!-- Choral-->
			<section class="resume-section" id="choral">
				<div class="resume-section-content">
					<h2 class="mb-5">Choral</h2>
					<div class="row">
					<?php composition("Carving a Name","Kyle Vanderburg",$d->getURL("5BD21642-8688-469A-A939-9927BBFFAA02"),"https://kylevanderburg.com/music/carving-a-name/","SSA Choir and Piano");?>
					<?php composition("Mnemosyne","Kyle Vanderburg",$d->getURL("CB4D3455-2E47-44B1-A35B-CCF90018AC0D"),"https://kylevanderburg.com/music/mnemosyne/","SATB Choir and Piano");?>
					</div>
				</div>
			</section>
			<hr class="m-0" />
			
			<!-- Large Ensemble-->
			<section class="resume-section" id="large-ensemble">
				<div class="resume-section-content">
					<h2 class="mb-5">Large Ensemble</h2>
					<div class="row">
					<?php composition("The Bedouin of Wyrms","Jonathon Erickson","/assets/scorepics/Erickson-Bedouin.png","https://www.sheetmusicdirect.com/en-US/se/ID_No/1426951/Product.aspx","String Ensemble");?>
					</div>
				</div>
			</section>
			<hr class="m-0" />
			
			<!-- Albums-->
			<section class="resume-section" id="albums">
				<div class="resume-section-content">
					<h2 class="mb-5">Albums</h2>
					<div class="row">
					Coming Soon!
					<?php //composition("385","Jonathon Erickson","/assets/scorepics/Erickson-Bedouin.png","https://www.sheetmusicdirect.com/en-US/se/ID_No/1426951/Product.aspx","String Ensemble");?>
					</div>
				</div>
			</section>
		</div>
		<!-- Bootstrap core JS-->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
		<!-- Core theme JS-->
		<script src="js/scripts.js"></script>
	</body>
</html>

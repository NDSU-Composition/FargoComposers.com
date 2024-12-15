<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	
	<link rel="stylesheet" href="//cdn.ntfg.net/common/fonts.css" type="text/css" />
	<link rel="stylesheet" href="//cdn.ntfg.net/common/nfcore.css">
	<link rel="shortcut icon" href="//ndsucomposition.com/assets/favicon.png" />
    <title>Fargo Composers</title>
</head>
<body>
<?php include '/var/www/ndsucomposition.com/htdocs/header.php'; ?>

    <header>
        <div class="container">
        <hr>
        <img src="assets/FargoComposers.svg" alt="New Music ND" style="width:200px;" /> <span class="float-end"><h4>Publishing from NDSU Music Composition</h4></span>
		</div>
	</header>
	
	<div class="container">
		<hr>
	

<?php
function composition($title,$composer,$image,$link,$instrumentation,$note="")
{
	echo "<div class=\"col-md-3\"><div class=\" alert alert-success\"><a href=\"".$link."\" target=\"_BLANK\"><img src=\"".$image."\" alt=\"".$composer."-".$title."\" style=\"max-width:100%\" /><br /><h3>".$title."</h3><h4>".$composer."</h4>".$instrumentation."</a></div></div>";
}
?>


		
		<!-- Page Content-->
		<div class="container">
						
			<!-- Solo -->
					<h2 class="mb-5">Solo</h2>
					<div class="row">
					<?php composition("Dance of The Fairies","Owen Cary","/assets/scorepics/Owen_dance_Fairies.png","https://www.sheetmusicplus.com/en/product/dance-of-the-fairies-22086755.html","Solo Piano");?>
					<?php composition("Montecian Festival","Jonathon Erickson","/assets/scorepics/Erickson-MontecianFestival.png","https://www.sheetmusicplus.com/en/product/montecian-festival-22608114.html","Clarinet and Piano");?>
					<?php composition("Return me Home to Frost Laden Trees","Jonathon Erickson","/assets/scorepics/Erickson-FrostTreesPiano.png","https://www.sheetmusicdirect.com/en-US/se/ID_No/1460904/Product.aspx","Solo Piano");?>
					<?php composition("Sonata for Tuba and Piano","Connor McCormick","https://f4.bcbits.com/img/0031555293_36.jpg","https://connormccormick.bandcamp.com/merch/sonata-for-tuba-and-piano","Tuba and Piano");?>
					<?php composition("Head in the Clouds","Kyle Vanderburg","https://liszt.app/fetch/10EBA100-9135-426F-8EB1-3EB85D25C4A9","https://kylevanderburg.com/music/head-in-the-clouds/","Soprano Sax and Piano");?>
					</div>
				</div>
			
			<!-- Chamber-->
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
			<hr class="m-0" />
			
			<!-- Choral-->
					<h2 class="mb-5">Choral</h2>
					<div class="row">
					<?php composition("Carving a Name","Kyle Vanderburg","https://liszt.app/fetch/5BD21642-8688-469A-A939-9927BBFFAA02","https://kylevanderburg.com/music/carving-a-name/","SSA Choir and Piano");?>
					<?php composition("Mnemosyne","Kyle Vanderburg","https://liszt.app/fetch/CB4D3455-2E47-44B1-A35B-CCF90018AC0D","https://kylevanderburg.com/music/mnemosyne/","SATB Choir and Piano");?>
					</div>
			<hr class="m-0" />
			
			<!-- Large Ensemble-->
					<h2 class="mb-5">Large Ensemble</h2>
					<div class="row">
					<?php composition("The Bedouin of Wyrms","Jonathon Erickson","/assets/scorepics/Erickson-Bedouin.png","https://www.sheetmusicdirect.com/en-US/se/ID_No/1426951/Product.aspx","String Ensemble");?>
					</div>
			<hr class="m-0" />
			
			<!-- Albums-->
					<h2 class="mb-5">Albums</h2>
					<div class="row">
					Coming Soon!
					<?php //composition("385","Jonathon Erickson","/assets/scorepics/Erickson-Bedouin.png","https://www.sheetmusicdirect.com/en-US/se/ID_No/1426951/Product.aspx","String Ensemble");?>
					</div>
		</div>
		</div>
		<?php include '/var/www/ndsucomposition.com/htdocs/footer.php'; ?>
	</body>
</html>

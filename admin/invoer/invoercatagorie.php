<!doctype html>
<html encoding="utf-8" lang="nl">

<?php require_once'../../head.php'; ?>


<body>
<?php require_once'../header.php';?>
	<main>
		<div class="container">
			<div class="cato-keuze-temp">
				 <div class="cato-temp-wrapper">
						<h3>dranken invoeren</h3>
						<img src="" alt="">
						<p>hier kan de persoon die recht tot deze pagina heeft boeken/songtexten/info pagina's toevoegen. hier onder vind u de verschillende forms om deze verschillende dingen toe te voegen</p>

						<button>
							<a href="">
								<h4>
									maak een nieuwe dranken pagina
								</h4>
							</a>
						</button>
					</div>
				</div>
				<div class="cato-keuze-temp">
					<div class="cato-temp-wrapper">
						<h3>boeken pagina's invoeren</h3>
						<img src="" alt="">
						<p>hier kan de persoon die recht tot deze pagina heeft boeken/songtexten/info pagina's toevoegen. hier onder vind u de verschillende forms om deze verschillende dingen toe te voegen</p>

						<button>
							<a href="<?php echo $base_url;?>admin/invoer/boekeninvoer.php">
								<h4>
									maak een nieuwe boeken pagina
								</h4>
							</a>
						</button>
					</div>
				</div>
				<div class="cato-keuze-temp">
					<div class="cato-temp-wrapper">
						<h3>songtexten invoeren</h3>
						<img src="" alt="">
						<p>hier kan de persoon die recht tot deze pagina heeft boeken/songtexten/info pagina's toevoegen. hier onder vind u de verschillende forms om deze verschillende dingen toe te voegen</p>

						<button>
							<a href="">
								<h4>
									maak een nieuwe songtext pagina
								</h4>
							</a>
						</button>
					</div>
				</div>
			</div>
		</div>
 </main>
 <?php require_once '../../footer.php';?>
	<!-- Add your site or application content here -->s
	<script src="js/vendor/modernizr-3.11.2.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>

	<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
	<script>
		//================ zelf toegevoegd =================  
		function goBack() {  window.history.back();   }
		// =================================================
		window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
		ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
	</script>
	<script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
<!doctype html>
<html encoding="utf-8" lang="nl">

<?php require_once'../head.php'; ?>
<body>
<?php require_once'header.php';?>
<main>
  <div class="admin-inleiding-txt">
    <h4>beheerders scherm</h4>
    <p>hier kan de persoon die recht tot deze pagina heeft boeken/songtexten/info pagina's toevoegen. hier onder vind u de verschillende forms om deze verschillende dingen toe te voegen</p>
  </div>
	<div class="container">
		<div class="cato-keuze-temp">
      <div class="cato-temp-wrapper">
      	<h2>het overzicht pagina</h2>
      	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque maiores eum earum, minima fuga, eveniet vitae, id, facere tenetur nostrum ratione culpa dignissimos tempore magnam! Hic saepe possimus quas facere.	</p>
      	<button><a href="<?php echo $base_url;?>admin/view.php">overzicht pagina</a></button>
      </div>
    </div>
    <div class="cato-keuze-temp">
      <div class="cato-temp-wrapper">
      	<h2>nieuw boeken/songtexten/infopagina's invoeren</h2>
      	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque maiores eum earum, minima fuga, eveniet vitae, id, facere tenetur nostrum ratione culpa dignissimos tempore magnam! Hic saepe possimus quas facere.	</p>
      	<button><a href="invoer/invoercatagorie.php">invoer forms</a></button>
      </div>
    </div>
	</div>
</main>
<?php require_once '../footer.php';?>
<script src="js/vendor/modernizr-3.11.2.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
  window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
  ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
<?php $base_url = 'http://localhost/PRA2CodeCamp/';?>

<div class="navbar">
	<a id="home"href="<?php echo $base_url;?>index.php"><img class="logo" src="<?php echo $base_url;?>img/codecamp.png" alt="logo van het bedrijf codecamp"></a>
	<div class="homebtn">
		<button class="dropbtn-home">
			<a href="<?php echo $base_url;?>admin/index.php">dashboard</a>
		</button>
	</div>
	<div class="dropdown">  
		<button class="dropbtn">
			<a href="#">Dranken</a> 
		</button>
	</div>

	<div class="dropdown">
		<button class="dropbtn">
			<a href="<?php echo $base_url;?>admin/invoer/invoercatagorie.php">Infopagina's</a> 
		</button>
	</div>

	<div class="dropdown">
		<button class="dropbtn">
			<a href="#">Songtexten</a>
		</button>
	</div>
</div>
<div class="return-btn">
	<button class="backbtn">
		<a href="javascript:history.go(-1)">
			Ga Terug <<<
		</a>
	</button>
</div>
<script type="text/javascript">	
//================ zelf toegevoegd =================  
function goBack() {  window.history.back(-1); var url = window.history.  }
// =================================================
</script>	
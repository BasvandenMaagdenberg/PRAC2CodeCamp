<?php $base_url = 'http://localhost/PRA2CodeCamp/';?>
<div class="navbar">
  <a id="home"href="<?php echo $base_url;?>index.php"><img class="logo" src="<?php echo $base_url;?>img/codecamp.png" alt="logo van het bedrijf codecamp"></a>
  <div class="homebtn">
    <button class="dropbtn-home"><a href="<?php echo $base_url;?>index.php">home</a></button> 
  </div>
  <div class="dropdown">
      
    <div class="dropdown">  
      <button class="dropbtn"><a href="<?php echo $base_url;?>dranken/catagorien.php">Dranken</a> 
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="<?php echo $base_url;?>dranken/warm.php">Warmen Dranken</a>
        <a href="<?php echo $base_url;?>dranken/frisdrank.php">Fris Dranken</a>
      </div>
    </div>
  </div>

  <div class="dropdown">
    <button class="dropbtn"><a href="<?php echo $base_url;?>infopaginas/catagorien.php">Infopagina's</a> 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="<?php echo $base_url;?>infopaginas/catagorien.php">Gereedschappen</a>
      <a href="<?php echo $base_url;?>infopaginas/personages/catagorien.php">Persona's</a>
      <!-- <a href="<?php echo $base_url;?>overig/catagorien.php">boeken / externe verwijzingen</a> <--></-->
    </div>
  </div>

  <div class="dropdown">
    <button class="dropbtn"><a href="<?php echo $base_url;?>songtexten/artiestencatogorieen.php">Artiesten en Songtexten</a>
      <i class="fa fa-caret-down"></i>
    </button>
      <div class="dropdown-content">
      <a href="<?php echo $base_url;?>songtexten/muse/catagorien.php">Muse</a>
      <a href="<?php echo $base_url;?>songtexten/queen/catagorien.php">Queen</a>
    </div>
  </div>

</div>
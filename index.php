<!doctype html>
<html encoding="utf-8" lang="nl">

<?php require_once'head.php'; ?>

<body>
<?php require_once'header.php';?>


  <main>
  
    <div class="container">
      <div class="cato-keuze-temp">
          <img src="" alt="">
          <h3>Infopagina's</h3>
            <img src="" alt="">
            <p>beschrijving van de catogorie. hier vertel je iets over wat de keuze in houd om de gebruiker een beter beeld te geven over wat ze kunnen vinden binnen deze catogorie.</p>

            <button>
              <a href="<?php echo $base_url;?>infopaginas/catagorien.php">
                <h4>
                  Gereedschappen / personages / overige info pagina's
                </h4>
              </a>
            </button>
      </div>
      <div class="cato-keuze-temp">
          <h3>Dranken | warm / fris |</h3>
          <img src="" alt="">
          <p>beschrijving van de catogorie. hier vertel je iets over wat de keuze in houd om de gebruiker een beter beeld te geven over wat ze kunnen vinden binnen deze catogorie.</p>

          <button>
            <a href="<?php echo $base_url;?>dranken/catagorien.php">
              <h4>
                Dranken | warm / fris |
              </h4>
            </a>
          </button>
      </div>
      <div class="cato-keuze-temp">
          <h3>Songtexten</h3>
          <img src="" alt="">
          <p>beschrijving van de catogorie. hier vertel je iets over wat de keuze in houd om de gebruiker een beter beeld te geven over wat ze kunnen vinden binnen deze catogorie.</p>

          <button>
            <a href="<?php echo $base_url;?>songtexten/artiestencatogorieen.php">
              <h4>
                Songtexten
              </h4>
            </a>
          </button>
      </div>
    </div>
    <div class="klok">
    <script src="https://cdn.logwork.com/widget/text.js"></script> 
            <a href="https://logwork.com/clock-widget/" class="clock-widget-text" data-timezone="Europe/Amsterdam" data-language="nl">Datum en Tijd</a>

    </div>
    <?php require_once'footer.php';?>
  </main>
  <?php require_once 'footer.php';?>
  <!-- Add your site or application content here -->
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

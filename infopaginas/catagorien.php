<!doctype html>
  <html encoding="utf-8" lang="nl">

  <?php require_once'../head.php'; ?>


  <body>
    <?php require_once'../header.php';?>
    <main>
      <div class="container"> 
        <div class="cato-keuze-temp">
          <h3>Gereedschappen</h3>
          <img src="" alt="">
          <p>beschrijving van de catogorie. hier vertel je iets over wat de keuze in houd om de gebruiker een beter beeld te geven over wat ze kunnen vinden binnen deze catogorie.</p>

          <button>
            <a href="gereedschappen/catagorien.php">
              <h4>
                Gereedschappen
              </h4>
            </a>
          </button>
        </div>

      <div class="cato-keuze-temp">

        <h3>Personages</h3>
        <img src="" alt="">
        <p>beschrijving van de catogorie. hier vertel je iets over wat de keuze in houd om de gebruiker een beter beeld te geven over wat ze kunnen vinden binnen deze catogorie.</p>

        <button>
          <a href="personages/catagorien.php">
            <h4>
              Personages
            </h4>
          </a>
        </button>
      </div>

    <div class="cato-keuze-temp">

      <h3>Boeken</h3>
      <img src="" alt="">
      <p>beschrijving van de catogorie. hier vertel je iets over wat de keuze in houd om de gebruiker een beter beeld te geven over wat ze kunnen vinden binnen deze catogorie.</p>

      <button>
        <a href="overig/boeken.php">
          <h4>
            Boeken
          </h4>
        </a>
      </button>
      </div>
    </div>
  </div>
</main>
<?php require_once '../footer.php';?>
<!-- Add your site or application content here -->
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
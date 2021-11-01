<!doctype html>
<html encoding="utf-8" lang="nl">

<?php require_once'../head.php'; ?>

<body>
<?php require_once'../header.php';?>

  <main>
    <div class="container">
      <div class="cato-keuze-temp">
        <div class="cato-temp-wrapper">
          <h3>Muse</h3>
          <img src="" alt="">
          <p>beschrijving van de catogorie. hier vertel je iets over wat de keuze in houd om de gebruiker een beter beeld te geven over wat ze kunnen vinden binnen deze catogorie.</p>

          <button>
            <a href="<?php echo $base_url;?>songtexten/muse/catagorien.php">
              <h4>
                Muse
              </h4>
            </a>
          </button>
        </div>
      </div>
      <div class="cato-keuze-temp">
        <div class="cato-temp-wrapper">
          <h3>Queen</h3>
          <img src="" alt="">
          <p>beschrijving van de catogorie. hier vertel je iets over wat de keuze in houd om de gebruiker een beter beeld te geven over wat ze kunnen vinden binnen deze catogorie.</p>

          <button>
            <a href="<?php echo $base_url;?>songtexten/queen/catagorien.php">
              <h4>
                Queen
              </h4>
            </a>
          </button>
        </div>
      </div>
    </div>
  </main>
  <!-- Add your site or application content here -->s
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
<!-- Panel : registration -->
<section id="registration" class="content-section text-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
        <h2>Rejoignez-nous</h2>
        <?php if (new DateTime() < new DateTime("2019-10-13 12:00:00")) { ?>
	        <p>Les inscriptions ouvriront le dimanche 13 octobre à midi heure française.</p>
        <?php } else {?>
          <!--p class="small">At the start of the application process, please select the language you wish.</p-->
	        <a href="https://www.weezevent.com/evenement.php?id_evenement=121598&lg_billetterie=2"
	          class="btn btn-default btn-lg">Inscription</a>
        <?php } ?>
      </div>
    </div>
  </div>
</section>
<!-- /Panel : registration -->

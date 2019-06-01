<!-- Panel : registration -->
<section class="content-section text-center">
  <div class="registration-section">
    <div class="container">
      <div class="col-lg-8 col-lg-offset-2">
        <h2>Join us</h2>
        <?php if (new DateTime() < new DateTime("2019-10-13 12:00:00")) { ?>
	        <p>Applications will open on Sunday, 13th October at 12.00 French time.</p>
        <?php } else {?>
          <!--p class="small">At the start of the application process, please select the language you wish.</p-->
	        <a href="https://www.weezevent.com/evenement.php?id_evenement=121598&lg_billetterie=2" 
	          class="btn btn-default btn-lg">Register</a>
        <?php } ?>
      </div>
    </div>
  </div>
</section>
<!-- /Panel : registration -->

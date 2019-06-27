<!DOCTYPE html>
<html lang="en">

<head>

    <?php require_once 'panels/head.html'?>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

  <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
          <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="index.php"><span class="light">Cheers</span> Chambéry!</a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
        <ul class="nav navbar-nav">
          <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
          <li class="hidden">
            <a href="#page-top"></a>
          </li>
          <li>
            <a href="index.php#accommodation"><i class="fa fa-angle-double-left"></i> Back</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <section class="content-section">
    <div class="intro-section">
      <div class="container">
        <div class="col-lg-8 col-lg-offset-2 text-center">
          <h2>Hotels</h2>
          <p>
            <a href="#map" class="btn btn-default btn-lg page-scroll"><i class="fa fa-map-marker fa-fw"></i>
            <span class="network-name">See the map</span></a>
          </p>
          <p>
            We have negotiated a special offer with the Hotel Kyriad (3-stars) situated next door to the
            Centre des Congrès. <strong>To obtain these special rates, please contact the hotel directly by
            telephone or e-mail (not via their website)</strong> and state that you are participating in the Scottish
            Country Dancing Weekend, Easter 2020. The “code” for the special offer is RSCDS.
          </p>
        </div>
      </div>

      <div class="separator container">
        <p class="col-md-offset-2 col-md-8 text-center">
          Room rates per night excluding breakfast. Taxes and breakfast price given for 2019, per night, per person.<br />
          Special offer is open until 31st of January 2020.
        </p>
        <div class="col-xs-offset-1 col-xs-10 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4">
          <div class="panel panel-default text-center inverted-contrast">
            <div class="panel-heading">
              <h3 class="panel-title">Hôtel Kyriad<br />***</h3>
            </div>
            <div class="panel-body">
              <a href="https://www.kyriad.com/en/hotels/kyriad-chambery-centre-curial" class="btn btn-info" target="_blank">Website</a>
              <a href="mailto:chambery.centre@kyriad.fr" class="btn btn-info">Email</a>
            </div>
            <ul class="list-group">
              <li class="list-group-item">Walking time: 1 min.</li>
              <li class="list-group-item">Single: 54€</li>
              <li class="list-group-item">Double or twins: 59€</li>
              <li class="list-group-item">3 or 4 sharing: 95€</li>
              <li class="list-group-item">Breakfast: 11.90€</li>
              <li class="list-group-item">Local tax: 1.10€</li>
              <li class="list-group-item">Car park: 9.50€/day</li>
            </ul>
            <div class="panel-footer">
              371 rue de la République<br/>+33 (0)4 79 36 13 64
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="col-md-offset-2 col-md-8 text-center">
          <p>
            We have also listed a few other hotels close to the Centre des Congrès for reference.
          </p>
        </div>
      </div>

      <div class="separator container">
        <div class="col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-4">
          <div class="panel panel-default text-center inverted-contrast">
            <div class="panel-heading">
              <h3 class="panel-title">Théâtre Hôtel<br />Chambéry<br />**</h3>
            </div>
            <div class="panel-body">
              <a href="http://www.theatrehotelchambery.com/index_en.html" class="btn btn-info" target="_blank">Website</a>
            </div>
            <ul class="list-group">
              <li class="list-group-item">Walking time: 3 min.</li>
            </ul>
            <div class="panel-footer">
              9 rue Denfert Rochereau<br/>+33 (0)4 79 85 76 79
            </div>
          </div>
        </div>

        <div class="col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-4">
          <div class="panel panel-default text-center inverted-contrast">
            <div class="panel-heading">
              <h3 class="panel-title">Hôtel<br />des Princes<br />***</h3>
            </div>
            <div class="panel-body">
              <a href="http://inter-desprinces-chambery.h-rez.com/index.htm" class="btn btn-info" target="_blank">Website</a>
            </div>
            <ul class="list-group">
              <li class="list-group-item">Walking time: 6 min.</li>
            </ul>
            <div class="panel-footer">
              4 rue de Boigne<br/>+33 (0)4 79 33 45 36
            </div>
          </div>
        </div>

        <div class="col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-4">
          <div class="panel panel-default text-center inverted-contrast">
            <div class="panel-heading">
              <h3 class="panel-title">Petit Hôtel<br />Confidentiel<br />*****</h3>
            </div>
            <div class="panel-body">
              <a href="https://www.petithotelconfidentiel.com/en/" class="btn btn-info" target="_blank">Website</a>
            </div>
            <ul class="list-group">
              <li class="list-group-item">Walking time: 10 min.</li>
            </ul>
            <div class="panel-footer">
              10 rue de la Trésorerie<br/>+33 (0)4 79 26 24 17
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Map Section -->
  <div id="map"></div>

  <!-- Footer -->
  <footer>
    <div class="container text-center">
      <p>&copy; 2019 RSCDS Paris Branch</p>
    </div>
  </footer>

  <!-- jQuery and bootstrap -->
  <script src="rsrc/js/jquery.js"></script>
  <script src="rsrc/js/bootstrap.min.js"></script>
  <script src="rsrc/js/jquery.easing.min.js"></script>
  <!-- Google Maps API Key -->
  <script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNX--XE5O9SEim85tATdj6wy49bjv83QY"></script>
  <!-- Custom Theme JavaScript -->
  <script src="rsrc/js/grayscale-hotels.js"></script>

</body>

</html>

<?php
if (isset ( $_GET ['fr'] )) {
	$lang = "fr";
	$panels = "panelsfr";
} else {
	$lang = "en";
	$panels = "panels";
}

?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>

    <?php require_once $panels.'/head.html'?>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<?php require_once $panels.'/navigation.html';?>

<?php include_once $panels.'/intro.html';?>
<?php include_once $panels.'/about.html';?>
<?php include_once $panels.'/program.html';?>
<?php include_once $panels.'/travel.html';?>
<?php include_once $panels.'/accommodation.html';?>
<?php include_once $panels.'/fares.html';?>
<?php include_once $panels.'/registration.php';?>
<?php include_once $panels.'/chambery.html';?>

  <!-- Map Section -->
  <div id="map"></div>

  <?php include_once $panels.'/contact.html';?>


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
  <script src="rsrc/js/grayscale.js"></script>

</body>

</html>

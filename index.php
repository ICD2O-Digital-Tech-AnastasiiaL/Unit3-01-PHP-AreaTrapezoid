<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Area of a Trapezoid, in PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Anastasiia Lebedenko">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Area of a Trapezoid, in PHP</title>
  </head>
  <body>
		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h1>Area of a Trapezoid, in PHP</h1>";
			echo "<h3>This website will help you calculate the area of a trapezoid.</h3>";
		?>
		<!-- form to get the base and height from the user -->
    <form action="./results.php" method="post" target="results">
      <label for=lblBaseA">Base A (cm):</label>
      <input type="text" id="baseA" placeholder="Enter the base A (cm)" name="baseA"><br><br>
      <label for=lblBaseB">Base B (cm):</label>
      <input type="text" id="baseB" placeholder="Enter the base B (cm)" name="baseB"><br><br>
      <label for="lblHeight">Height (cm):</label>
      <input type="text" id="height" placeholder="Enter the height (cm)" name="height"><br><br>
      <input type="submit" value="Calculate Area">
		</form>

			<!-- iframe for the results to show on the web page. -->
			<iframe id="results" name="results">			
				The area of the trapezoid is  " + $area + cm<sup>2</sup>
	    </iframe>
	</body>
</html>
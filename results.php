<?php
	// get the base and height from the textfields
	$baseA = $_POST['baseA'];
	$baseB = $_POST['baseB'];
	$height = $_POST['height'];

	// calculate the area
	$area = ($baseA + $baseB) / 2 * $height
?>
<h3>Results:</h3>
The area of the trapezoid is <?php echo "$area" ?>cm<sup>2</sup>.
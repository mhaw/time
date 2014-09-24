<!DOCTYPE html>
<html>
<head>

    <meta charset='utf-8'>
    <title>PHP Time Test</title>
	
	<?php require 'logic.php'; ?>
	
	<link rel='stylesheet' href='style.css' type='text/css'>

</head>

<body class='<?php echo $timeofday; ?>'>

	<h3>It is: <?php echo $time; ?></h3>
	<h4>Time zone: <?php echo $zone; ?></h4>

	<img src='http://making-the-internet.s3.amazonaws.com/<?php echo $picture; ?>'>

</body>
</html>
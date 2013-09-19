<!doctype html>
<head>
	<meta charset="utf-8">
	<?php
	    if(isset($_GET["viewport"])) {
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<?php 
            $title="with viewport meta!";
	    } else {
	        $title="without viewport meta!";
	    }
	?>
	<title>Test <?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="viewport.css">
</head>
<body>
	<div id="container">
		<div id="bluebox"></div>
	</div>
</body>
</html>
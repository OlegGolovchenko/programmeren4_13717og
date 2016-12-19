<!doctype html>
<html lang="en">
</head>
	<meta charset="UTF-8">
	<title>verwerken</title>
</head>
<body>
	<p>Aanvraag ongevangt</p>
	<p> je naam is
	<?php
		echo $_POST["firstName"].' '.$_POST["lastName"];
	?>
	</p>
</body>
</html>

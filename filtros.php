<?php require_once("includes/header.php"); ?>

<body>
	<?php
		if ($_POST['tipo'] == '1') {include "sologoogle.php";}
		if ($_POST['tipo'] == '2') {include "espacenet.php";}
		else if ($_POST['tipo'] == '3') {include "busqueda.php";}
	?>
</body>
</html>
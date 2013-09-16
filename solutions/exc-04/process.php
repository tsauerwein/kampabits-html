<html>
<head><title></title></head>

<body>
<p>The following data was sent to the server:</p>
<h2>POST</h2>
<?php
foreach ($_POST as $key => $value) {
	echo '<strong>' . $key . ':</strong> ' . $value .'<br>';
}
?>

<h2>GET</h2>
<?php
foreach ($_GET as $key => $value) {
	echo '<strong>' . $key . ':</strong> ' . $value .'<br>';
}
?>

<body>
</html>
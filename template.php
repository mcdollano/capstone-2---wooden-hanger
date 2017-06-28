<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php get_title()?></title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family= Bubbler+One|Open+Sans|Satisfy" rel="stylesheet"> 
</head>
<body id="body">
	<?php

		require_once 'partials/nav.php';
		display_content();
		require_once 'partials/footer.php';
	?>






</body>
</html>
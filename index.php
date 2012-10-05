<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	
	<link rel="stylesheet" href="css/style.css" />
	
	<title>WordPress Readme Converter</title>
	<meta name="author" content="Shea Bunge" />
	
	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<header>
		<h1>WordPress Readme Converter</h1>
	</header>
	
	<p>Enter the URL of the <code>readme.txt</code> file to convert:</p>
	<form method="post" action="includes/converter.php">
		<p><input type="url" name="file" size="70" value="http://" /></p>
		<p><input type="submit" value="Convert" class="button-primary" /></p>
	</form>

</body>
</html>
<html>
<head>
    <title>PHP Action Page </title>
    </head>

<body>
      <?php
	$myFile=fopen("newfile.txt", "a+") or die("Unable to story name");

	fvrite($myFile, $_POST("Name"));
	fvrite($myFile, ",");
	fvrite($myFile, $_POST("Email"));
	fvrite($myFile, "\n);

	fclose($myFile);

	?>
	<p>Thanks for your submission</p>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Show App Code</title>
</head>
<body style="background:white;">
<pre>
<?php

$displayContents = "";

//
// get pages passed in url
//
$codepages = $_GET['codepages']; // get the requested code pages to display

//
// create array from pages passed in
//
$pages = explode("~", $codepages);
// print_r($pages);
// print($pages[0]);

for ($i = 0; $i < count($pages); $i++)
{
	$codepage = $pages[$i];

	if ($i > 0)
	{
		$displayContents = $displayContents."<br /><br />";
	}

	$displayContents = $displayContents." ===== <br /> =====  File: $codepage<br /> ===== <br /><br />";
	if (file_exists($codepage))
	{
		// print("File exists: $codepage");
		$fh = fopen("$codepage", 'rb');

		if ( $fh != false)
		{
			// print("File CAN be opened: $codepage");

			$contents = "";
			$results = "";
			
			while (!feof($fh)) {
			  	$results = fread($fh, 8192);
				$results = str_replace("<", "&lt;", $results);
				$results = str_replace(">", "&gt;", $results);
				$contents .= $results;
			}

			fclose($fh);	
		}
		else
		{
			// print("File cant be opened: $codepage");
			$contents = "<center><h3>Error - Code file could not be opened $codepage.</h3></center>";
		}
		
	}
	else
	{
		// print("File does not exists: $codepage");
		$contents = "<center><h3>Error - Code name not valid $codepage</h3></center>";
	}

	$displayContents = $displayContents.$contents;

}

$displayContents = $displayContents."<br /><br /><br /><br /><br /><br />";

print $displayContents;	
?>

</pre>		  
</body>
</html>
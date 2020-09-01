<?php
echo date('d/m/Y' . '<br>');

$row = '<p>This is a row <p><br>';

echo htmlspecialchars($row);
//converts pre determined special characters to HTML entities
//echos less than (<) and more than (>) as plain text


echo strip_tags($row);
//removes any HTML, PHP and XML tags

echo str_replace('row', 'paragraph', 'row');

echo strtoupper($row);

$rad_byte = nl2br("En ny.\n Rad \n");   // Replaces \n with a break tag

echo $rad_byte;

echo md5($row) . '<br>';      //calculating the md5 hash of a string. Compresses the string and creates a "fingerprint".

if (strlen($row) > 2) {
    echo '"row" has more than 2 character <br>';
}
else {
    echo '"row" has 2 or less characters <br>';
}

$url = 'prakticum.fi';

if (stristr('url', 'http://') == false) {
    $url = 'http://' . $url;
    echo $url;
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>PHP</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>

	</body>
</html>
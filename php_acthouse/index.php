<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
	</head>
	<body>
<?php
$arr =array('apple','banana','orange');
print_r($arr);
echo($arr[1]);

echo("<br>");
$arr2 = array('red' => 'apple','yellow'=>'banana','orange'=>'orange');
print_r($arr2);

$arr3 = 
array(
	'red' =>array('apple','cherry'),
	'yellow' => array('banana','mango'),
	'orange'
	);
print_r($arr3);

$array4 = ['red' => ['apple','cherry']];
print_r($arr)

?>

<hr>
<?php

$message = <<<EOT
This is the default welcome page used to test the correct operation of the Apache2 server after installation on Ubuntu systems. It is based on the equivalent page on Debian, from which the Ubuntu Apache packaging is derived. If you can read this page, it means that the Apache HTTP server installed at this site is working properly. You should replace this file (located at /var/www/html/index.html) before continuing to operate your HTTP server.
If you are a normal user of this web site and don't know what this page is about, this probably means that the site is currently unavailable due to maintenance. If the problem persists, please contact the site's administrator.


EOT;
echo $message;
?>
<hr>
<pre>
<?php
print_r ($_SERVER);
?>
</pre>
<h2>GET情報</h2>
<?php
print_r($_GET);
?>
<h2>POST情報</h2>
<?php print_r($_POST); ?>
<h2>FILES情報</h2>
<?php print_r($_FILES);?>
<h2>REQUEST情報</h2>
<?php print_r($_REQUEST); 

?>

<form method="post" enctype="multipart/formdata">
<input type="text" name="shopname" value="アヤラセンター">
<input type="file" name="sample">
<button>送信</button>

	</body>
	</html>	
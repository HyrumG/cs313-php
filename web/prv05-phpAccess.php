<?php

try 
{
	$dbUrl = getenv('DATABASE_URL');

	$dbopts = parse_url($dbUrl);

	$dbHost = $dbopts["host"];
	$dbPort = $dbopts["port"];
	$dbUser = $dbopts["user"];
	$dbPassword = $dbopts["pass"];
	$dbName = ltrim($dbopts["path"],'/');

	$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>	
<?php


	$query = "SELECT u.name, d.last_changed FROM 'user' u";


// // SELECT u.name, d.last_changed, d.dry, d.wet, d.dirty, d.mixed FROM 'user' u INNER JOIN diaper d ON u.id = d.id;"
// 	$count = 0;

	foreach ($db->query($query) as $user) {
	$name = $user["name"];

	echo "<li>Name: $name</li>";	
}

// 	foreach ($db->query($query) as $diaper) {
// 	$last_changed = $diaper["last_changed"];
// 	$dry = $diaper["dry"];
// 	$wet = $diaper["wet"];
// 	$dirty = $diaper["dirty"];
// 	$mixed = $diaper["mixed"];

// 	echo "<li>Last Changed: $last_changed. Dipaer was ";
// 	if ($dry)
// 		echo "dry.";
// 	elseif ($wet) {
// 		echo "wet.";
// 	}
// 	elseif ($dirty) {
// 		echo "dirty.";
// 	}
// 	elseif ($mixed) {
// 		echo "mixed.";
// 	}
// 	echo "</li></br>";	
// }

?>
</body>
</html>
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
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
		User: <input type="username" name="username">
		<br>
		Password: <input type="Password" name="password">
		<br>
		<br>
		<input type="submit" name="submit">
	</form>

<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {	
	
	$userName = $_POST['username'];
	$passwd = $_POST['password'];

	$passwordHash = password_hash($passwd, PASSWORD_DEFAULT);

	$query = "INSERT INTO taperson (username, passwd) VALUES (:user, :pass);";

	$stmt = $db->prepare($query);
	$stmt->bindvalue(":user", $userName, PDO::PARAM_STR);
	$stmt->bindvalue(":pass", $passwordHash, PDO::PARAM_STR);

	
	$stmt->execute();
	}
?>

</body>
</html>



<?php

// header('Location: ' . 'sign-in.php');

?>



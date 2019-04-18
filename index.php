<?PHP

	
	echo "Welcome! You can Use PHP & NGINX";
	echo "<br><br>Phpmyadmin : {local_ip}:8080";
	
	
	// development.env
	$host = 'mysql';#docker-compose.yml defined:hostname
	$db = getenv('sys_db');
	$user = getenv('MYSQL_USER');
	$pass = getenv('MYSQL_PASSWORD');
 
	try {
		$conn = mysqli_connect($host, $user, $pass);
	} catch(mysqli_sql_exception  $e) {
		if($e->getCode()==2002)#DB initilazing for docker
			die("Please waiting a few seconds for mysql initilazing.. And refresh again.");
		else
			exit('Connection failed: '.mysqli_connect_error().PHP_EOL);
	}
 
	echo '<br><br>MYSQL : Successful database connection!';
   
?>

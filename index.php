<?PHP

	
	echo "Welcome! You can Use PHP & NGINX , MYSQL<br>";
	echo "{local_ip}:8080 for phpmyadmin<br>";
	
	
	// development.env
	$host = 'mysql';#docker-compose.yml defined:hostname
	$db = getenv('sys_db');
	$user = getenv('MYSQL_USER');
	$pass = getenv('MYSQL_PASSWORD');
 
	$conn = mysqli_connect($host, $user, $pass);
	if (!$conn) {
		exit('Connection failed: '.mysqli_connect_error().PHP_EOL);
	}
 
	echo 'Successful database connection!';
   
?>


<?php 
	session_start();

	// connect to database
    $conn = mysqli_connect("us-cdbr-east-02.cleardb.com", "b873ff23d283c2", "a8f73ae7", "heroku_db342da0589c870");

    if (!$conn) {
    	die("Failed database connection" . mysqli_connect_error());
    }


	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'mysql://b873ff23d283c2:a8f73ae7@us-cdbr-east-02.cleardb.com/heroku_db342da0589c870?reconnect=true');
?>


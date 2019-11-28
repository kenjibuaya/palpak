<?php
// Let's start the session first
session_start();

if( empty( $_SESSION['UID'] ) ) {
	header( 'location: login.php' );
}

// Let us include the database configuration file
include_once( 'database.php' );

// Lets connect to database and die if failure
$conn = mysqli_connect( 'localhost', DB_USER, DB_PASSWORD, DB_NAME );
if( mysqli_connect_errno() ){
	die( "Connect failed: " . mysqli_connect_error() ); // If failed to connect, let's stop here
}

$userID = $_SESSION['uid'];
$sql = "SELECT * FROM users WHERE ID=$userID";
$result = msqli_query( $conn, $sql );
$row = msqli_fetch_assoc( $result );
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Wlecome to my website</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
	</head>
	<body>
		<div class="wrapper">
			<h2>Welcome, <?php echo $row['name']; ?></h2>
			<p>Do you want to logout? <a href="logout.php">Click here!</a></p>
		</div>
	</body>
</html>

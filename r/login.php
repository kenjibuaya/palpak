<?php
// Lets start the session first
session_start();

// Lets assign variable for later use
$notice = ''; // This will be used to display notices for success and failure

// Let us include the database configuration file
include_once( 'database.php' );

// Lets connect to database and die if failure
$conn = mysqli_connect( 'localhost', DB_USER, DB_PASSWORD, DB_NAME );
if( mysqli_connect_errno() ) {
	die( "Connect failed: " . mysqli_connect_error() ); // If failed to connect, let's stop here
}

// Let's handle the form submission
if ( ! empty( $_POST['email'] )  && ! empty( $_POST['password'] ) ) {
	$email = $_POST[ 'email' ];
	$password = md5( $_POST[ 'password' ] );
	
	$sql = "SELECT * FROM users WHERE email='$email'";
	$result =mysqli_query( $conn, $sql );
	if( mysqli_num_rows( $result ) >0 ) {
		while( $row =mysqli_fetch_assoc( $result ) ) {
			$user_password = $row[ 'password' ];
			if( $password === $user_password ) {
				$_SESSION['uid'] = $row['ID'];
				header( 'location: index.php' );
			} else {
				$notice = '<p style="color: red;">Login failed! Please check your input.</p>';
			}
		}
	} else {
		$notice = '<p style="color: red;">User not found!</p>';
	}
}
	?>
	<!DOCTYPE html>
	<html>
		<head>
		<meta charset="utf-8">
		<title>Register</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
	</head>
	<style>
	  .wrapper{
	  background-color: #E6E5E8;
	  padding: 20px;
	  width: 250px;
	  }
	  </style>
	<body>
	<center>
		<div class="wrapper">
			<div class="register-box">
			<h2>Login</h2>
			<?php echo $notice; ?>
			<form method="POST" action="login.php">
				<p>
					<label>
							Email<br>
							<input type="text" name="email">
						</label>
					</p>
					<p>
						<label>
							Password<br>
							<input type="password" name="password">
						</label>
					</p>
					<p>
						<input type="submit" value="login">
						</p>
						<p>
						<a href="register.php">Register</a>
					</p>
				</form>
			</div>
		</div>
		</center>
	</body>
</html>
<?php
$hello='';
if(isset( $_POST ['fname'])) {
	$name=$_POST['fname'];
	$email=$_POST['uemail'];
    $hello='<h2>Hi '.$name.' your email is '.$email.'</h2>';
	}
    ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-compatible" content="IE.edge">
		<title> Page Title </title>
		<meta name="viewport" content="width-device-width,initial-scale=1">
		<style type="text/css">
		
		body, html {
						margin:0;
						padding:0;
						background:url('11.jpg');
		
		}
		*{box-sizing:border-box;}
		.wrapper {
					width:720px;
					padding:20px;
					margin:auto;
		}
		.p {
			color:white;
			}
		</style>
		</head>
			<body>
				<div class="wrapper">
				<?php echo $hello;?>
				
			<form action=""method="post">
				<p class="p"><label>Your Name </label><input type="text" name="fname" ></p>
				<p class="p"><label>Your Email </label><input type="email" name="uemail" ></p>
				<p class="p"><input type="submit" value="Submit" onclick="myFunction()"></p>
                <script>
                function myFunction() {
                alert("Hello! I am an alert box!");
                }
                </script>

				
				</form>
				</div>
				</body>
				</html>
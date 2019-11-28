<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<title>Page title</title>
<meta name="viewport" content="width-device-width, initial-scale=1">
<style type="text/CSS">
	body, html{
		margin:0;
		padding:0;
		}
	*{box-sizing:border-box;}
	.wrapper{
		width:720px;
		padding:20px;
		margin:auto;
		}
</style>
</head>
<body>
<div class="wrapper">
<?php echo $hi;?>
<form active="" method="post">
<p><label>Your Name </label><input type="text" name="fname"></p>
<p><label>Your email </label><input type="email" name="uemail"></p>
<p><input type="submit" value="Submit"></p>
</form>
</div>
</body>
</html>
<?php
$hello='';
if (isset ($_POST ['fname'])){
	$name=$_POST['fname'];
	$email=$_POST['uemail'];
	$hello='<h2>Hi'.$name.',your email is '.$email.'</h2>';
	}
<?php
$hello="";
    if(isset($_POST['fname'])){
        $name=$_POST['fname'];
        $email=$_POST['uemail'];
        $hello='<h2>Hi! ' .$name . ',your email is ' .$email. '</h2>';
    }
?>

<!DOCTYPE html>
<html>
    <head>
            <meta charset="UTF-8"/>
            <meta http-equiv="X-UA-Compatible" content="IE.edge">
            <title> Form Php </title>
            <meta name="viewport"content="width-device-width,initial-scale=1">
        <style type="text/css">
            body,html
            {
				background-color: gray;
                margin:0;
                padding:0;
            }
            *{box-sizing:border-box;}
            .wrapper {
                width:720px;
                padding:20px;
                margin:auto;
            }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <?php echo $hello;?>
            <form action=" "method="post">
                <p><label>Your name:</label> 
                drtgwe45tw4</p>
                <p><label>Your Email:</label> 
                r3wqr r</p>
                <p><input type="submit" value="Submit"></p>
            </form>
        </div>
    </body>
</html>
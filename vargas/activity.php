<?php
$hello="";
    if(isset($_POST['fname'])){
        $name=$_POST['fname'];
        $email=$_POST['uemail'];
        $hello='<h2>Hi! ' .$name . ',your email is ' .$email. ' <a class="reload" href="http://localhost/activity2php/">Reload</a></h2>';
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
               
				font-size: 120%;
				background-image:url('pic3.png');
				background-size:cover;

            }
            *{box-sizing:border-box;}
            .wrapper {
                width:520px;
                padding:20px;
                margin:auto;
                background-color:gray;
                border-radius:50px;
                color:white;
                margin-top:80px;
                text-align:center;
                font-size:30px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
            #button{
            	background-color:skyblue;
            	color:white;
            	border-color:#27aa3b;
            	border-radius:10px;
            	width: 250px;
            	font-size:30px;
            	height:60px;
            	transition:1s;
            	border-style:none;
            }
            #button:hover{
            	background-color: gray;
            	transition:1s;
            	border-color: black;
            }
            .txtbox{
            	height:45px;
            	width:450px;
            	font-size:25px;
            	border-radius:5px;
            	margin:10px;
            }
            h2{
            	width:100%;
            	text-align: center;
            	padding:30px;
            	color:white;
            	background-color:skyblue;
            	font-size:35px;
            	animation: fade;
            	animation-duration: 2s;
            }
            @keyframes fade{
            	0%{
            		opacity:0;
            	}
            	100%{
            		opacity:1;
            	}
            }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <form action=" "method="post">
                <p><label>Your Name:<br></label> <input class="txtbox" type="text" name="fname"></p>
                <p><label>Your Email:<br></label> <input class="txtbox" type="email" name="uemail"></p>
                <p><input id="button" type="submit" value="Submit"></p>
            </form>
        </div>
        <?php echo $hello;?>
    </body>
</html>
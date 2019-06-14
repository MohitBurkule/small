<?php 


echo "hi";

if(isset($_REQUEST['actual']))
{
$actual= $_REQUEST['actual'];
$short= $_REQUEST['shorten'];

//online server  login 



// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$sql = "SELECT actuallink FROM shortner WHERE shortlink='{$short}' ";





$sql = "INSERT INTO shortner (actuallink, shortlink) VALUES ('{$actual}', '{$short}');";
					$result = $conn->query($sql);
					
					


}

 ?>	
 
 
 <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

 
     <div class="login-clean">
        <form method="post">
            <h2 class="sr-only">Shorten It!</h2>
            <div class="illustration"><i class="icon ion-ios-navigate"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="shorten" placeholder="link to shorten"></div>
            <div class="form-group"><input class="form-control" type="text" name="actual" placeholder="actual link"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">submit</button></div><a href="#" class="forgot">Forgot your email or password?</a></form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
	
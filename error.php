
<?php

  echo $_SERVER['REQUEST_URI'] ;
  echo "yoo";
  



// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$sql = "SELECT actuallink FROM short WHERE shortlink='{$short}' ";
			
			$result = $conn->query($sql);	
			if($result->num_rows > 0)//found record   
			{
			$row = $result->fetch_assoc();//get actuallink
			//redirect to row['actuallink'];
			$actual=$row['actuallink'];
			echo $actual;
			
			header("Location: {$actual}");
			die();
			
			}
			else
			{
				echo "null";
				//redirect to index 
			}
			

?>
<!--

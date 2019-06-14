
<?php

// returns true if $needle is a substring of $haystack
function contains($needle, $haystack)
{
    return strpos($haystack, $needle) !== false;
}



  echo $_SERVER['REQUEST_URI'] ;
  echo "yoo";
  
  $short=$_SERVER['REQUEST_URI'];


 $short = explode("?i=",$short);

  
  $short=$short[0];
  print_r($short);
  



// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";

$sql = "SELECT actuallink FROM shortner WHERE shortlink='{$short}'  ";
/*
$stmt = $conn->prepare("SELECT actuallink FROM shortner WHERE shortlink=?  ");
$stmt->bind_param($short);		
	 $short=$_SERVER['REQUEST_URI'];
*/
			$result = $conn->query($sql);
           // $result=$stmt->execute();	
			if($result->num_rows > 0)//found record   
			{
			$row = $result->fetch_assoc();//get actuallink
			//redirect to row['actuallink'];
			$actual=$row['actuallink'];
			echo $actual;
			// if no https in link then it works as relative 
            if(contains("http",$actual))
            {
			header("Location: {$actual}");
            }
            else
            {
            header("Location: https:{$actual}");
                
            }
            die();
			
			}
			else
			{
				echo "null";
                echo $short;
               // header("Location: http://mb.rf.gd/ ");
                
			    die();
				//redirect to index 
			}
			

?>
<!--

<?php
	
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'prisag.tk'; 
		$to = 'prisag.vnit@gmail.com'; 
		$subject = 'Message from PriSag.tk ';
		
		
                
                $body = " From: $name\n E-Mail: $email\n\n Message:\n$message \n";
                mail ($to, $subject, $body, $from);
                
	$reply_body = "\nHello $name, \n\n\tThank you for contacting us. \n\tStay tuned for more updates. \n\nLove, PriSag-Bot";
        $reply_subject = "Reply: PriSag";
        mail ($email, $reply_subject, $reply_body, $from);
$servername = "localhost";
$username = "id2286154_prisag";
$password = "prisag";
$dbname = "id2286154_prisag";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO users (name, email, message)
VALUES ('$name', '$email', '$message')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
<br>
<a href = "index.html" >Go Back</a>
<meta http-equiv="refresh" content="0;URL=index.html" />
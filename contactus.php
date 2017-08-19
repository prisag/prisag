<?php
	
		$name = $_POST['name'];
		$email = $_POST['email'];
                $tel = $_POST['tel'];
		$message = $_POST['message'];
                $check = $_POST['check'];
		$from = 'teslavnit.tk'; 
		$to = 'teslaclubofinnovations@gmail.com'; 
		$subject = 'Message from teslavnit.tk ';
		
		

                if(isset($_POST['check'])) 
                {
                $body = " From: $name\n E-Mail: $email\n Phone: $tel\n\n Message:\n$message \n I would like to receive notifications";
                mail ($to, $subject, $body, $from);
                }
                else 
                {
                $body = " From: $name\n E-Mail: $email\n Phone: $tel\n\n Message:\n$message \n I would not like to receive notifications";
                mail ($to, $subject, $body, $from);
                }
	$reply_body = "\nHello $name, \n\n\tThank you for contacting us. \n\tStay tuned for more updates. \n\nLove, TeslaBot";
        $reply_subject = "Reply: Tesla Club of Innovations";
        mail ($email, $reply_subject, $reply_body, $from);


$servername = "localhost";
$username = "id2184138_teslavnitdb";
$password = "TeslaVNITdb";
$dbname = "id2184138_teslavnitdb";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO users (name, email, phone)
VALUES ('$name', '$email', '$tel')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
<br>
<a href = "contactus.html" >Go Back</a>
<meta http-equiv="refresh" content="0;URL=contactus.html" />
<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$topic = $_POST['topic'];
$message = $_POST['message'];
$from = 'From:prg-equipment.com';
$to = 'ttaylor@prg-equipment.com';
$subject = 'Message from prg-equipment.com';

$body = "From: $name\n E-Mail: $email\n Topic: $topic\n Message: $message\n";

if ($_POST['submit'])
{
	if (mail ($to, $subject, $body, $from))
	{
		echo '<p>Your message has been sent! You should hear back from us soon.</p>';
	}
	else
	{
		echo '<p>Something went wrong, please call us or try again later.</p>';
	}
}
else
{
	echo '<p>Something went wrong, please call us or try again later.</p>';
}

?>
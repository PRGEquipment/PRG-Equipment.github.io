<?php 

$business_name = $_POST['business_name'];
$contact_name = $_POST['contact_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$lifting_capacity = $_POST['lifting_capacity'];
$LPG = $_POST['LPG'];
$diesel = $_POST['diesel'];
$electric = $_POST['electric'];
$stage3 = $_POST['stage3'];
$stage2 = $_POST['stage2'];
$cushion = $_POST['cushion'];
$pneumatic = $_POST['pneumatic'];
$fork_length = $_POST['fork_length'];
$attachments = $_POST['attachments'];
$other_adds = $_POST['other_adds'];

$from = 'From:prg-equipment.com';
$to = 'ttaylor@prg-equipment.com';
$subject = 'Forklift Sell Form from prg-equipment.com';

$body = "From: $business_name\n
 Contact Name: $contact_name\n
 E-Mail: $email\n
 Phone: $phone\n
 Lifting Capacity Requested: $lifting_capacity\n
 Fuel Type: LPG - $LPG, Diesel - $diesel, Electric - $electric\n
 Mast Specification: 3 Stage - $stage3, 2 Stage - $stage2\n
 Forklift Type: Cushion - $cushion, Pneumatic - $pneumatic\n
 Fork Length: $fork_length\n
 Forklift Attachments: $attachments\n
 Other Additions: $other_adds\n";

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
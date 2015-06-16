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
$lifting_capacity2 = $_POST['lifting_capacity'];
$LPG2 = $_POST['LPG'];
$diesel2 = $_POST['diesel'];
$electric2 = $_POST['electric'];
$stage32 = $_POST['stage3'];
$stage22 = $_POST['stage2'];
$cushion2 = $_POST['cushion'];
$pneumatic2 = $_POST['pneumatic'];
$fork_length2 = $_POST['fork_length'];
$attachments2 = $_POST['attachments'];
$other_reqs = $_POST['other_reqs'];

$from = 'From:prg-equipment.com';
$to = 'ttaylor@prg-equipment.com';
$subject = 'Forklift Trade-In Form from prg-equipment.com';

$body = "From: $business_name\n
 Contact Name: $contact_name\n
 E-Mail: $email\n
 Phone: $phone\n
 
 Forklift to Sell
 Lifting Capacity Requested: $lifting_capacity\n
 Fuel Type: LPG - $LPG, Diesel - $diesel, Electric - $electric\n
 Mast Specification: 3 Stage - $stage3, 2 Stage - $stage2\n
 Forklift Type: Cushion - $cushion, Pneumatic - $pneumatic\n
 Fork Length: $fork_length\n
 Forklift Attachments: $attachments\n
 Other Additions: $other_adds\n\n
 Forklift to Buy
 Lifting Capacity Requested: $lifting_capacity2\n
 Fuel Type: LPG - $LPG2, Diesel - $diesel2, Electric - $electric2\n
 Mast Specification: 3 Stage - $stage32, 2 Stage - $stage22\n
 Forklift Type: Cushion - $cushion2, Pneumatic - $pneumatic2\n
 Fork Length: $fork_length2\n
 Forklift Attachments: $attachments2\n
 Other Additions: $other_reqs\n";

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
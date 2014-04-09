<!-- submission.php -->
<?php
//	++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//   Copyright (C) 2005 - 2013 1-gb.net. All rights reserved.

//	 submission.php version 1.2.1
//   Revised: 20 Dec 2013
//	++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
$host = getenv("REMOTE_ADDR");

$name = $_POST["name"];
$title = $_POST["title"];
$address = $_POST["address"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$pos = $_POST["ProductOrService"];
$comments = $_POST["comments"];

$today = date("D M dS, Y \a\\t h:i a \G\M\\T");

//edit the email address and subject here
$recipient = "info@domain.com";
$subject = "Contact / Information  Request Submission";
//end of editable section

$forminfo =
"Name: $name\n
Title: $title\n
Address: $address\n
Email: $email\n
Phone: $phone\n
Product Or Service: $pos\n
Comments: $comments\n
Form Submitted: $today\n
User IP: $host\n\n";

$formsend = mail("$recipient", "$subject", "$forminfo", "From: $email\r\nReply-to:$email");
?>
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
</head>
<body>
<!-- your content -->

<!-- //your content -->
<!-- form submission roport area -->
<h3>Contact Submission Report</h3>
<?php if($formsend == true)
{
    <p>You have successfully submitted the following information:</p>
	<p><?php echo nl2br($forminfo); ?></p>
	<p><a href="index.html">Return to Home Page</a></p>

}    ?>
        <!-- //form submission roport area -->
<!-- your content -->

<!-- //your content -->
</body>
</html>

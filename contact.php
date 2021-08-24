<?php
if(isset($_POST["send"])) {
	$name = $_POST["name"];
	$emailFrom = $_POST["email"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];

	$emailTo = "mail@mail.com";
	$headers = "From:". $emailFrom ;
	$txt ="You have received and e-mail from".$name.".\n\n".$message;
	

	mail($emailTo,$subject,$txt,$headers);
	header("Location: home7.html?mailsend");

}

?>
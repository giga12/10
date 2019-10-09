<?php 
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['mail'];
	$message = $_POST['mesage'];

	$mailTo = "giga.khijakadze@geolab.edu.ge";
	$headers = "From: ".mailFrom;
	$txt = "you have received an a-mail from ".name.".\n\n".$message;

	mail($mailto, $subject, $txt, $headers);
	header("location: index.php?mailsend");

}
 ?>
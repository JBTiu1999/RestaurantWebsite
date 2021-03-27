

<?php
//require '../PHPMailer-master/PHPMailerAutoload.php';
include "../functions/connect.php";
extract($_POST);
/*$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

//$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'rgmak12@gmail.com';                 // SMTP username
$mail->Password = 'movespeed1993';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('from@example.com', 'Mailer');
$mail->addAddress($email, $email);     // Add a recipient
$mail->addAddress($email);               // Name is optional
$mail->addReplyTo('info@example.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');

$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';



    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
*/
	$date= date("Y-m-d h:i:sa");
  		$run1= mysqli_query($con,"insert into tbl_register(fname,lname,address,contact,email) values('$fname','$lname','$address','$contact','$email')");
	
	if($run1)
				{
					$a = mysqli_query($con,"select * from tbl_register where fname='$fname' ");
					$aa = mysqli_fetch_array($a);
			
					if($a)
					{
							$aaa = $aa['reg_Id'];
						
							$sql1 = "insert into tbl_user(username,password,role,reg_Id) values ('$username','$password','2','$aaa')";
							$run1 = mysqli_query($con,$sql1);
							if($run1==true)
								 {
								    echo '<script language="javascript">';
								    echo 'alert("Successfully Added")';
								    echo '</script>';
								    echo '<meta http-equiv="refresh" content="0;url=login.php" />';
								 }
												
					}
					
				}
					

?>

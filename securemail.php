<?php
include('conn_db/conn.php');

$sel="select * from appointment_email_update ";
$run=mysqli_query($conn,$sel);
while($row=mysqli_fetch_array($run)){
  $mail=$row['email'];
  }


   if (isset($_POST['submit'])) {
    $to = $mail; // this is your Email address
    $from = $_POST['em']; // this is the sender's Email address
    $subject = "Appointment Booking";
    $phone=$_POST['ph'];
    $text=$_POST['text'];
    $message= "User Email: ".$from."\nUser Number :".$phone."\nUser Message: ".$text;
    $headers = 'From: supports@etherealcustoms.com';
    mail($to,$subject,$message,$headers);
    header('Location:index.php');

    $insert="INSERT INTO securemail_data(mail_to ,mail_from,subject,ph_no,mail_text)values('$to', '$from','$subject','$phone','$text')";
    mysqli_query($conn,$insert);
    // You can also use header('Location: thank_you.php'); to redirect to another page.
   }

   if (isset($_POST['form_data'])) {
      $to = $mail; // this is your Email address
      $from = $_POST['email']; // this is the sender's Email address
      $name=$_POST['name'];
      $subject = $_POST['sub'];
      $message="\nUser Name :".$name."\nUser Email: ".$from."\nUser Message: ".$_POST['msg'];
      $headers = 'From: supports@etherealcustoms.com';
      mail($to,$subject,$message,$headers);
      header('Location: contact-us.php'); 

      $insert="INSERT INTO contact_form(cntct_to,cntct_from,name,subject,message,header)VALUES('$to','$from','$name','$subject','$message','$headers')";
      mysqli_query($conn,$insert);
      //echo "Mail Sent. Thank you  we will contact you shortly.";
      // You can also use header('Location: thank_you.php'); to redirect to another page.
     }


     
?>
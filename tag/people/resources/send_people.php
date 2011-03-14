
<?


$people = $_POST['people'];


if(empty($people)) {
echo "<h2>Please add your names</h2>\n";
die ("use the back button on your browser! ! ");
}



    //change this to your email.
    $to = "phillifechurch@gmail.com";
    $from = "phillifechurch@gmail.com";
    $subject = "[Tag You're It] People";

    //begin of HTML message
    $message = $people;
    //end of message
    $headers  = "From: $from\r\n";
    $headers .= "Content-type: text/html\r\n";

    //options to send to cc+bcc
    //$headers .= "Cc: [email]maa@p-i-s.cXom[/email]";
    $headers .= "Bcc: info@lifechurchgermantown.com"; 
    
    // now lets send the email.
    mail($to, $subject, $message, $headers);

    echo "Thank you submitting the people you have tagged. Check back soon to see your names added to the list.";
?>


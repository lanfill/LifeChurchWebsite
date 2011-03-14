<?

$name = $_POST['name'];
$story = $_POST['story'];


if(empty($name) || empty($story)) {
echo "<h2>Use Back - fill in all fields</h2>\n";
die ("Use back! ! ");
}



    //change this to your email.
    $to = "phillifechurch@gmail.com";
    $from = "phillifechurch@gmail.com";
    $subject = "[Tag You're It] Stories";

    //begin of HTML message
    $message = "<html>
 $name<br><br>
 $story
 
</html>";
  //end of message
    $headers  = "From: $from\r\n";
    $headers .= "Content-type: text/html\r\n";

    //options to send to cc+bcc
    //$headers .= "Cc: [email]maa@p-i-s.cXom[/email]";
    //$headers .= "Bcc: [email]email@maaking.cXom[/email]"; 
    
    // now lets send the email.
    mail($to, $subject, $message, $headers);

    echo "Thank you submitting your story. Check back soon to see your story added to the list.";
?>


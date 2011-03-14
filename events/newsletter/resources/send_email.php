
<?


$email = $_POST['email'];
$name = $_POST['name'];

if((!$email == "" && (!strstr($email,"@") || !strstr($email,"."))) || empty($name) )
{
echo "<h2>Use Back - Enter valid e-mail</h2>\n";
$badinput = "<h2>Email address was NOT submitted</h2>\n";
echo $badinput;
die ("Go back! ! ");
}
    //change this to your email.
    $to = "phillifechurch@gmail.com";
    $from = $email;
    $subject = "[Newsetter] Signup";

    //begin of HTML message
    $message = "<html>
 $name<br><br>
 $email
 
</html>";
    //end of message
    $headers  = "From: $from\r\n";
    $headers .= "Content-type: text/html\r\n";

    //options to send to cc+bcc
    //$headers .= "Cc: [email]maa@p-i-s.cXom[/email]";
    $headers .= "Bcc: info@lifechurchgermantown.com"; 
    
    // now lets send the email.
    mail($to, $subject, $message, $headers);

    echo "Thank you for signing up for the newsletter! Look for it in your email inbox next Thursday.";
?>


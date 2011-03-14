
<?

$name = $_POST['name'];
$nameemail = $_POST['nameemail'];
$friend = $_POST['friend'];
$friendemail = $_POST['friendemail'];



if(!$nameemail == "" && (!strstr($nameemail,"@") || !strstr($nameemail,".")))
{
echo "<h2>Use Back - Enter valid e-mail</h2>\n";
$badinput = "<h2>Feedback was NOT submitted</h2>\n";
echo $badinput;
die ("Go back! ! ");
}

if(empty($name) || empty($nameemail) || empty($friendemail)) {
echo "<h2>Use Back - fill in all fields</h2>\n";
die ("Use back! ! ");
}



    //change this to your email.
    $to = $friendemail;
    $from = $nameemail;
    $subject = "Join Me At Life Church";

    //begin of HTML message
    $message = "<html>
  <body style=\"background-color: #656464; text-align:center; color:#000000;font-family: centuray gothic,arial;\">
   <br>
   <div align=\"center\">
   	<div style=\"width:500px; text-align:right; color:#ffffff; font-size:12px;margin-bottom:5px\"> 
   	<a style=color:#ffffff href=\"http://www.lifechurchwi.com\">Visit Us Online</a> | <a style=color:#ffffff href=\"http://www.lifechurchwi.com/contact/\">Directions</a> | <a style=color:#ffffff href=\"http://www.lifechurchwi.com/media/\">Media</a>
   	</div>
   </div>
    	<div align=\"center\"> 
    	<img src=\"http://www.lifechurchwi.com/invite/common/banner_head.png\"/>
    		<div style=\"background-color:#ffffff; width:550px\">
<hd style=\"text-align:center; color:$#2693e0; font-size:12px; max-width:500px\">$name has invited you to Life Church</hd><br><br>  
<img src=\"http://www.lifechurchwi.com/invite/iamnot/iamnot.jpg\" width=\"500\" /><br><br>

<div style=\"text-align:center;width:500px\">
<a href=\"http://www.lifechurchwi.com\"><img src=\"http://www.lifechurchwi.com/invite/common/button.png\"/></a><br>

<p>
''I'm not good enough/smart enough/ brave enough.'' How many times has a thought like that prevented you from accomplishing something great? Stop buying the lies. God's Word says that in Him you are more than you've ever dared dream.  Join us for a powerful series that will help you replace the lies with God's truth and allow you to walk in freedom and confidence.
</p>
</div>
<p style=\"text-align:center; color:#7a8084;font-size:12px\">Life Church Germantown | W164 N11325 Squire Dr Suite 5A<br>Germantown | WI | 53022<br>262.251.5050 | 
<a href=\"mailto:info@lifechurchwi.com\">info@lifechurchwi.com</a></p><br>	
			</div>
	<img src=\"http://www.lifechurchwi.com/invite/common/banner_foot.png\"/>
		</div><br><br>
  </body>
</html>";
  //end of message
    $headers  = "From: $from\r\n";
    $headers .= "Content-type: text/html\r\n";

    //options to send to cc+bcc
    //$headers .= "Cc: [email]maa@p-i-s.cXom[/email]";
    //$headers .= "Bcc: [email]email@maaking.cXom[/email]"; 
    
    // now lets send the email.
    mail($to, $subject, $message, $headers);

    echo "Message has been sent....!";
?>


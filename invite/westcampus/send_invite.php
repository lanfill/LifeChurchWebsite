
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
<img src=\"http://www.lifechurchwi.com/invite/westcampus/westcampus_web_invite.jpg\" width=\"500\" /><br><br>

<div style=\"text-align:center;width:500px\">
<a href=\"http://www.lifechurchwi.com\"><img src=\"http://www.lifechurchwi.com/invite/common/button.png\"/></a><br>

<p>
Join us for the launch of the Life Church West Campus on April 3rd at 9:30am at the Marcus Majestic Cinema (<a href=\"http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=770+North+Springdale+Road,+Brookfield,+Wisconsin+53186+(Majestic+Cinema+-+Brookfield)&sll=43.04446,-88.181419&sspn=0.01402,0.030127&gl=us&ie=UTF8&hq=&hnear=770+N+Springdale+Rd,+Waukesha,+Wisconsin+53186&ll=43.042014,-88.181891&spn=0.00701,0.015063&t=h&z=16&iwloc=A\" style=\"color:#00aeef\">click here</a> for map and directions). The experience will feature energetic music, relevant teaching, as well as a safe and fun-filled atmosphere for kids of all ages. 
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


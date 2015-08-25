// Get values from the form
$name=$_POST['name'];
$city=$_POST['city'];
$phone=$_POST['phone'];
$email=$_POST['email'];
 
$to = &quot;omg.itsvishesh@gmail.com<script cf-hash="f9e31" type="text/javascript">
/* <![CDATA[ */!function(){try{var t="currentScript"in document?document.currentScript:function(){for(var t=document.getElementsByTagName("script"),e=t.length;e--;)if(t[e].getAttribute("cf-hash"))return t[e]}();if(t&&t.previousSibling){var e,r,n,i,c=t.previousSibling,a=c.getAttribute("data-cfemail");if(a){for(e="",r=parseInt(a.substr(0,2),16),n=2;a.length-n;n+=2)i=parseInt(a.substr(n,2),16)^r,e+=String.fromCharCode(i);e=document.createTextNode(e),c.parentNode.replaceChild(e,c)}}}catch(u){}}();/* ]]> */</script>&quot;;
$subject = &quot;Future Tutorials Contact Form Test&quot;;
$message = &quot; Name: &quot; . $name . &quot;\r\n City: &quot; . $city . &quot;\r\n Phone: &quot; . $phone . &quot;\r\n Email: &quot; . $email;
 
$from = &quot;FutureTutorials&quot;;
$headers = &quot;From:&quot; . $from . &quot;\r\n&quot;;
$headers .= &quot;Content-type: text/plain; charset=UTF-8&quot; . &quot;\r\n&quot;;
 
if(@mail($to,$subject,$message,$headers))
{
  print &quot;&lt;script&gt;document.location.href='http://demo.ftutorials.com/html5-contact-form/success.html';&lt;/script&gt;&quot;;
  // Created by Future Tutorials
}else{
  echo &quot;Error! Please try again.&quot;;
}
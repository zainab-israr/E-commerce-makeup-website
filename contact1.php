<html>
<head>
</head>
<style>
   .s
    {
      border-top:1px solid #bbb;
    }
    .m
    {
      background-color:black;
      height:150px;
      width:99%;
      padding-top:20px;
      padding-left:20px;
      padding-bottom:20px;
    }
</style>
<body>
<div class="m">
	    <p style="color:white"> E.L.F IS FOR EVERY EYE, LIP & FACE<p>
	     <h1 align="center" style="color:white;">e.l.f.</p></h1>
	     <p align="center"><a href="#" style="color: white;
                  background-color: transparent;
                  text-decoration: none;">EYES</a>&nbsp;&nbsp;&nbsp;&nbsp;
	     <a href="#" style="color: white;
                  background-color: transparent;
                  text-decoration: none;">LIPS</a>&nbsp;&nbsp;&nbsp;&nbsp;
	     <a href="#" style="color: white;
                  background-color: transparent;
                  text-decoration: none;">FACE</a>&nbsp;&nbsp;&nbsp;&nbsp;
	     <a href="#" style="color: white;
                  background-color: transparent;
                  text-decoration: none;">SKIN CARE</a>&nbsp;&nbsp;&nbsp;&nbsp;
	     <a href="#" style="color: white;
                  background-color: transparent;
                  text-decoration: none;">BRUSHES & TOOLS</a>
    </div> 
<h1 align="center" style="padding-top:30px">Thankyou!</h1>
<h4 align="center" style="padding-bottom:30px">Your Feedback Has Been Sent Successfully!</h4>
<div class="s"></div>
	<h3 align="left" style="margin-left:250px;">HELP
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	DISCOVER E.L.F.
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	SERVICES</h3>
	
	<a href="FAQS.php" target="_blank" style="color:black;
                  background-color: transparent;margin-left:250px;
                  text-decoration: none;">FAQs</a> 
				  <a href="aboutus.php" target="_blank" style="color:black;
                  background-color: transparent;margin-left:290px;
                  text-decoration: none;">About Us</a>
				  <a href="default.asp" target="_blank" style="color:black;
                  background-color: transparent;margin-left:315px;
                  text-decoration: none;">Wish List</a>
				  <br><br>
	<a href="contact.php" target="_blank" style="color:black;
                  background-color: transparent;margin-left:250px;
                  text-decoration: none;">Contact Us</a>
				  <a href="careers.php" target="_blank" style="color:black;
                  background-color: transparent;margin-left:260px;
                  text-decoration: none;">Careers</a>
				  <a href="viewcart.php" target="_blank" style="color:black;
                  background-color: transparent;margin-left:325px;
                  text-decoration: none;">View Cart</a>
				  <br><br>
	<a href="privacyPolicy.php" target="_blank" style="color:black;
                  background-color: transparent;margin-left:250px;
                  text-decoration: none;">Privacy Policy</a><br><br>
	           <a href="order.php" target="_blank" style="color:black;
                  background-color: transparent;margin-left:250px;
                  text-decoration: none;">Order Cancellation</a><br><br>
	           <a href="exchangePolicy.php" target="_blank" style="color:black;
                  background-color: transparent;margin-left:250px;
                  text-decoration: none;">Exchange Policy</a><br>						  
<?php session_start();
$Name=$_SESSION['name'];
$Email=$_SESSION['email'];
$No=$_SESSION['order'];
$Question=$_SESSION['question'];
$Comment=$_SESSION['com'];

$dsn = "elf";
$username = "root";
$password = "";
@$db = new mysqli('localhost', $username, $password,$dsn);
 if (mysqli_connect_errno()) {
  echo 'Connection error: ' . $db->connect_errno;
 exit;
 }
 $query = "INSERT INTO contact VALUES (?, ?, ?, ?, ?)";
 $stmt = $db->prepare($query);
 $stmt->bind_param('ssiss',$Name, $Email, $No, $Question, $Comment);
 $stmt->execute();
 ?>
 </body>
 </html>
</body>
</html>
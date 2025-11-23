
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CONTACT US </title>
  <link rel="stylesheet" type="text/css" href="contact.css">

</head>
<style>
    .error {background-color: #FF0000; color:white;}
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
    .r1
    {
      padding-top:20px;
      padding-left:20px;
      padding-bottom:20px;
    }
	.c
	{
      font: size 40px;
      font-weight: 400;
      height: 40px;
      letter-spacing: 4px;
      text-align: center;
      margin-left: -200px;
      font-family:montserrat;
      color: black;
    }
    .c1
	{
     margin-top: -160px;
     margin: left 100px;
     padding-bottom: 40px;
     height: 600px;
     width: 400px;
     background-color: rgb(204, 193, 193);
     font-size: 19px;
     font-family:montserrat;
	 }
     .p
	 {
     font-size: small;
     text-align: center;
     }
     .p1
	{
      margin-left: 434px;
    }
     .b 
	{
      background-color:black;
      border: none;
      color: white;
      padding: 16px 32px;
      margin: 50px 40px;
      margin-left: 400px;
     
    }
     .c2
	{
      margin-left: 450px;
      margin-top: -450px;
      max-width: 900px;
      padding: 30px 22px 20px 30px;
      font: 14px Arial, Helvetica, sans-serif;
    }
    .c2 label
	{
      display: block;
      margin: 0px 0px 15px 0px;
    }
    .c2 label > span
	{
      width: 100px;
      font-weight: bold;
      float: left;
      padding-top: 8px;
      padding-right: 5px;
    }
    .c2 .f2
	{
      width: 40px;
      text-align: center;
    }
    .c2 input.f2, .c2 .d
	{
      width: 48%;	
    }
    .c2 input.f2, 
    .c2.f2, 
    .c2 .f3, 
    .c2 .d
	{
      box-sizing: border-box;
     
      border: 1px solid #1f0202;
     
      padding: 9px;
      outline: none;
    }
    .c2 .f2:focus, 
    .c2.f2:focus, 
    .c2.f3:focus,  
    .c2.d:focus
	{
      border: 1px solid rgb(204, 0, 0);
    }

    .c2 input.f3
	{
      height:500px;
      width: 200px;
      margin-left: -50px;
    }
 
    </style>
<body>
<?php session_start();
// define variables and set to empty values
$nameErr = $emailErr = $orderErr = $questionErr = $comErr = "";
$name = $email = $order = $question = $com = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["name"])) 
  {
    $nameErr = "Name is required";
  }
  else{
         $name=test_input();		
	}
    
  if (empty($_POST["email"])) 
  {
    $emailErr = "Email is required";
  } else 
   {
        $email=test_input();
	}
	
	if (empty($_POST["order"])) 
  {
    $orderErr = "Order is required";
  } else 
   {
        $order=test_input();		
	}
	
  if (!isset($_POST["question"])) {
    $questionErr= "Question Required";
  } else {
    $question=test_input();
  }

  if (empty($_POST["com"])) {
    $comErr= "Comment Required";
  } else {
    $com=test_input();
  }
}
function test_input() 
{
	 if(($_POST["name"])!=null && ($_POST["email"])!=null && ($_POST["order"])!=null && ($_POST["question"])!=null &&
		  ($_POST["com"]!=null))
		 {
			$_SESSION['name']=$_POST['name'];
			$_SESSION['email']=$_POST['email'];
			$_SESSION['order']=$_POST['order'];
			$_SESSION['question']=$_POST['question'];
			$_SESSION['com']=$_POST['com'];
            header("Location:contact1.php");
         } 
}
?>
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
<div class="c"><h1> <b>CONTACT US </b> </h1></div>
<div class="p"><p>If you have any questions or comments please feel free to contact us with the form below.</p><br></div>
<div class="p1"><p><b>Like many of you, e.l.f. is doing our part to navigate a new normal due to COVID-19. Our agents are working remotely to 
           stay safe, so please bear with us if call quality is affected. All emails will be responded to within one business day.</b></p></div>
<div class="c1">
  <br>
 <ul><b>CUSTOMER SERVICE</b></ul><br>
 <ul>(212) 239-1530</ul>
 <ul>(Weekdays 9:30am-5:30pm EST)</ul>
 <ul>elfcare@elfcosmetics.com</ul>
 <ul>Chat With Us</ul>
 <ul>Send us a Message</ul>
 <ul>    </ul><br>
 <ul>FAQs</ul>
 <ul>Where to Find Us </ul>
 <ul></ul><br>
 <ul>Terms</ul>
 <ul> Privacy Notice</ul>
 <ul>Site Map</ul>
 <ul></ul><br>

    </div>

<div class="c2">
    <form action="contact.php" method="post">
        <b>Name</b>*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" class="f2" name="name" pattern="[A-Za-z]{1,15}[ ][A-Za-z]{1,15}" title="Invalid Name"/>
        <span class="error"><?php echo $nameErr;?></span> 
		<br><br>
		
        <b>Email</b>*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" class="f2" name="email" placeholder="anyone@example.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" 
		title="Invalid Email Address"/>
        <span class="error"><?php echo $emailErr;?></span>
		<br><br>
		
        <b>Order<br>Number</b>*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" class="f2" name="order" placeholder="xxxx" pattern="[0-9]{4}" 
		title="Invalid Order Number"/>
		<span class="error"><?php echo $orderErr;?></span>
		<br><br>
		
        <b>My Question</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="question" class="d">
            <option value = "select" selected>select</option>
            <option value = "Order Status">Order Status</option>
            <option value = "Give Feedback" >Give Feedback</option>
            <option value = "Other" >Other </option>
			<span class="error"><?php echo $questionErr;?></span>
        </select>
	    <br><br>
		
        <b>Comment</b>*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <textarea name="com" class="f3"  style="width:400px;"></textarea>
		<span class="error"><?php echo $comErr;?></span>
		
        <input type="submit" value="submit" class="b">
    </form>
    
    </div>

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
</body>
</html>


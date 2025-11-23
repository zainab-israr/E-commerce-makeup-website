<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
  

</head>
<style>
  body {
       overflow-x: hidden; /* Hide horizontal scrollbars */
     }
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
    .b 
	{
    background-color:black;
    border: none;
    color: white;
    padding: 16px 32px;
    margin-left: 500px;
    margin-bottom:20px;
    margin-top:20px;
  }
  .c2{
    max-width: 900px;
    padding: 30px 22px 20px 30px;
    font: 14px Arial, Helvetica, sans-serif;
  }
  .c2 label{
    display: block;
    margin: 0px 0px 15px 0px;
  }
  .c2 label > span{
    width: 100px;
    font-weight: bold;
    float: left;
    padding-top: 8px;
    padding-right: 5px;
  }
  .heading{
           line-height:32px;
           font-family: Futura,Arial,Helvetica,sans-serif;
           font-weight: 700;
           font size: 14px;
           text-transform: uppercase;
           margin-bottom:8px;
       }
       .heading2{
           line-height:12px;
           font-family: Futura,Arial,Helvetica,sans-serif;
           font-weight: 400;
           font size :1rem;
       }

  .c2 .f2{
    width: 40px;
    text-align: left;
  }
  .c2 input.f2, .c2 .d{
    width: 48%;	
  }
  .c2 input.f2, 
  .c2.f2, 
  .c2 .f3, 
   .c2 .d{
    box-sizing: border-box;
   
    border: 1px solid #1f0202;
   
    padding: 9px;
    outline: none;
  }
  .c2 .f2:focus,   
  .c2 .d:focus{
    border: 1px solid rgb(204, 0, 0);
  }

  .c2 input.f3{
    height:500px;
    width: 200px;
    margin-left: -50px;
  }
  .line{
         background-color: white;
      border-top: 1px solid #dbdbdb;
       }
    
</style>
<body>
<?php
// define variables and set to empty values
$nameErr = $emailErr = $addressErr = $countryErr = $codeErr = $phoneErr = $shippingErr= "";
$name = $email = $address = $country = $code = $phone = $shipping = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["email"])) 
  {
    $emailErr = "Email is required";
  } else 
  {    
        $email=test_input();		
        
	}
	
	if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name=test_input();
  }
	
	if (empty($_POST["address"])) {
    $addressErr = "Address is required";
  } else {
    $address=test_input();
  }
  
  if (empty($_POST["country"])) {
    $countryErr = "Country is required";
  } else {
    $country=test_input();
  }
  
	if (empty($_POST["code"])) 
  {
    $codeErr = "Zip Code is required";
  } else 
   {
    
        $code=test_input();		
    }

	
	
	if (empty($_POST["phone"])) 
  {
    $phoneErr = "Phone Number is required";
  } else 
   {
    
        $phone=test_input();		
    }
	 if (!isset($_POST["shipping"])) {
     $shippingErr = "Shipping Method is required";
     } else {
	 $shipping=$_POST["shipping"];
     $shipping=test_input();
     }
}

function test_input() 
{
	 if(($_POST["name"])!=null && ($_POST["email"])!=null && ($_POST["address"])!=null && ($_POST["country"])!=null &&
		  ($_POST["code"])!=null && ($_POST["shipping"])!=null)
		 {
			$_SESSION['nam']=$_POST['name'];
			$_SESSION['email']=$_POST['email'];
			$_SESSION['address']=$_POST['address'];
			$_SESSION['country']=$_POST['country'];
			$_SESSION['code']=$_POST['code'];
			$_SESSION['phone']=$_POST['phone'];
			$_SESSION['shipping']=$_POST['shipping'];
      $id=intval($_GET['Id']);
      header("location:checkout1.php?Id=$id");
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
<br>
<br>
<div style="margin-left:300px;">
<h1 style="margin-bottom:-1%; margin-left:1.85%;"><b>CHECK OUT</b></h1>
<div class="c2">
    <div><h2 style="color:white; background-color:black; padding: 0.875rem 1.25rem; max-width:580px; font-size:90%;">SHIPPING</h2></div>
    <P>EMAIL FOR ORDER CONFIRMATION</P>
    <?php 
    $id=intval($_GET['Id']);
     ?>

    <form action="<?php echo "checkout.php?Id=$id" ?>" method="post">
	
     <label for="email"><span>Email<span class="required">*</span></span>
     <input type="text" class="f2" name="email" placeholder="anyone@example.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" 
		title="Invalid Email Address" /></label>
     <span class="error"><?php echo $emailErr;?></span>
	 
     <P>We will send all communications about your order to this address. <br>
     See our Privacy Notice for details on how your personal information <br>
     is used.</P>
    
     <h3>SHIPPING ADDRESS</h3>
     <label for="name"><span>Name <span class="required">*</span></span>
        <input type="text" class="f2" name="name" pattern="[A-Za-z]{1,15}[ ][A-Za-z]{1,15}" title="Invalid Name" /></label>
		<span class="error"><?php echo $nameErr;?></span>

     <label for="text"><span>Address<span class="required">*</span></span>
        <input type="text" class="f2" name="address" value="" /></label>
		<span class="error"><?php echo $addressErr;?></span>

     <label for="text"><span>Country <span class="required">*</span></span>
            <input type="text" placeholder="UNITED STATES" name="country" class="d"></label>
			<span class="error"><?php echo $countryErr;?></span>

     <label for="text"><span>Zip Code<span class="required">*</span></span>
      <input type="text" class="f2" name="code" placeholder="xxxx" pattern="[0-9]{4}" 
		title="Invalid Order Number" /></label>
       <span class="error"><?php echo $codeErr;?></span>      

     <label for="dropdown"><span>State <span class="required">*</span></span>
        <select name="state" class="d">
            <option value = "select" selected>select</option>
            <option value = "texas">Texas</option>
            <option value = "California">California</option>
			<span class="error"><?php echo $stateErr;?></span>
    </select></label>

     <label for="text"><span>Phone<span class="required">*</span></span>
        <input type="text" class="f2" name="phone" placeholder="xxxx-xxxxxxx" pattern="[0-9]{4}-[0-9]{7}" title="Invalid Phone Number" /></label>
		<span class="error"><?php echo $phoneErr;?></span>
        <br>
      <input type="checkbox" name="" value=""> Use this Address for Billing 
   
     <h3>SHIPPING METHOD</h3>
      <label for="dropdown"><span> <span class=""></span></span>
      <select name="shipping" class="d" value = "select">
        <option value = "Standard shipping">Standard shipping</option>
        <option value = "California">California</option>
		<span class="error"><?php echo $shippingErr;?></span>
      </select></label>
	  
     <input type="submit" value="Checkout" class="b">
</div>    
</form>
<div style="position:absolute;top:200px;left:1000px;border:2px solid #999; width:300px;">
<p class='heading' style='margin-top: 20px;margin-left:5px;'>order summary&nbsp;&nbsp;<a href="viewcart.php"  style='color:#999;'>Edit</a></p>
<hr>
<?php
$sum=0.0;
for($i=0;$i<sizeof($_SESSION['PID']);$i++)
{
  ?>
  <div>
   <img src="<?php echo $_SESSION["pic"][$i] ?>" alt='image' width="100px" height="150px"> 
    <p class='heading2' style='margin-top: 10px;margin-left:5px'><strong><?php echo$_SESSION["name"][$i] ?></strong></p>
    <p class='heading2' style='margin-top: 10px;margin-left:5px'><b>Qty:</b><?php echo $_SESSION["quantity"][$i]?></p>
    <p class='heading2' style='margin-top: 10px;margin-left:5px'><?php echo "$".$_SESSION["price"][$i]?></p>
    <?php $q=floatval( $_SESSION["quantity"][$i]);
   $price=floatval($_SESSION["price"][$i]);
   $mul=$price*$q;
   $sum=floatval($sum)+floatval($mul);
    ?>
  </div>
  <hr>
<?php
} ?>
<p class="heading2" style='margin-top: 40px;margin-left:20px;'> <b> Subtotal:<?php echo " $$sum" ?> </b></p>
</div>




<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
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
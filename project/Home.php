<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>
      Affordable Drugstore Makeup & Skincare Products | e.l.f. Cosmetics
    </title>
    <link href="Images/MainIcon.ico" rel="Icon" focusbale="false" />
    <style>
      body {
       overflow-x: hidden; /* Hide horizontal scrollbars */
     }
     .first {
        background-color: black;
      }
      .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
      }
      .header {
        color: white;
        align-items: center;
        font-family: "Assistant", Arial, Helvetica, sans-serif;
        font-weight: 500;
        font-size: 0.8125rem;
        letter-spacing: 0.05em;
        margin-left: auto;
        margin-right: auto;
      }
      .e {
         background-color: #f2f2f2;
         border: 1px solid #f2f2f2;
         color: black;
         font-family: "Assistant", Arial, Helvetica, sans-serif;
         font-weight: 400;
         font-size: 0.875rem;
         letter-spacing: 0.25em;
         box-shadow: 0 5px 15px 0 rgb(0 0 0 / 20%);
         margin: 0px;
         padding: 10px;
         width: 250px;
         height: 210px;
         margin-left: 540px;
      }
      .l {
         background-color: #f2f2f2;
         border: 1px solid #f2f2f2;
         color: black;
         font-family: "Assistant", Arial, Helvetica, sans-serif;
         font-weight: 400;
         font-size: 0.875rem;
         letter-spacing: 0.25em;
         box-shadow: 0 5px 15px 0 rgb(0 0 0 / 20%);
         margin: 0px;
         padding: 10px;
         width: 260px;
         height: 130px;
         margin-left: 600px;
      }
      .f {
         background-color: #f2f2f2;
         border: 1px solid #f2f2f2;
         color: black;
         font-family: "Assistant", Arial, Helvetica, sans-serif;
         font-weight: 400;
         font-size: 0.875rem;
         letter-spacing: 0.25em;
         box-shadow: 0 5px 15px 0 rgb(0 0 0 / 20%);
         margin: 0px;
         padding: 10px;
         width: 280px;
         height: 280px;
         margin-left: 650px;
      }
      .s{
         background-color: #f2f2f2;
         border: 1px solid #f2f2f2;
         color: black;
         font-family: "Assistant", Arial, Helvetica, sans-serif;
         font-weight: 400;
         font-size: 0.875rem;
         letter-spacing: 0.25em;
         box-shadow: 0 5px 15px 0 rgb(0 0 0 / 20%);
         margin: 0px;
         padding: 10px;
         width: 280px;
         height: 260px;
         margin-left: 715px;
      }
      .t {
         background-color: #f2f2f2;
         border: 1px solid #f2f2f2;
         color: black;
         font-family: "Assistant", Arial, Helvetica, sans-serif;
         font-weight: 400;
         font-size: 0.875rem;
         letter-spacing: 0.25em;
         box-shadow: 0 5px 15px 0 rgb(0 0 0 / 20%);
         margin: 0px;
         padding: 10px;
         width: 280px;
         height: 160px;
         margin-left: 825px;
      }
      ul.link1 {
        list-style: none;
        position: relative;
        left: 100%;
      }
      ul.link2 {
        list-style: none;
      }
      li.link1 {
        display: inline;
        margin: 2px;
        list-style: none;
        padding: 10px;
      }
      li.link2 {
        list-style: none;
        white-space: nowrap;
      }
      a.link1:link,
      a.link1:visited {
        background: transparent;
        cursor: pointer;
        text-decoration: none;
        color: white;
      }
      a.link1:hover,
      a.link1:active {
        color: white;
        text-decoration: underline;
      }
      a.link2:link,
      a.link2:visited {
        background: transparent;
        cursor: pointer;
        color: black;
        text-decoration: none;
      }
      a.link2:hover,
      a.link2:active {
        color: black;
        text-decoration: underline;
      }
      li.hide{
        list-style: none;
      }
      .sticky {
       position: fixed;
       top: 0;
       width: 100%;
       z-index:9999;
      }
      .second{
        width:1536px;
        height:500px;
        }
      .mySlides{
        display:none;
      }
      .second2{
        width:1536px;
        height:500px;
        }
      .mySlides2{
        display:none;
      }
      strong{
        font-weight: 700;
      }
      .third{
        font-size: 20px;
      }
      p.sub-text{
        margin: 10px auto;
      }
      .futura{
         font-family: Futura;
      }
      .text-desc{
        color: black;
        margin: 30px auto;
      }
      .text-center{
        text-align: center;
      }
      .button_primary{
            background: black;
            display: block;
            margin-left: auto;
            margin-right: auto;
            color: white;
            padding: 15px 0;
            width: 250px;
            border: 2px solid white;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 0.08em;
            transition: .2s;
            font-family: "Assistant", Arial, Helvetica, sans-serif;
            font-weight: 400;
            font-size: 0.875rem;
      }
        .button_primary:hover {
            background: white;
            color: black;
            border: 2px solid black;
        }
        .buttonprimary{
            background: #f4f5f4;
            display: block;
            margin-left: auto;
            margin-right: auto;
            color: black;
            padding: 3px 0;
            width: 150px;
            border: 2px solid white;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 0.08em;
            transition: .2s;
            font-family: "Assistant", Arial, Helvetica, sans-serif;
            font-weight: 300;
            font-size: 0.875rem;
      }
        .buttonprimary:hover {
            background: black;
            color: white;
            border: 2px solid black;
        }
        a{
          text-decoration: none;
        }
        .fourth{
        width:300px;
        height:200px;
        margin-left: 500px;
      }
      .grid-container {
      display: grid;
      grid-template-columns: 200px 200px 200px;
      grid-gap: 10px;
      padding: 1px;
    }
    .grid2-container {
      display: grid;
      grid-template-columns: 430px 430px 430px;
      grid-gap: 2px;
      padding: 1px;
    }
    .grid3-container {
      display: grid;
      grid-template-columns: 380px 380px 380px 380px;
      grid-gap: 2px;
      padding: 1px;
    }
    h4.pname{
      font-size: 16px;
      font-weight: 600;
      font-family: 'futura';
      margin-top: 2px;
      margin-left: 158px;
      color: black;
      line-height: 1.8;
      border-bottom: 1px black solid;
      display: inline;
      white-space: nowrap;
    }
    .onImage{
      position: absolute;
      top: 2243px;
      left: 600px;
    }
    .onHeader{
      position: absolute;
      top: 45px;
      left: 30px;
      background-color: black;
      color: white;
      font-weight: 400;
      font-size: 12px;
      letter-spacing: 0.25em;
      text-transform: uppercase;
    }
    .onHeader3{
      position: absolute;
      top: 45px;
      left: 1425px;
      width: 20px;
      height: 20px;
      filter: brightness(0) invert(1);
    }
    mark { 
     background-color: rgb(150, 151, 224);
     color: black;
    }
    #footer-sub{
      background-color: white;
      border-top: 1px solid #dbdbdb;
    }
    #footer-sub h5{
     color:black;
     margin-top: 25px;
    }
   #footer-sub ul{
    list-style: none;
    margin-top: 20px;
  }
   #footer-sub hr{
    margin: 5px;
  }
   #footer-sub ul li{
    margin-left: -38px;
  } 
   #footer-sub a:link {
    text-decoration: none;
    color:black;
    font-size: 12px;
  }

   #footer-sub a:visited {
    text-decoration: none;
    color:black;
  }
  #footer-sub a:hover {
    text-decoration: none;
    color: black;
  }
  #footer-sub a:active {
    text-decoration: none;
    color:black;
  }
  button {
    display: block;
    position: fixed;
    bottom: 30px;
    right: 30px;
    z-index: 99;
    cursor: pointer;
    background: none;
    outline: none;
    width: 50px;
    height: 40px;
    padding: 2px;
}

#myBtn img {
    display: block;
    width: 40px;
    height: 40px;
    margin-bottom: 6px;
  }

    
    </style>

    <script>
      window.onscroll = function() {myFunction()};
      
      var header = document.getElementById("myHeader");
      var sticky = header.offsetTop;
      
      function myFunction() {
        if (window.pageYOffset > sticky) {
          header.classList.add("sticky");
        } else {
          header.classList.remove("sticky");
        }
      }
      </script>

  </head>

  <body>
    <div id="myHeader" class="sticky">
    <div class="container-fluid mt-0 mb-0 first">
      <img src="Images/logo.jpg" alt="e.l.f logo" class="center" />
    </div>
<nav>
    <div class="row header first">
      <div class="col-sm-4 ml-20">
        <ul class="link1">
          <li class="link1">
            <a class="link1" href="#Eyes" data-bs-toggle="collapse">EYES</a>
          </li>
          <li class="link1">
            <a class="link1" href="#Lips" data-bs-toggle="collapse" style="text-shadow: 0 0 20px #fff, 0 0 20px rgb(255 255 255 / 90%), 0 0 15px rgb(255 255 255 / 50%), 0 0 20px rgb(255 255 255)">LIPS</a>
          </li>
          <li class="link1">
            <a class="link1" href="#Face" data-bs-toggle="collapse" >FACE</a>
          </li>
          <li class="link1">
            <a class="link1" href="#Skin" data-bs-toggle="collapse" >SKIN CARE</a>
          </li>
          <li class="link1">
            <a class="link1" href="#Brushes" data-bs-toggle="collapse" >BRUSHES & TOOLS</a>
          </li>
        </ul>
      </div>
    </div>
    <div id="Eyes" class="hide collapse">
            <ul class="link2 e">
              <li class="link2">
                <a class="link2" href="#">All Eyes</a>
              </li>
              <li class="link2">
                <a class="link2" href="#">Eyeshadow</a>
              </li>
              <li class="link2">
                <a class="link2" href="#">Eyesbrows</a>
              </li>
              <li class="link2">
                <a class="link2" href="#">Mascara</a>
              </li>
              <li class="link2">
                <a class="link2" href="#">Eyeliner</a>
              </li>
              <li class="link2">
                <a class="link2" href="#">Eyeshadow Palettes</a>
              </li>
              <li class="link2">
                <a class="link2" href="#">False Eyeleashes</a>
              </li>
              <li class="link2">
                <a class="link2" href="#">Eye Primer</a>
              </li>
              <li class="link2">
                <a class="link2" href="#">Eye Concealer</a>
              </li> 
  </div>
  <div id="Lips" class="hide collapse">
              <ul class="link2 l">
                <li class="link2">
                <?php
                echo "<a class='link2' href='category.php?cat=Lips'>All Lips</a>"
                ?>
                </li>
                <li class="link2">
                <?php
                echo "<a class='link2' href='category.php?cat=Lipstick'>Lipstick</a>"
                ?> 
                </li>
                <li class="link2">
                <?php
                echo "<a class='link2' href='category.php?cat=Lip Gloss'>Lip Gloss</a>"
                ?>
                </li>
                <li class="link2">
                <?php
                echo "<a class='link2' href='category.php?cat=LIP BALMS'>Lip Balms & Treatments</a>"
                ?>
                </li>
                <li class="link2">
                <?php
                echo "<a class='link2' href='category.php?cat=Lip Liner'>Lip Liner</a>"
                ?>
                </li>
    </div>
    <div id="Face" class="hide collapse">
              <ul class="link2 f">
                  <li class="link2">
                    <a class="link2" href="#">All Face</a>
                  </li>
                  <li class="link2">
                    <a class="link2" href="#">Face Primer</a>
                  </li>
                  <li class="link2">
                    <a class="link2" href="#">Foundation</a>
                  </li>
                  <li class="link2">
                    <a class="link2" href="#">Concealer</a>
                  </li>
                  <li class="link2">
                    <a class="link2" href="#">Blush</a>
                  </li>
                  <li class="link2">
                    <a class="link2" href="#">Highlighter</a>
                  </li>
                  <li class="link2">
                    <a class="link2" href="#">Powder</a>
                  </li>
                  <li class="link2">
                    <a class="link2" href="#">Bronzer</a>
                  </li>
                  <li class="link2">
                    <a class="link2" href="#">Setting Spray & Powder</a>
                  </li>
                  <li class="link2">
                    <a class="link2" href="#">Contour</a>
                  </li>
                  <li class="link2">
                    <a class="link2" href="#">Color Correct</a>
                  </li>
                  <li class="link2">
                    <a class="link2" href="#">Palettes</a>
                  </li>
      </div>
      <div  id="Skin" class="hide collapse">
                  <ul class="link2 s">
                    <li class="link2">
                      <a class="link2" href="#">All Skin Care</a>
                    </li>
                    <li class="link2">
                      <a class="link2" href="#">Skin Care Finder</a>
                    </li>
                    <li class="link2">
                      <a class="link2" href="#">Moisturizers</a>
                    </li>
                    <li class="link2">
                      <a class="link2" href="#">Treatments & Serums</a>
                    </li>
                    <li class="link2">
                      <a class="link2" href="#">Sets</a>
                    </li>
                    <li class="link2">
                      <a class="link2" href="#">Masks</a>
                    </li>
                    <li class="link2">
                      <a class="link2" href="#">Cleansers</a>
                    </li>
                    <li class="link2">
                      <a class="link2" href="#">Eye Care</a>
                    </li>
                    <li class="link2">
                      <a class="link2" href="#">Face Mists</a>
                    </li>
                    <li class="link2">
                      <a class="link2" href="#">Makeup Removers</a>
                    </li>
                    <li class="link2">
                      <a class="link2" href="#">Tools</a>
                    </li>
        </div>
        <div id="Brushes" class="hide collapse">
                    <ul class="link2 t">
                      <li class="link2">
                        <a class="link2" href="#">All Brushes & Tools</a>
                      </li>
                      <li class="link2">
                        <a class="link2" href="#">Brush Sets</a>
                      </li>
                      <li class="link2">
                        <a class="link2" href="#">Face Brushes</a>
                      </li>
                      <li class="link2">
                        <a class="link2" href="#">Eye Brushes</a>
                      </li>
                      <li class="link2">
                        <a class="link2" href="#">Brush Care</a>
                      </li>
                      <li class="link2">
                        <a class="link2" href="#">Sponges & Applicators</a>
                      </li>
                      <li class="link2">
                        <a class="link2" href="#">Tools</a>
                      </li>
          </div> 
  </nav> 
  <div class="onHeader">
    <a href="#" style="text-decoration: none; color:white"><span class="futura">e.l.f. is for every eye, lip & face</span></a>
   </div>
    <div class="onHeader3">
      <img src="Images/vector57.svg" alt="shopping bag">
      </div>
      <?php
      if(isset($_SESSION)){
        if(isset($_SESSION["count"])){
    if($_SESSION["count"]>0)
    {
            $q=$_SESSION["count"];
            echo "<div><span style='position:absolute;color:#ffa64d; top: 49px; left: 1430px;'>$q</span></div>";
    }
  }
  }
   ?>
</div>  

<div style="margin-top: 110px;">
  <img src="Images/1.jpg" class="mySlides second">
  <img src="Images/2.jpg" class="mySlides second">
  <img src="Images/3.jpg" class="mySlides second">
  <img src="Images/4.jpg" class="mySlides second">
</div>
<script>
  let myIndex = 0;
  pics();
  
  function pics() {
    let i;
    let x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(pics, 2000); // Change image every 2 seconds
  }
  </script>
  
 <div class="text-desc text-center">
  <p class="sub-text futura">
    <strong>Frost yo’ e.l.f., frost yo’ fam and
      <br class="d-block d-md-none"> 
      frost yo’ friends with holiday gift
      sets<br> that won’t
      freeze your bank account.</strong>
  </p>
  <?php
      echo "<a class='button_primary' style='margin-top: 30PX' href='category.php?cat=Lips'>Shop the gift guide</a>"
  ?>
</div>
</div>

<div class="row" style="margin-left: 135px;">
    <div class="row grid2-container">
      <div class="col-sm-4" style="padding:0">
          <img src="Images/a.jpeg" alt="gift sets" style="width: 400px; height: 150;">
          <h4 class="pname text-center">gift sets</h4>
      </div>
      <div class="col-sm-4" style="padding:0">
        <img src="Images/b.jpg" alt="splurge-worthy gifts" style="width: 400px; height: 150;">
        <h4 class="pname text-center">splurge-worthy gifts</h4>
      </div>
      <div class="col-sm-4" style="padding:0">
        <img src="Images/c.jpg" alt="best-selling gifts" style="width: 400px; height: 150;">
        <h4 class="pname text-center">best-selling gifts</h4>
      </div>
      <div class="col-sm-4" style="padding:0">
        <img src="Images/d.jpg" alt="gifts under $5" style="width: 400px; height: 150;">
        <h4 class="pname text-center">gifts under $5</h4>
      </div>
      <div class="col-sm-4" style="padding:0">
        <img src="Images/e.jpeg" alt="gifts under $10" style="width: 400px; height: 150;">
        <h4 class="pname text-center">gifts under $10</h4>
      </div>
      <div class="col-sm-4" style="padding:0">
        <img src="Images/f.jpg" alt="skincare gifts" style="width: 400px; height: 150;">
        <h4 class="pname text-center">skincare gifts</h4>
      </div>
    </div>
  </div>


<div class="text-center">
  <h2 class="futura" style="margin-top: 90PX ;margin-bottom:40px; font-size: 18;">SHOP BY CATEGORY</h2>
  <div class="row">
      <div class="fourth">
          <div class="row grid-container">
              <div class="col-sm-4" style="padding:0">
                  <a class="buttonprimary">Eyes</a>
              </div>
              <div class="col-sm-4" style="padding:0">
              <?php
               echo "<a class='buttonprimary' style='text-decoration: none;' href='category.php?cat=Lips'>Lips</a>"
              ?>
              </div>
              <div class="col-sm-4" style="padding:0">
                  <a class="buttonprimary">Face</a>
              </div>
              <div class="col-sm-4" style="padding:0">
                  <a class="buttonprimary">Skin Care</a>
              </div>
              <div class="col-sm-4" style="padding:0">
                  <a class="buttonprimary">Brushes</a>
              </div>
              <div class="col-sm-4" style="padding:0">
                  <a class="buttonprimary">Tools</a>
              </div>
          </div>
      </div>
  </div>
</div>
</div>
<div>
   <img src="Images/5.jpg" class="mySlides2 second2">
   <img src="Images/6.jpg" class="mySlides2 second2">
   <img src="Images/7.jpg" class="mySlides2 second2">
   <img src="Images/8.jpg" class="mySlides2 second2">
 </div>
</div>
<script>
  let my_Index = 0;
  f();
  
  function f() {
    let j;
    let y = document.getElementsByClassName("mySlides2");
    for (j = 0; j < y.length; j++) {
      y[j].style.display = "none";  
    }
    my_Index++;
    if (my_Index > y.length) {my_Index = 1}    
    y[my_Index-1].style.display = "block";  
    setTimeout(f, 2000); // Change image every 2 seconds
  }
  </script>
  

<div class="onImage">
  <h1 class="futura text-center" style="font-size: 40px; font-weight: 700;margin-bottom: 2px;">hot for the holidays</h1>
  <p class=" futura text-center" style="font-size: 16px; font-weight: 400; margin-bottom: 2px;"><b>Check these new arrivals off your wishlist.</b</p>
  <?php
      echo "<a class='button_primary text-center' style='width: 200px; height: 50px; margin-top: 2px;' href='category.php?cat=Lips'>SHOP NOW</a>"
  ?>
 </div>

 <div class="text-center" style="margin-top: 150px;">
  <h3 style="margin-bottom:15px;font-size: 2.25rem; font-family: Futura,Arial,Helvetica,sans-serif;"><b>welcome to the beauty-verse</b></h3>
  <p class="futura">Get instant access right here and wow.<br>Where everyone can own their beauty, without compromise.</p>
  <mark><span class="hashtag futura " style="font-family: FuturaLT-BoldOblique"><b><i>#elfingamazing</i></b></span></mark>
</div>


<div class="row" style="margin-top: 40px; margin-left: 20px;">
  <div class="row grid3-container">
    <div class="col-sm-2" style="padding:5px">
        <img src="Images/one.jpg" alt="" style="width: 350px; height: 120;">
    </div>
    <div class="col-sm-2" style="padding: 5px;">
      <img src="Images/two.jpg" alt="" style="width: 350px; height: 120;">
    </div>
    <div class="col-sm-2" style="padding:5px">
      <img src="Images/three.jpg" alt="" style="width: 350px; height: 120;">
    </div>
    <div class="col-sm-2" style="padding:5px">
      <img src="Images/four.jpg" alt="" style="width: 350px; height: 120;">
    </div>
    <div class="col-sm-2" style="padding:5px">
      <img src="Images/five.jpg" alt="" style="width: 350px; height: 120;">
    </div>
    <div class="col-sm-2" style="padding:5px">
      <img src="Images/six.jpg" alt="" style="width: 350px; height: 120;">
    </div>
    <div class="col-sm-2" style="padding:5px">
      <img src="Images/seven.jpg" alt="" style="width: 350px; height: 120;">
    </div>
    <div class="col-sm-2" style="padding:5px">
      <img src="Images/eight.jpg" alt="" style="width: 350px; height: 120;">
    </div>
  </div>
</div>
</div>

<footer>
  <div style="min-height: 250px; margin-top: 60px;" class="footer" id="footer-sub">
      <div class="container">
          <div class="row futura">
              <div class="col-md-4">
                  <h5> <b>HELP </b></h5>
              <ul>
                  <li><a href="FAQS.php">FAQS</a><hr></li>
                  <li><a href="contact.php">Contact Us</a><hr></li>
                  <li><a href="privacyPolicy.php">Privacy Policy</a><hr ></li>
                  <li><a href="order.php">Order Cancellation</a><hr></li>
                  <li><a href="exchangePolicy.php">Exchange Policy</a><hr></li>               
              </ul>
              </div>
  
               <div class="col-md-4">
                  <h5><b>DISCOVER E.L.F </b></h5>
              <ul>
                  <li><a href="aboutus.php">About Us</a><hr></li>
                  <li><a href="careers.php">Careers</a><hr></li>             
              </ul>
          </div>
  
           <div class="col-md-4">
              <h5><b> SERVICES </b></h5>
              <ul>
                  <li><a href="viewcart.php">View Cart</a><hr></li>         
              </ul>
          </div>
        </div>
       </div>
  </div>
  <div class="futura text-center" style="background-color: black;color: white; margin-top: 10px; margin-bottom: 10pxs; font-size: 12px;">
    <span>© 2021 e.l.f. Cosmetics, Inc. </span>
  </div>
   </footer>
   <button onclick="topFunction()" id="myBtn" style="display: none;"> <img src="Images/up.png" alt="" ></button>
   <script>
   //Get the button
    let mybutton = document.getElementById("myBtn");
   
   // When the user scrolls down 20px from the top of the document, show the button
   window.onscroll = function() {scrollFunction()};
   
   function scrollFunction() {
     if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
       mybutton.style.display = "block";
     } else {
       mybutton.style.display = "none";
     }
   }
   
   // When the user clicks on the button, scroll to the top of the document
   function topFunction() {
     document.body.scrollTop = 0;
     document.documentElement.scrollTop = 0;
   }
   </script>
</body>
</html>

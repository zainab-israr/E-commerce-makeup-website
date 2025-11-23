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
        Careers - Join the Team | e.l.f. Cosmetics
    </title>
    <link href="Images/MainIcon.ico" rel="Icon" focusbale="false" />
    <style>
      body {
       overflow-x: hidden; /* Hide scrollbars */
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
        .buttonprimary{
            background: white;
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
            font-weight: 200;
            font-size: 12px;
            border: 2px solid black;
      }
        .buttonprimary:hover {
            background: black;
            color: white;
            border: 2px solid black;
        }
        a{
          text-decoration: none;
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
    .onHeader2{
      position: absolute;
      top: 46px;
      left: 1380px;
      width:26px;
      height: 26px;
    }
    .onHeader3{
      position: absolute;
      top: 45px;
      left: 1425px;
      width: 20px;
      height: 20px;
      filter: brightness(0) invert(1);
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
    </div>
</div>
<div style="margin-top: 150px;">
<div class="row text-center futura">
    <div class="col-sm-12">
                        <h1 style="line-height: 1em; letter-spacing: .1em;font-family: Futura,Arial,Helvetica,sans-serif;font-size: 50px; font-weight: 700;">JOIN THE TEAM!</h1>
                        <p  style="font-weight: 400;">Learn more about working at e.l.f. and what employment <br>opportunities are available now.</p>
                        <a href="<?php echo "category.php?cat=Lips" ?>" class="buttonprimary" style="margin-top: 10px">View Openings</a> 
                        <p style="margin-top: 10px;">or email <b>hr@elfcosmetics.com</b></p>
    </div>
</div>
</div>

<div style="margin-top: 30px;">
    <img src="Images/brushes-row2.jpg" class="second">  
</div>      


<div class="container blockpad " style="margin-top: 60px;">
    <div class="row">
        <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3 text-center">
            <h3 style="line-height: 1em; letter-spacing: .1em; font-family: Futura,Arial,Helvetica,sans-serif;font-size: 24px; font-weight: 700;">WHO WE ARE</h3>
            <p style="font-size: 12px; font-family: Assistant, Arial, Helvetica, sans-serif;">At e.l.f., we believe in luxury for all – bringing high-quality, cruelty-free beauty products to everyone, everywhere. Born in 2004 as an e-comm business (elfcosmetics.com), we have grown to be a multi-channel brand with national distribution at Target, Walmart, CVS, Ulta, and our very own e.l.f. stores! We use our brand as a platform to engage diverse makeup enthusiasts with innovative products for an extraordinary value, and are proud to be one of the fastest growing cosmetics companies in the United States.</p>
        </div>
    </div>
</div>

<div style="position:relative ; height:250px; background: #f2f2f2; margin-top: 50px;">
    <div class="container text-center" >
        <div class="row" >
            <div class="col-z-12" style="margin-left: 200px;">
                <h3 style="line-height: 1em; letter-spacing: .1em; font-family: Futura,Arial,Helvetica,sans-serif;font-size: 24px; font-weight: 700; margin-top: 90px;" >OUR STRATEGY</h3>
                <p style="line-height: 1em; letter-spacing: .1em; font-family: Assistant, Arial, Helvetica, sans-serif;font-size: 15px; LINE-HEIGHT:24px">Everyone at e.l.f. plays a unique and strategic role. <br>Here are the four planks of our business strategy:</p>
            </div>
        </div>
    </div>
</div>

<div style="position: absolute; top: 990px; ">
    <img src="Images/pink-powder-brush-min.png" alt="" width="750px" height="800px" >
</div>

<div style="margin-top: 50px; margin-left: 50px;">
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-z-12">
                <ul style="list-style:none;">
                    <li><span style="line-height: 1em; letter-spacing: .1em; font-family: Futura, Helvetica Neue, Helvetica, sans-serif;font-size: 30px; LINE-HEIGHT:24px"><b>1.</b></span style="line-height: 1em; letter-spacing: .1em; font-family: Assistant, Arial, Helvetica, sans-serif;font-size: 14px; LINE-HEIGHT:24px">Build an amazing brand</li>
                    <li><span style="line-height: 1em; letter-spacing: .1em; font-family: Futura, Helvetica Neue, Helvetica, sans-serif;font-size: 30px; LINE-HEIGHT:24px"><b>2.</b></span style="line-height: 1em; letter-spacing: .1em; font-family: Assistant, Arial, Helvetica, sans-serif;font-size: 14px; LINE-HEIGHT:24px"> Lead lifecycle innovation in accessible beauty</li>
                    <li><span style="line-height: 1em; letter-spacing: .1em; font-family: Futura, Helvetica Neue, Helvetica, sans-serif;font-size: 30px; LINE-HEIGHT:24px"><b>3.</b></span style="line-height: 1em; letter-spacing: .1em; font-family: Assistant, Arial, Helvetica, sans-serif;font-size: 14px; LINE-HEIGHT:24px"> Continually evolve brand awareness and extend our reach</li>
                    <li><span style="line-height: 1em; letter-spacing: .1em; font-family: Futura, Helvetica Neue, Helvetica, sans-serif;font-size: 30px; LINE-HEIGHT:24px"><b>4.</b></span style="line-height: 1em; letter-spacing: .1em; font-family: Assistant, Arial, Helvetica, sans-serif;font-size: 14px; LINE-HEIGHT:24px"> Drive world-class operations</li>
                </ul>

            </div>
        </div>
    </div>
 </div>
 <div><img class="second" src="Images/powder-swatches.jpg" alt=""  style="margin-top: 15px;"></div>


 <div class="container " style="margin-top: 60px">
    <div class="row">
        <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3 text-center">
            <h3 style="line-height: 1em; letter-spacing: .1em; font-family: Futura,Arial,Helvetica,sans-serif;font-size: 24px; font-weight: 700;">WORKING HERE</h3>
            <p style="font-size: 12px; font-family: Assistant, Arial, Helvetica, sans-serif;">Efficiency and collaboration are the heart and soul of our work ethic, and we're all about inclusiveness – aka, learning together. Our focus on innovation drives everything we do, whether it be developing new cosmetics, skincare, or beauty devices.</p>
        </div>
    </div>
</div
>
<div class="row " style="height:350px; background: #f2f2f2; margin-top: 50px;">
            <div class="col-md-3 text-center " style="padding-left: 50px;" >
                <img src="Images/1-delight.png" alt="Delight Our Consumer" width="100px" height="100px" style="margin-top: 55px;">
                <h4 style="text-transform: uppercase;line-height: 1em; letter-spacing: .1em; font-family: Futura,Arial,Helvetica,sans-serif;font-size: 16px; font-weight: 700;">Delight Our Consumer</h4>
                <p style="font-size: 15px; font-family: Assistant, Arial, Helvetica, sans-serif;">Our consumer inspires and informs us. They are the reason we’re here, and at the heart of everything we do.</p>
            </div>
            <div class="col-md-3 text-center" style="padding-left: 50px;">
                <img src="Images/2-right-thing.png" alt="Do the Right Thing" width="100px" height="100px" style="margin-top: 55px;">
                <h4 style="text-transform: uppercase;line-height: 1em; letter-spacing: .1em; font-family: Futura,Arial,Helvetica,sans-serif;font-size: 16px; font-weight: 700;">Do the Right Thing</h4>
                <p style="font-size: 15px; font-family: Assistant, Arial, Helvetica, sans-serif;">We lead with honesty, integrity, and respect. Doing the right thing has defined how we have operated since the start.</p>
            </div>
            <div class="col-md-3 text-center" style="padding-left: 50px;">
                <img src="Images/3-together.png" alt="Work Together to Win" width="100px" height="100px" style="margin-top: 55px;">
                <h4 style="text-transform: uppercase;line-height: 1em; letter-spacing: .1em; font-family: Futura,Arial,Helvetica,sans-serif;font-size: 16px; font-weight: 700;">Work Together to Win</h4>
                <p style="font-size: 15px; font-family: Assistant, Arial, Helvetica, sans-serif;">We treat each other with dignity and kindness. We support and leverage each other’s strengths to help the team succeed.</p>
            </div>
            <div class="col-md-3 text-center " style="padding-left: 50px;">
                <img src="Images/4-excellence.png" alt="Execute with Excellence" width="100px" height="100px" style="margin-top: 55px;">
                <h4 style="text-transform: uppercase;line-height: 1em; letter-spacing: .1em; font-family: Futura,Arial,Helvetica,sans-serif;font-size: 16px; font-weight: 700;">Execute with Excellence</h4>
                <p style="font-size: 15px; font-family: Assistant, Arial, Helvetica, sans-serif;">Consumers know us by what they see, touch and experience. We know execution matters and we’re passionate about every beautiful detail.</p>
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

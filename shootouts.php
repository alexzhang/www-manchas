<?php
if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off") {
  $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  header('HTTP/1.1 301 Moved Permanently');
  header('Location: ' . $redirect);
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Manchas the Jaguar</title>
  <meta name="description" content="oh no">
  <meta name="author" content="Manchas the Jaguar">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Rock+Salt" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/x-icon" href="favicon.ico">

  <!-- Image Style
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <style>
  img.sphoto {
    /* Just in case there are inline attributes */
    width: 100% !important;
    height: auto !important;
  }
  </style>

</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">

    <div class="row" style="margin-top: 8%">
      <div class="eight columns u-pull-right">
        <h1>Shootouts</h1>
        <p>It&rsquo;s wild.</p>

        <h2 style="font-size: 1.5em"><a href="https://twitter.com/ChatahSpots" style="text-decoration:none;color:inherit">Chatah</a></h2>
        <div class="row">
          <div class="row" style="padding:7% 0;background-color:black;margin-bottom:1.2em"><a href="/s/p/2017/DSC02371d.jpg"><img src="/s/t/thumb-23ecb192-a221-446b-9214-3a390fb1b2d2.jpg" alt="DSC02371d.jpg" class="sphoto"></a></div>
          <div class="row" style="padding:7% 0;background-color:black"><a href="/s/p/2017/JRZ_0634Eu.jpg"><img src="/s/t/thumb-bd81c0b9-ac03-4e44-84fd-e566e265723e.jpg" alt="JRZ_0634Eu.jpg" class="sphoto"></a></div>
        </div>

        <h2 style="font-size: 1.5em"><a href="https://twitter.com/dethbox" style="text-decoration:none;color:inherit">Deth</a></h2>
        <div class="row">
          <div class="six columns"><a href="/s/p/2017/photo_2017-12-20_11-34-33.jpg"><img src="/s/p/2017/photo_2017-12-20_11-34-33.jpg" alt="photo_2017-12-20_11-34-33.jpg" class="sphoto"></a></div>
          <div class="six columns"><a href="/s/p/2017/JRZ_0808.jpg"><img src="/s/t/thumb-ece29957-c4ed-405a-b4ab-15dd390de9b8.jpg" alt="JRZ_0808.jpg" class="sphoto"></a></div>
        </div>

      </div>

      <div class="three columns">
        <img id="avi" src="images/icon.jpg" alt="Manchas Logo">
        <nav>
          <h2 class="menu">Navigation</h2>
          <a class="menu button" href="/">Home</a>
          <a class="menu button" href="refsheet">Refsheet</a>
          <a class="menu button" href="gallery">Gallery</a>
          <a class="menu button button-primary" href="#">Shootouts</a>
          <a class="menu button" href="photos">Photos</a>
          <a class="menu button" href="suitswap">Suit Swap</a>
          <a class="menu button" href="zee">Z</a>
          <a class="menu button" href="conventions">Cons</a>
          <a class="menu button" href="https://twitter.com/Manchvs">Twitter
            <svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.0" width="12" height="12" id="svg2">
              <defs id="defs4" />
              <rect width="5.9999995" height="6" x="1.5" y="4.5" id="rect3170" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:#0066cc;stroke-width:0.99999994;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1" />
              <path d="M 4,2.5 L 5,3.5 L 5.25,4.25 L 2.75,6.5 L 5.5,9.25 L 7.75,6.75 L 8.5,7 L 9.5,8 L 11,6.5 L 11,1 L 5.5,1 L 4,2.5 z" id="path2395" style="fill:#0066ff;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
              <path d="M 6,2 L 10,2 L 10,6 L 9.5,6.75 L 8.25,4.75 L 5.25,8 L 4,6.75 L 7.25,3.75 L 5.25,2.5 L 6,2 z" id="path2398" style="fill:#ffffff;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
            </svg>
          </a>
        </nav>
      </div>
    </div>

    <footer id="foot" class="row">
      <hr>
      <p><small>&copy; Copyright 2016-<?php echo date('Y'); ?> <a href="http://www.alzhang.com/">Alexander Zhang</a>. All rights reserved.</small></p>
    </footer>

  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>


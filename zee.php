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
  <meta name="description" content="The Z pose">
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

    <script>
    window.twttr = (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0],
        t = window.twttr || {};
      if (d.getElementById(id)) return t;
      js = d.createElement(s);
      js.id = id;
      js.src = "https://platform.twitter.com/widgets.js";
      fjs.parentNode.insertBefore(js, fjs);

      t._e = [];
      t.ready = function(f) {
        t._e.push(f);
      };

      return t;
    }(document, "script", "twitter-wjs"));
  </script>

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/x-icon" href="favicon.ico">

</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">

    <div class="row" style="margin-top: 8%">
      <div class="eight columns u-pull-right">
        <h1>Z</h1>

        <div class="row">
          <blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr">Had a lot of fun with these derps <a href="https://twitter.com/DoktorTheHusky?ref_src=twsrc%5Etfw">@DoktorTheHusky</a> <a href="https://twitter.com/Devleonthewolf?ref_src=twsrc%5Etfw">@Devleonthewolf</a> <a href="https://twitter.com/Randorn?ref_src=twsrc%5Etfw">@Randorn</a> <a href="https://twitter.com/ChatahSpots?ref_src=twsrc%5Etfw">@ChatahSpots</a> <a href="https://twitter.com/AoLun8?ref_src=twsrc%5Etfw">@AoLun8</a> <a href="https://twitter.com/LoboLoc0?ref_src=twsrc%5Etfw">@LoboLoc0</a> <a href="https://twitter.com/nightdragon0?ref_src=twsrc%5Etfw">@nightdragon0</a> <a href="https://twitter.com/Seppokun?ref_src=twsrc%5Etfw">@Seppokun</a> doing things that Asian photobooth does on a normal day to day basis. <a href="https://t.co/V84qbXLws7">pic.twitter.com/V84qbXLws7</a></p>&mdash; RykerHusky | MuddyCon 3.0/ RaithCon 1.0 | BLFC (@RykerHusky) <a href="https://twitter.com/RykerHusky/status/952748556804276224?ref_src=twsrc%5Etfw">January 15, 2018</a></blockquote>
          <blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr">The four stages of becoming an aZn photographer. <br>Inspired by <a href="https://twitter.com/Mowitzer?ref_src=twsrc%5Etfw">@Mowitzer</a> <br>📸<a href="https://twitter.com/RykerHusky?ref_src=twsrc%5Etfw">@RykerHusky</a> <a href="https://t.co/bdKgQiOZiL">pic.twitter.com/bdKgQiOZiL</a></p>&mdash; Chatah (@ChatahSpots) <a href="https://twitter.com/ChatahSpots/status/950200546727624704?ref_src=twsrc%5Etfw">January 8, 2018</a></blockquote>
          <blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr">The lil jag is so professional on photography <a href="https://t.co/b2tz76zOP4">pic.twitter.com/b2tz76zOP4</a></p>&mdash; Alysterwolf (@Alysterwolf) <a href="https://twitter.com/Alysterwolf/status/938213702804885505?ref_src=twsrc%5Etfw">December 6, 2017</a></blockquote>
          <blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr">The image that started it all.<br><br>Reply to this tweet with your best Z&#39;s!<br><br>📸: <a href="https://twitter.com/DoktorTheHusky?ref_src=twsrc%5Etfw">@DoktorTheHusky</a> <a href="https://t.co/fJy9X7OCTG">pic.twitter.com/fJy9X7OCTG</a></p>&mdash; Jaguary 2018 (@Mowitzer) <a href="https://twitter.com/Mowitzer/status/940280039894953984?ref_src=twsrc%5Etfw">December 11, 2017</a></blockquote>
        </div>

      </div>

      <div class="three columns">
        <img id="avi" src="images/icon.jpg" alt="Manchas Logo">
        <nav>
          <h2 class="menu">Navigation</h2>
          <a class="menu button" href="/">Home</a>
          <a class="menu button" href="refsheet">Refsheet</a>
          <a class="menu button" href="gallery">Gallery</a>
          <a class="menu button" href="shootouts">Shootouts</a>
          <a class="menu button" href="photos">Photos</a>
          <a class="menu button" href="suitswap">Suit Swap</a>
          <a class="menu button button-primary" href="#">Z</a>
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

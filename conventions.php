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
  <meta name="description" content="Furry conventions attended by Manchas the Jaguar">
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
        <h1>Conventions</h1>
        <p>I&rsquo;ve been going to furry conventions since March 2017! Here are some interesting moments from these cons.</p>

        <h2 style="font-size: 2.0em">2018</h2>

        <h3 style="font-size: 1.5em">AC</h3>
        
        <h3 style="font-size: 1.5em">FE</h3>
        
        <h3 style="font-size: 1.5em">ANE</h3>

        <h2 style="font-size: 2.0em">2017</h2>

        <h3 style="font-size: 1.5em">MFF</h3>

        <h3 style="font-size: 1.5em">Furpocalypse</h3>

        <h3 style="font-size: 1.5em">Anthrocon</h3>
        <div class="row">
          <blockquote class="twitter-tweet" data-theme="light" data-link-color="#33C3F0"><p lang="en" dir="ltr">Obligatory furrycon poypiyfur shots! 😅<br>Holy crap <a href="https://twitter.com/tallfuzzball">@tallfuzzball</a> you&#39;re tall.<a href="https://twitter.com/hashtag/Anthrocon?src=hash">#Anthrocon</a> <a href="https://twitter.com/hashtag/AC2017?src=hash">#AC2017</a> <a href="https://t.co/MSjYIvW2hu">pic.twitter.com/MSjYIvW2hu</a></p>&mdash; Manchas! 🎉 (@Mowitzer) <a href="https://twitter.com/Mowitzer/status/882629317779492865">July 5, 2017</a></blockquote>
          <blockquote class="twitter-tweet" data-link-color="#33C3F0"><p lang="en" dir="ltr">Thanks to everyone for making my first <a href="https://twitter.com/anthrocon">@Anthrocon</a> such a wonderful experience! It was awesome to meet so many amazing people! 🎉<a href="https://twitter.com/hashtag/AC2017?src=hash">#AC2017</a> <a href="https://t.co/bRoa3smYJQ">pic.twitter.com/bRoa3smYJQ</a></p>&mdash; Manchas! 🎉 (@Mowitzer) <a href="https://twitter.com/Mowitzer/status/881994087137726464">July 3, 2017</a></blockquote>
          <blockquote class="twitter-tweet" data-link-color="#33C3F0"><p lang="en" dir="ltr">It&#39;s <a href="https://twitter.com/MOSFETbah">@MOSFETbah</a>, doing what he does best: being a goat (on a boat)!<a href="https://twitter.com/hashtag/Anthrocon?src=hash">#Anthrocon</a> <a href="https://twitter.com/hashtag/Anthrocon2017?src=hash">#Anthrocon2017</a> <a href="https://t.co/kIksH8SY02">pic.twitter.com/kIksH8SY02</a></p>&mdash; Manchas! 🎉 (@Mowitzer) <a href="https://twitter.com/Mowitzer/status/880609270508789760">June 30, 2017</a></blockquote>
          <blockquote class="twitter-tweet" data-link-color="#33C3F0"><p lang="en" dir="ltr">Furry boat adventures! 🎉<a href="https://twitter.com/hashtag/Anthrocon?src=hash">#Anthrocon</a> <a href="https://twitter.com/hashtag/Anthrocon2017?src=hash">#Anthrocon2017</a><a href="https://twitter.com/GatewayClipper">@GatewayClipper</a> <a href="https://twitter.com/anthrocon">@anthrocon</a> <a href="https://t.co/ddeygqkzCj">pic.twitter.com/ddeygqkzCj</a></p>&mdash; Manchas! 🎉 (@Mowitzer) <a href="https://twitter.com/Mowitzer/status/880608543547817984">June 30, 2017</a></blockquote>
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
          <a class="menu button" href="zee">Z</a>
          <a class="menu button button-primary" href="#">Cons</a>
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


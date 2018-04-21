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
  <meta name="description" content="Gallery of commissioned artwork, featuring Manchas the Jaguar">
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
  <link rel="stylesheet" href="css/gallery.css">

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
        <h1>Gallery</h1>
        <p>Click on an image to get the original, <b>full-size</b>, file!</p><p>If you wanna repost any of these elsewhere, please just ask me first.</p>

        <div class="row">
          <section id="photos">
            <a href="/s/c/4.png">                                         <img src="/s/t/thumb-3748c708-4e30-42ee-b7e6-06bafaa28413.jpg" alt="4.png"></a>
<?php if (isset($_GET['nsfw'])): ?>
            <a href="/s/c/1.png">                                         <img src="/s/t/thumb-ad97241e-e8b9-4926-81bd-80c91acf9bd7.jpg" alt="1.png"></a>
<?php endif; ?>
            <a href="/s/c/222.png">                                       <img src="/s/t/thumb-e5ac1aba-e49d-4f7c-9fce-e84394154657.jpg" alt="222.png"></a>
            <a href="/s/c/manchasbox.png">                                <img src="/s/t/thumb-c7e14f13-e136-4707-8141-998d9063325c.jpg" alt="manchasbox.png"></a>
            <a href="/s/c/ManchasHeadshot.jpg">                           <img src="/s/t/thumb-2299d934-afac-4c36-bd4d-c92f0f4f26e5.jpg" alt="ManchasHeadshot.jpg"></a>
            <a href="/s/c/manchascomm.png">                               <img src="/s/t/thumb-cf74b26a-779f-4f54-b33e-9a5f12f2be3a.jpg" alt="manchascomm.png"></a>
            <a href="/s/c/Manchas_WebRes.jpg">                            <img src="/s/t/thumb-a4c770d3-28b6-4032-ac42-817ac416a319.jpg" alt="Manchas_WebRes.jpg"></a>
            <a href="/s/c/Manchas%20L.png">                               <img src="/s/t/thumb-d452838e-36a9-4713-b2ff-58c766d0b930.jpg" alt="Manchas%20L.png"></a>
            <a href="/s/c/Photo%20Jun%2022%2C%208%2047%2005%20PM.png">    <img src="/s/t/thumb-535fc22f-1daa-4e25-b42c-8f95f129c8fe.jpg" alt="Photo%20Jun%2022%2C%208%2047%2005%20PM.png"></a>
<?php if (isset($_GET['nsfw'])): ?>
            <a href="/s/c/sLmayCU.jpg">                                   <img src="/s/t/thumb-8156a410-ab72-4eab-8a06-8ec14e9f3228.jpg" alt="sLmayCU.jpg"></a>
<?php endif; ?>
            <a href="/s/c/ManchasBust.png">                               <img src="/s/t/thumb-a3fa8457-4f59-4901-9457-43f6291d3347.jpg" alt="ManchasBust.png"></a>
            <a href="/s/c/26.png">                                        <img src="/s/t/thumb-f4e98c58-cb10-4dee-8b59-14f611473ce3.jpg" alt="26.png"></a>
            <a href="/s/c/249_by_servalien-db9sg7j.png">                  <img src="/s/t/thumb-ad2597ee-e1e6-4ea1-b066-7d43c2e232eb.jpg" alt="249_by_servalien-db9sg7j.png"></a>
            <a href="/s/c/manchas%20flat%20comm.png">                     <img src="/s/t/thumb-7d7f2483-f853-4326-ab23-20d66a94fe9a.jpg" alt="manchas%20flat%20comm.png"></a>
            <a href="/s/c/231.png">                                       <img src="/s/t/thumb-2420c576-9e7a-41b1-8240-6890239824c1.jpg" alt="231.png"></a>
            <a href="/s/c/miconlg.png">                                   <img src="/s/t/thumb-6266d6c5-5f7c-4cc1-bba0-68691f5f24af.jpg" alt="miconlg.png"></a>
            <a href="/s/c/203.png">                                       <img src="/s/t/thumb-db8b7b92-2db0-4346-8896-542221843399.jpg" alt="203.png"></a>
            <a href="/s/c/manchas%20icon.png">                            <img src="/s/t/thumb-49b0d4d2-7586-47b7-94ff-1e28d0225091.jpg" alt="manchas%20icon.png"></a>
            <a href="/s/c/manchas%20temp.png">                            <img src="/s/t/thumb-193047fc-032a-4461-9ec3-a808d2be43c9.jpg" alt="manchas%20temp.png"></a>
            <a href="/s/c/manchashead.png">                               <img src="/s/t/thumb-773e6538-d4db-4849-98e0-1071a7efc8ef.jpg" alt="manchashead.png"></a>
            <a href="/s/c/manchas%20cheebo.png">                          <img src="/s/t/thumb-5c350d31-71cd-4ffa-be83-043349717519.jpg" alt="manchas%20cheebo.png"></a>
          </section>
        </div>
      </div>

      <div class="three columns">
        <img id="avi" src="images/icon.jpg" alt="Manchas Logo">
        <nav>
          <h2 class="menu">Navigation</h2>
          <a class="menu button" href="/">Home</a>
          <a class="menu button" href="refsheet">Refsheet</a>
          <a class="menu button button-primary" href="#">Gallery</a>
          <a class="menu button" href="shootouts">Shootouts</a>
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


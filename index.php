<?php include_once(__DIR__.'/assets/wab/index.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $manifest['lang']; ?>" dir="<?php echo $manifest['dir']; ?>">
  <head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <title><?php echo $manifest['short_name']; ?></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css?v=1.2.1.6">
    <link rel="stylesheet" href="assets/css/animista.css?v=1.2.1">
    <link rel="shortcut icon" href="apple-touch-icon.png" type="image/x-icon"/>

    <meta name="Description" content="<?php echo $manifest['description']; ?>">
    <meta name="theme-color" content="<?php echo $manifest['theme_color']; ?>">
    <!--Phone configures -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link href="assets/manifest.json" rel="manifest">
    <!-- iPhone X, Xs (1125px x 2436px) -->
    <link rel="apple-touch-startup-image" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3)" href="assets/img/apple-launch-1125x2436.png">
    <!-- iPhone 8 Plus, 7 Plus, 6s Plus, 6 Plus (1242px x 2208px) -->
    <link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3)" href="assets/img/apple-launch-1242x2208.png">
    <!-- iPhone 8, 7, 6s, 6 (750px x 1334px) -->
    <link rel="apple-touch-startup-image" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)" href="assets/img/apple-launch-750x1334.png">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
</head>
  <body style="background-color: <?php echo $manifest['theme_color']; ?>;direction: <?php echo $manifest['dir']; ?>;text-align:<?php echo $manifest['text_align']; ?>">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:<?php echo $manifest['navbar_color']; ?>;">
      <a class="navbar-brand" href="javascript:void(0)"><?php echo $manifest['short_name']; ?></a>
      <button class="btn-navbar-menu" onclick="openMenu(this);"><span class="fas fa-bars"></span></button>
    </nav>
    <div class="space-maker"></div>
    <div class="menu-div" id="menu" style="background-color:<?php echo $manifest['navbar_color']; ?>;">
      <button class="btn menu-btn">Button 1</button><br>
      <button class="btn menu-btn">Button 2</button><br>
      <button class="btn menu-btn">Button 3</button><br>
      <button class="btn menu-btn">Button 4</button><br>
    </div>
    <div class="content">
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Success!</strong> Your wab is successfully created :)
      </div>
      <div class="container">
        <div class="card">
          <div class="card-body">this is a simple card that created in wap with bootsrap !</div>
        </div>
        <br>
        <div class="card bg-primary text-white">
          <div class="card-body">Primary card</div>
        </div>
        <br>
        <div class="card bg-success text-white">
          <div class="card-body">Success card</div>
        </div>
        <br>
        <div class="card text-white">
          <div class="card-header bg-dark">inputs example</div>
          <div class="card-body">
            <input type="text" placeholder="username" class="form-control"><br>
            <input type="text" placeholder="password" class="form-control"><br>
            <button class="btn btn-danger">Custom button</button><br>
          </div>
        </div>
      </div>
      <div class="space-maker"></div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js?v=1.2.2"></script>
  </body>
</html>

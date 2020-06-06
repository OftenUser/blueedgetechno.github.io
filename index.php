<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script type="text/javascript" src="js/quote.js"></script>
    <script type="text/javascript" src="js/clocktime.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <meta charset="utf-8">
    <title>Blue's Blog</title>
  </head>
  <body>
    <div id="header">
      <div class="container">
        <a id="header-title" href="index.php">My Blog</a>
        <ul id="header-nav">
          <li>
            <a href="?page=play">Play</a>
          </li>
          <li>
            <a href="?page=about">About</a>
          </li>
          <li>
            <a href="#footer">Contact</a>
          </li>
        </ul>

      </div>
    </div>

    <?php
    if(isset($_GET['page'])){
      if($_GET['page']=="play"){
        require 'play.php';
      }elseif ($_GET['page']=="about") {
        require 'about.php';
      }else {
        require 'blogs.php';
      }
    }else{
      require 'blogs.php';
    }
     ?>

    <div id="footer">
      <div class="container">
        <div class="column">
          <h4 >My Links</h4>
          <p>
            <a href="https://github.com/blueedgetechno" target="_blank" class="fa fa-github"></a>
            <a href="https://github.com/blueedgetechno" target="_blank">github</a><br>
            <a href="https://codeforces.com/profile/blue_edge" target="_blank" class="fa fa-code"></a>
            <a href="https://codeforces.com/profile/blue_edge" target="_blank">codeforces</a><br>
            <a href="https://www.youtube.com/channel/UCozhS3MxzCGrPTffh0mqArw" target="_blank" class="fa fa-youtube"></a>
            <a href="https://www.youtube.com/channel/UCozhS3MxzCGrPTffh0mqArw" target="_blank">youtube</a><br>
            <a href="mailto:blueedgetechno@gmail.com" target="_blank" class="fa fa-envelope"></a>
            <a href="mailto:blueedgetechno@gmail.com">Mail</a><br>
          </p>
        </div>
        <div class="column">
          <h4 style="font-size:17px;color:#f6a623;">Blue Edge : Create some chaos</h4>
          <h5 id="time" style="color:white;margin-top:0px"></h5>
          <p id="quoteline"></p>
          <a href="#" class="fa fa-copyright"></a>
          <a href="#">2020 blue_edge</a>
        </div>
      </div>
    </div>

  </body>
</html>
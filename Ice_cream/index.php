<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <link rel="stylesheet" href="kk.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

  <script>
    function myFunction() {
      var x = document.getElementById("my_nav");
      if (x.className === "one_page_nav") {
        x.className += "_responsive";
      } else {
        x.className = "one_page_nav";
      }
    }
  </script>
  <div class="one_page_nav" id="my_nav">

    <a href="#home" class="home"><img src="Images/logo.png" alt="logo.png"></a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#about_us" class="about_us">About Us</a>
    <a href="#ice_menu" class="menu">Menu</a>
    <a href="#contactus" class="where_menu">Where To Buy</a>

    <ul class="social">
      <li><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
      <li><a href="https://twitter.com/explore"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
      <li><a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
    </ul>
    <!-- <ul id="my_menu" class="left_menu">
      <li class="textmenu"><a href="#home"><img src="Images/logo.png" alt="logo.png"></a></li>
      <li class="col-2 about_menu"><a href="#about_us">About Us</a></li>
      <li id="dot">.</li>
      <li class="col-1 menu"><a href="#ice_menu">Menu</a></li>
      <li id="dot">.</li>
      <li class="col-3 where_menu"><a href="#contactus">Where To Buy</a></li>
      <li>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </li>
    </ul> -->
    <!-- <ul class="social">
      <li><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
      <li><a href="https://twitter.com/explore"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
      <li><a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
    </ul> -->
    <!-- <ul id="my_menu" class="col-8 left_menu">
      <li class="textmenu"><a href="#home"><img src="Images/logo.png" alt="logo.png"></a></li>
      <li class="col-2 about_menu"><a href="#about_us">About Us</a></li>
      <li id="dot">.</li>
      <li class="col-1 menu"><a href="#ice_menu">Menu</a></li>
      <li id="dot">.</li>
      <li class="col-3 where_menu"><a href="#contactus">Where To Buy</a></li>
    </ul>

    <ul class="col-4 social">
      <li><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
      <li><a href="https://twitter.com/explore"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
      <li><a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
    </ul> -->

  </div>
  <div class="body">
    <!-- <img class="col-2 ice_cream" src="Images/ice-cream.png" alt="ice-cream.png">
    <div class="col-6 splashandtext">
      <div class="text">
        Ice cream is a sweetened <br> frozen food typically <br> eaten as a snack or <br> dessert.
      </div>
    </div> -->
    <div id="main">
      <div class="column" id="ice">
        <img src="Images/ice-cream.png" alt="Snow" style="width:100%">
      </div>
      <div class="column" id="splashandtext">
        <div id="text" style="width:100%">
          Ice cream is a sweetened <br> frozen food typically <br> eaten as a snack or <br> dessert.
        </div>
      </div>

    </div>
    <div id="about_us">
      <h1>About us</h1>
      <p>
        "Cream Ice," as it was called, appeared regularly at the table of Charles I during the 17th <br>century.
        France was introduced to similar frozen desserts in 1553 by the Italian Catherine de<br> Medici when she
        became the wife of Henry II of France. It wasn't until 1660 that ice cream <br> was made available to
        the general public.
      </p>
      <div class="menuandtext">
        <h1>Menu</h1>
      </div>
    </div>
  
  </div>
  </div>
</body>

</html>
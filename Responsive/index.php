<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <link rel="stylesheet" href="mm.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script>
    function myFunction() {
      var x = document.getElementById("my_nav");
      if (x.className === "nav") {
        x.className += "_responsive";
      } else {
        x.className = "nav";
      }
    }
  </script>
</head>

<body class="mybody">
  <div class="nav" id="my_nav">

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

  </div>
    <div id="main">
      <div class="column">
        <img src="Images/ice-cream.png" alt="ice image" width="200" height="400">
      </div>
      <div class="splashandtext">
        <div id="text">
          Ice cream is a sweetened <br> frozen food typically <br> eaten as a snack or <br> dessert.
        </div>
      </div>
    </div>
  <div class="about_us" id="about_us">
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
  <div id="ice_menu">
    <?php include("show_menu.php"); ?>
  </div>
  <div id="contactus">
    <h1>Contact us</h1>
    <div id="form_left">
      <img src="Images/map.jpg" alt="computer icon">
    </div>
    <form method="post" action="">
      <?php
      if (isset($_POST['submit'])) {
        $name = $_POST["uname"];
        $mail = $_POST["email"];
        $msg = $_POST["message"];

        if ($name == null || $mail == null || $msg == null) {
          // echo  "<script type=\"text/javascript\">showDialog();<//script>";
          // // <script type="text/javascript">showDialog()</script>"

          echo '<script language="javascript">';
          echo 'alert("Please complete all fields to contact us")';
          echo '</script>';
        } else {
          $sql = "INSERT INTO save_mail (name,mail, msg) VALUES ('$name','$mail','$msg')";
          mysqli_query($miye, $sql);
        }
      }
      ?>

      <div id="form_right">

        <div class="input_container" id="name_field">
          <input placeholder="Name" type="text" name="uname" id="field_name" class='input_field'>
        </div>
        <div class="input_container" id="email_field">
          <input placeholder="Email" type="email" name="email" id="field_email" class='input_field'>
        </div>
        <div class="message">
          <textarea placeholder="Message" name="message" id="message_field"></textarea>
        </div>

        <div class="submit_container">
          <input type="submit" name="submit" value="Submit" id='input_submit'>
        </div>

      </div>
    </form>
  </div>
  <footer>
    <p>© 2016 Ice Cream. All Rights Reserved. </p>
  </footer>
</body>

</html>
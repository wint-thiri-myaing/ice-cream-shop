<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,height=device-height, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="jquary.js"></script> -->

    <!-- <script>
        

        function showDialog() {
            document.getElementById("overlay").style.display = "block";
            document.getElementById("dialog").style.display = "block";
        }

        function hideDialog() {
            document.getElementById("overlay").style.display = "none";
            document.getElementById("dialog").style.display = "none";
        }
    </script> -->
</head>

<body>
    <?php

    include("confs/config.php");
    if ($miye) {
        // echo "Successfully connected db!";
    }
    ?>

    <nav class="one_page_nav" id="my_nav">
        <ul class="left_menu" id="my_menu">
            <li class="textmenu"><a href="#home"><img src="Images/logo.png" alt="logo.png"></a></li>
            <li class="about_menu"><a href="#about_us">About Us</a></li>
            <li class="dot">.</li>
            <li class="menu"><a href="#ice_menu">Menu</a></li>
            <li class="dot">.</li>
            <li class="where_menu"><a href="#contactus">Where To Buy</a></li>
        </ul>

        <ul class="social">

            <li><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="https://twitter.com/explore"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        </ul>
    </nav>
    <div class="body">

        <div id="home">

            <img class="ice_cream" src="Images/ice-cream.png" alt="ice-cream.png">
            <div class="splashandtext">

                <div class="text">
                    Ice cream is a sweetened <br>frozen food typically <br>eaten as a snack or <br>dessert.
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

        <div id="ice_menu" style="margin-top: 110px;">
            <?php include("show_menu.php"); ?>
        </div>

        <div id="contactus">
            <h1>Contact us</h1>

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
                <div id="form_wrapper">
                    <div id="form_left">
                        <img src="Images/map.jpg" alt="computer icon">
                    </div>
                    <div id="form_right">

                        <div class="input_container" id="name_field">
                            <input placeholder="Name" type="text" name="uname" id="field_name" class='input_field'>
                        </div>
                        <div class="input_container" id="email_field">
                            <input placeholder="Email" type="email" name="email" id="field_email" class='input_field'>
                        </div>
                        <div class="message">
                            <textarea placeholder="Message" name="message" id="message_field" cols="13" rows="4"></textarea>
                        </div>

                        <div class="submit_container">
                            <input type="submit" name="submit" value="Submit" id='input_submit'>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>

    <footer>
        <p>© 2016 Ice Cream. All Rights Reserved. </p>
    </footer>
    <!-- <div id="overlay"> </div>
    <div id="dialog">
        <p id="show_messge" style="text-align: center; margin:50px;">Please complete all fields to contact us</p>
        <div class="bottom">
            <input type="submit" value="OK" onclick="hideDialog()">
        </div>
    </div> -->

</body>

</html>
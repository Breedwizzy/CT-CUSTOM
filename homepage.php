<?php
/* Template Name: Homepage */
// Rest of your template code goes here
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blog Site Template</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="https://youtube.com/FollowAndrew">
    <link rel="shortcut icon" href="images/logo.png">

    <?php
    wp_head();
    ?>

</head>

<body>


    <header>
        <div class='nav-updiv'>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<span
                class='call-us'>CALL
                US
                NOW!</span>&emsp;&emsp;&emsp;<span
                class="highlighted">385.154.11.28.35</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<span
                class='log-in'>LOGIN</span>&emsp;&emsp;<span class='sign-out'>SIGNOUT</span>

        </div>
        </br>



        <nav>
            <div class="menu-bar">
                <ul>
                    <li><a href="#">Title1</a></li>
                    <li><a href="#">Title2</a></li>
                    <li><a href="#" class="active">Title3</a>
                        <div class="drop_down">
                            <ul>
                                <li><a href="#">Submenu1</a></li>
                                <li><a href="#">Submenu2</a>
                                    <div class="drop_down2">
                                        <ul>
                                            <li><a href="#">Submenu1</a></li>
                                            <li><a href="#">Submenu2</a></li>
                                            <li><a href="#">Submenu3</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#">Submenu3</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#">Title4</a></li>
                    <li><a href="#">Title5</a></li>
                    <li><a href="#">Title6</a></li>
                    <li><a href="#">Title7</a></li>
                </ul>
            </div>




            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <span class="your-logo">YOUR</span><span class='logo-your'>LOGO</span>
        </nav>

    </header>

    </br></br>
    </br>
    </br>
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    <span class='home-we'>Home / Who We are / </span><span class='connn'>Contact </span>

    </br></br>
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    <span class='connn2'>Contact </span>
    </br>
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    Loren ipsum dolar sit amet, consectetur adipiscing elit. aliauam posuere ipsum nec velit mattis elementum. Cum
    sociis natoque
    </br>
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas eu placerat metus, eget placerat libero.
    </br>
    </br>
    </br>
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    <span class='contact-us-sp'>CONTACT US</span>
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    <span class='reach-us'>REACH US</span>
    <div class="thick-line"></div>
    <div class="second-line"></div>
    </br></br>

    <span class='Coalition-Skills'>
        Coalition Skills Test
        535 La Plata Street<br>
        4200 Argentina<br>

        Phone: 385.154.11.28.35 <br>
        FAx: 385.154.35.66.78
        <br><br><br>
        <div class="social-media">
            <img src="/assets/images/sm-icons-facebook-logo.webp" width="20" alt="" class="image-1" />
            <img src="/assets/images/twitterlogo.png" width="20" alt="" class="image-8" />
            <img src="/assets/images/indeedddddlogo.png" width="20" alt="" class="image-5" />
            <img src="/assets/images/pinterest.png" width="20" alt="" class="image-4" />

        </div>
    </span>

    <div class='inputtttt'>
        <form action="your_server_script.php" method="post">
            <input type="text" id="myText1" name="myText"></br>
            <input type="text" id="myText2" name="myText"> <input type="text" id="myText3" name="myText"></br>
            <input type="text" id="myText4" name="myText"></br></br>
            <input type="submit" id='submit-bb' value="Submit">
            </br></br></br></br>
        </form>
    </div>
    </br></br></br></br>



    </div>

    <?php
    wp_footer();
    ?>


    <script type='text/javascript'>

        function myFunction() {
            var navbar = document.getElementById('navul-id');
            navbar.classList.toggle('show');
        }

    </script>


</body>

</html>
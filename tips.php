<!DOCTYPE html>
<html lang="en">
<head>
    <title>Money Up</title>
    <?php
    include('login/config.php');
    include('login/session.php');
    $userDetails = $userClass->userDetails($session_uid);
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="images/favicon.ico"/>
    <style>
        .alogo {
            background-color: #76b852; /* Blauw als image niet laad */
            background-image: url("images/advisor.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: #ffffff;
        }

        .navbar {
            margin-bottom: 0;
            background-color: #76b852;
            z-index: 9999;
            border: 0;
            font-size: 12px !important;
            line-height: 1.42857143 !important;
            letter-spacing: 4px;
            border-radius: 0;
        }

        .login {
            margin-bottom: 0;
            background-color: #76b852;
            z-index: 9999;
            border: 0;
            font-size: 12px !important;
            line-height: 1.42857143 !important;
            letter-spacing: 4px;
            border-radius: 0;
        }

        .navbar li a, .navbar .navbar-brand {
            color: #fff !important;
        }

        .navbar-nav li a:hover, .navbar-nav li.active a {
            color: #76b852 !important;
            background-color: #fff !important;
        }

        .navbar-default .navbar-toggle {
            border-color: transparent;
            color: #fff !important;
        }

        .nav .navbar-nav .navbar {
            font-size: 200px;
        }

        .jumbotron {
            background-color: #76b852;
            color: #fff;
            padding: 100px 25px;
        }

        .container-fluid {
            padding: 60px 50px;
        }

        .logo {
            font-size: 200px;
        }

        @media screen and (max-width: 768px) {
            .col-sm-4 {
                text-align: center;
                margin: 25px 0;
            }
        }

        footer .glyphicon {
            font-size: 20px;
            margin-bottom: 20px;
            color: #76b852;
        }

        button {
            color: #76b852;
        }

        .text2 {
            color: #ffffff;
        }

        .text4 {
            color: #ffffff;
        }

        .icon2 {
            color: #ffffff;
        }

        .icon4 {
            color: #ffffff;
        }
    </style>
    <script>
        // Add scrollspy to <body>
        $('body').scrollspy({target: ".navbar", offset: 50});

        // Add smooth scrolling on all links inside the navbar
        $("#myNavbar").on('click', function (event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {

                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function () {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });

            } // End if

        });
    </script>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <a class="navbar-brand" href="#">MoneyUp</a>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar">
                <li><a href="index.php">OVER ONS</a></li>
                <li><a href="index.php">WAT DOEN WE</a></li>
                <li><a href="index.php">TIPS</a></li>
                <li><a href="index.php">CONTACT</a></li>
            </ul>
            <ul class="nav navbar-bar navbar-right">
                <?php if ($session_uid >= 1) {
                    echo "<ul class=\"nav navbar-nav navbar-right login\">
            <li><a href=\"login/logout.php\">Uitloggen</a></li>
            </ul>";
                }
                ?>
            </ul>
            <?php if ($session_uid >= 1) {
                echo "<ul class=\"nav navbar-nav navbar-right login\">
                <li><a href=\"\"><span class=\"glyphicon glyphicon-user\"></span>Welkom, $userDetails->name</a></li>
            </ul>";
            } else {
                echo "<ul class=\"nav navbar-nav navbar-right login\">
                <li><a href=\"login/index.php\"><span class=\"glyphicon glyphicon-user\"></span> Login</a></li>
            </ul> ";
            }
            ?>
        </div>
    </div>
</nav>
<div class="jumbotron alogo text-center">
    <img src="images/logo.png">
</div>
<div id="content">
    <div id="over" class="container-fluid">
        <div class="container-fluid bg-grey">
            <div class="row">
                <div class="col-sm-8">
                    <h2>Bereken je inkomsten en uitgaven</h2>
                    <h4>Als je je inkomsten en uitaven berekent, kun je een geld-plan opstellen<br> Beschrijf bvb. het limiet voor de dingen die
                        je nodig hebt.</p><br>
                        Voorbeeld:<br>
                        Levensmiddelen: €40p.m.<br>
                        Auto: €270p.m.<br>
                        Woning: €300p.m.<br>
                    </h4>
                        <a href="#">Lees verder ></a>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-eur logo"></span>
                </div>
            </div>
        </div>
    </div>
    <div id="watdoen" class="jumbotron" style="background-color: #76b852;">
        <div class="container-fluid bg-grey">
            <div class="row">
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-resize-small logo icon2"></span>
                </div>
                <div class="col-sm-8 text2">
                    <h2>Betaal niet teveel aan verzekeringen</h2>
                    <h4>Verzekeringen zijn vaak erg duur. Je kan soms 100en euro's per maand kwijt zijn.</h4>
                    <p>Maar waar gaat dit heen?</p>
                    <a href="#">Lees verder ></a>
                </div>
            </div>
        </div>
    </div>
    <div id="tips" class="container-fluid">
        <div class="container-fluid bg-grey">
            <div class="row">
                <div class="col-sm-8">
                    <h2>Tips van jongeren</h2>
                    <h4>Je kunt ook zelf tips uploaden.</h4>
                    <a href="#">Lees verder ></a>
                    <br>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-signal logo"></span>
                </div>
            </div>
        </div>
    </div>
    <div id="contact" class="jumbotron" style="background-color: #76b852">
        <div class="container-fluid bg-grey">
            <div class="row">
                <div class="col-sm-4 icon4">
                    <span class="glyphicon glyphicon-list-alt logo"></span>
                </div>
                <div class="col-sm-8 text4">
                    <h2>Contact</h2>
                    <h4>Iets niet duidelijk of wil je support? Dan kun je via onze contact formulier simpel en snel<br>
                        contact met ons opnemen</h4>
                    <p>Klik op de knop om te beginnen</p><br>
                    <button type="button" onclick="location.href='contact/contact.php';" class="btn btn-default btn-lg">Neem contact op</button>
                </div>
            </div>
        </div>
    </div>
    <div>
</body>
<footer class="container-fluid text-center">
    <a href="#myPage" title="To Top">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <p>Powered by bootstrap, Made by Collin, Jordy, William, Elton, Kishan and Tim at the <a
            href="http://www.dutchinnovationfactory.nl/" title="Dutch Innovation Factory">Dutch Innovation Factory</a>
        for the extreme programming week.
    </p>
</footer>
</html>

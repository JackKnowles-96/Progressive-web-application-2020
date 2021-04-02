<!DOCTYPE html>
<html lang="en">
<?php session_start();?>

<head>
    <!--Meta tags for phone scaling-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Website Title-->
    <title>D&D Codex</title>

    <!--Bootstrap and CSS-->
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="CSS/Style.css">

    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
</head>

<body onload="Initpage()">
    <!--Navbar-->
    <div class="Navbar">
        <nav class="navbar navbar-custom navbar-expand-md">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler"
                aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <img src="Img/Logo.png" width="30" class="d-md-none d-ls-none d-xl-none">
            <div class="collapse navbar-collapse justify-content-center" id="navbarToggler">
                <ul class="navbar-nav">
                    <a class="navbar-brand">
                        <img src="Img/Logo.png" width="30" height="30"
                            class="d-none d-sm-none d-md-inline d-ls-inline d-xl-inline">
                    </a>
                    <li class="nav-item">
                        <a class="nav-link" href="Index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Races</a>
                        <div class="dropdown-menu dropdown-custom" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="Race-Human.php">Human</a>
                            <a class="dropdown-item" href="Race-Elf.php">Elf</a>
                            <a class="dropdown-item" href="Race-Halfling.php">Halfling</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Classes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Items.php">Items</a>
                    </li>
                    <div id="Useraccount">
                        <li class="nav-item">
                            <a class="nav-link" href="User.php"><?php echo($_SESSION["username"]) ?></a>
                        </li>
                    </div>
                    <div id="LoginButton">
                        <li class="nav-item">
                            <a class="nav-link" href="" data-toggle="modal" data-target="#LoginModalID">Login</a>
                        </li>
                    </div>
                    <div id="LogoutButton">
                        <li class="nav-item">
                            <a class="nav-link" href="PHP/logout.php">Logout</a>
                        </li>
                    </div>
                    <div id="InternetIcon">
                        <li class="nav-item">
                            <img src="Img/Offline.png" width="30" height="30"
                                class="d-none d-sm-none d-md-inline d-ls-inline d-xl-inline">
                        </li>
                    </div>
                </ul>
            </div>
        </nav>
    </div>
    <!--Login Modal-->
    <div class="modal fade" id="LoginModalID" tabindex="-1" role="dialog" aria-labelledby="LoginModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="LoginModal">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="PHP/Login.php" method="POST">
                        <p>
                            <Label>Username:</Label>
                            <input type="text" id="UserInput" name="UserInput" />
                        </p>
                        <p>
                            <Label>Password: </Label>
                            <input type="password" id="PassInput" name="PassInput" />
                            <input class="btn btn-custom" type="submit" id="btn" value="Login" />
                        </p>
                        <p>
                            <a href="AccountReg.php">Need an account?</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Content-->
    <div class="jumbotron jumbotron-fluid jumbotron-human">
        <div class="container">
            <div class="row">
                <div class="col-8 col-sm-7 col-md-5 col-ls-4 col-xl-4">
                    <h1 style="color: white; font-family: 'Staatliches', cursive;">Human</h1>
                    <p style="color: white; font-family: 'Staatliches', cursive;">"Humans dont often fit into a
                        single role and as such have
                        unlimited protention."</p>
                </div>
            </div>
        </div>
    </div>
    <div class="contentsHuman">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <h3>Race - Human</h3>
                    <hr class="hr-custom">
                    <p>
                        These were the stories of a restless people who long ago took to the seas and rivers in
                        longboats, first to pillage and
                        terrorize, then to settle. Yet there was an energy, a love of adventure, that sang from every
                        page.
                    </p>
                    <p>
                        Long into the night Liriel read, lighting candle after precious candle. She’d never given much
                        thought to humans, but
                        these stories fascinated her. In these yellowed pages were tales of bold heroes, strange and
                        fierce animals, mighty
                        primitive gods, and a magic that was part and fabric of that distant land.
                    </p>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                    <h3>Human - Traits</h3>
                    <hr class="hr-custom">
                    <p>
                        It’s hard to make generalizations about humans, but your human character has these traits:
                    </p>
                    <p>
                        <b>Ability Score Increase:</b> Your Ability Scores each increase by 1.
                    </p>
                    <p>
                        <b>Age:</b> Humans reach Adulthood in their late teens and live less than a century.
                    </p>
                    <p>
                        <b>Alignment:</b> Humans tend toward no particular Alignment. The best and the worst are
                        found
                        among them.
                    </p>
                    <p>
                        <b>Size:</b> Humans vary widely in height and build, from barely 5 feet to well over 6 feet
                        tall. Regardless of your position in that range, your size is Medium.
                    </p>
                    <p>
                        <b>Speed:</b> Your base walking speed is 30 feet.
                    </p>
                    <p>
                        <b>Languages:</b> You can speak, read, and write Common and one extra language of your
                        choice.
                        Humans typically learn the Languages of other peoples they deal with, including obscure
                        dialects. They are fond of sprinkling their Speech with words borrowed from other tongues:
                        Orc
                        curses, Elvish musical expressions, Dwarvish Military phrases, and so on.
                    </p>
                </div>
                <div class="col-xl-12">
                    <hr class="hr-custom">
                </div>
            </div>
        </div>
        <!--Checks-Login-->
        <?php if (isset($_SESSION["username"])) {
        ?>
        <script type="text/javascript">document.getElementById('LoginButton').style.display = 'none';</script>
        <script type="text/javascript">document.getElementById('Useraccount').style.display = 'block';</script>
        <?php
        } else {
        ?>
        <script type="text/javascript">document.getElementById('LogoutButton').style.display = 'none';</script>
        <script type="text/javascript">document.getElementById('Useraccount').style.display = 'none';</script>
        <?php
        }
        ?>
        <!--Bootstrap Javascript-->
        <script src="JS/jquery-3.4.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            crossorigin="anonymous"></script>
        <script src="JS/bootstrap.js"></script>
        <!--Serviceworker and Main Javascript-->
        <script src="main.js"></script>
</body>

</html>
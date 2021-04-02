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
    <!--Page Content-->
    <div class="jumbotron jumbotron-fluid jumbotron-elf">
        <div class="container">
            <div class="row">
                <div class="col-8 col-sm-7 col-md-5 col-ls-4 col-xl-4">
                    <h1 style="color: white; font-family: 'Staatliches', cursive;">Elf</h1>
                    <p style="color: white; font-family: 'Staatliches', cursive;">"Even if an elf is stuck in thier
                        ways, they are always still swift and deadly"</p>
                </div>
            </div>
        </div>
    </div>
    <div class="contentsElf">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <h3>Race - Elf</h3>
                    <hr class="hr-custom">
                    <p>
                        "I have never imagined such beauty existed,” Goldmoon said softly. The day’s march had been
                        difficult, but the reward at
                        the end was beyond their dreams.The companions stood on a high cliff over the fabled city of
                        Qualinost.
                    </p>
                    <p>
                        Four slender
                        spires rose from the city’s corners like glistening spindles, their brilliant white stone
                        marbled with shining silver.
                        Graceful arches, swooping from spire to spire, soared through the air. Crafted by ancient
                        dwarven metalsmiths, they were
                        strong enough to hold the weight of an army, yet they appeared so delicate that a bird lighting
                        on them might overthrow
                        the balance. These glistening arches were the city’s only boundaries; there was no wall around
                        Qualinost. The elven city
                        opened its arms lovingly to the wilderness.
                    </p>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                    <h3>Elf - Traits</h3>
                    <hr class="hr-custom">
                    <p>
                        Your elf character has a variety of natural abilities, the result of thousands of years of elven
                        refinement:
                    </p>
                    <p>
                        <b>Ability Score Increase:</b> Your Dexterity score increases by 2.
                    </p>
                    <p>
                        <b>Age:</b> Although elves reach physical maturity at about the same age as humans, the elven
                        understanding of adulthood goes beyond
                        physical growth to encompass worldly experience. An elf typically claims adulthood and an adult
                        name around the age of
                        100 and can live to be 750 years old.
                    </p>
                    <p>
                        <b>Alignment:</b> Elves love freedom, variety, and self-expression, so they lean strongly toward
                        the gentler aspects of chaos. They value
                        and protect others’ freedom as well as their own, and they are more often good than not. The
                        drow are an exception;
                        their exile into the Underdark has made them vicious and dangerous. Drow are more often evil
                        than not.
                    </p>
                    <p>
                        <b>Size:</b> Elves range from under 5 to over 6 feet tall and have slender builds. Your size is
                        Medium.
                    </p>
                    <p>
                        <b>Speed:</b> Your base walking speed is 30 feet.
                    </p>
                    <p>
                        <b>Languages:</b> You can speak, read, and write Common and Elvish. Elvish is fluid, with
                        subtle intonations and intricate grammar. Elven
                        literature is rich and varied, and their songs and poems are famous among other races. Many
                        bards learn their language
                        so they can add Elvish ballads to their repertoires.
                    </p>
                    <p>
                        <b>Keen Senses:</b> You have proficiency in the Perception skill.
                    </p>
                    <p>
                        <b>Fey Ancestry:</b> You have advantage on saving throws against being charmed, and magic can’t
                        put you to sleep.
                    </p>
                    <p>
                        <b>Trance Elves:</b> don’t need to sleep. Instead, they meditate deeply, remaining
                        semiconscious, for 4 hours a day. (The Common
                        word for such meditation is “trance.”) While meditating, you can dream after a fashion; such
                        dreams are actually mental
                        exercises that have become reflexive through years of practice. After resting in this way, you
                        gain the same benefit
                        that a human does from 8 hours of sleep.
                    </p>
                </div>
                <div class="col-xl-12">
                    <hr class="hr-custom">
                </div>
            </div>
        </div>
    </div>
    <div class="contentsElf2">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <h3>Wood Elf - Subrace</h3>
                    <hr class="hr-custom d-lg-none d-xl-none">
                    <p>
                        <b>Ability Score Increase:</b> Your Wisdom score increases by 1.
                    </p>
                    <p>
                        <b>Elf Weapon Training:</b> You have proficiency with the longsword, shortsword, shortbow,
                        and longbow.
                    </p>
                    <p>
                        <b>Fleet of Foot:</b> Your base walking speed increases to 35 feet.
                    </p>
                    <p>
                        <b>Mask of the Wild:</b> You can attempt to hide even when you are only lightly obscured by
                        foliage, heavy rain, falling snow,
                        mist, and other natural phenomena.
                    </p>
                </div>
                <div class="col-xl-12 d-lg-none d-xl-none">
                    <hr class="hr-custom">
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <h3>High Elf - Subrace</h3>
                    <hr class="hr-custom d-lg-none d-xl-none">
                    <p>
                        <b>Ability Score Increase:</b> Your Intelligence score increases by 1.
                    </p>
                    <p>
                        <b>Elf Weapon Training:</b> You have proficiency with the longsword, shortsword,
                        shortbow,
                        and longbow.
                    </p>
                    <p>
                        <b>Cantrip:</b> You know one cantrip of your choice from the wizard spell list.
                        Intelligence is your spellcasting ability for it.
                    </p>
                    <p>
                        <b>Extra Language:</b> You can speak, read, and write one extra language of your choice.
                    </p>
                </div>
                <div class="col-xl-12">
                    <hr class="hr-custom">
                </div>
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
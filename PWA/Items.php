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

<body onload="Inititems()">
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
                    <div id="ButtonUpdate">
                        <li class="nav-item">
                            <form action="PHP/UpdateTable.php">
                                <button class="btn btn-custom" type="submit" id="updatebutton1">Update</button>
                            </form>
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
    <!--Jumbo Content-->
    <div class="jumbotron jumbotron-fluid jumbotron-item">
        <div class="container">
            <div class="row">
                <div class="col-8 col-sm-7 col-md-5 col-ls-4 col-xl-4">
                    <h1 style="color: white; font-family: 'Staatliches', cursive;">Items</h1>
                    <p style="color: white; font-family: 'Staatliches', cursive;">Your guide to all sticks that go
                        boom!!!</p>
                </div>
            </div>
        </div>
    </div>
    <!--Page Contents-->
    <!--notification Contents-->
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="alert alert-dark" id="UpdateAlert" role="alert">
                    <form action="PHP/UpdateTable.php">
                        New Item/s have been added!
                        <button class="btn btn-custom" type="submit" id="updatebutton2">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Table Contents-->
    <div class="container">
        <div class="row">
            <div class="table-responsive">
                <table class="table" id="ItemTable">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ItemID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Rarity</th>
                            <th scope="col">Properties</th>
                            <th scope="col">Weight</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <!--Checks-Login-->
    <?php if (isset($_SESSION["username"])) {
        ?>
    <script type="text/javascript">document.getElementById('LoginButton').style.display = 'none';</script>
    <script type="text/javascript">document.getElementById('Useraccount').style.display = 'inline';</script>
    <?php
    } else {
        ?>
    <script type="text/javascript">document.getElementById('LogoutButton').style.display = 'none';</script>
    <script type="text/javascript">document.getElementById('Useraccount').style.display = 'none';</script>
    <?php
    }
    ?>
    <!--Dexie Javascript-->
    <script src="https://unpkg.com/dexie@latest/dist/dexie.js"></script>
    <!--Bootstrap Javascript-->
    <script src="JS/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        crossorigin="anonymous"></script>
    <script src="JS/bootstrap.js"></script>
    <!--Serviceworker and Main Javascript-->
    <script src="main.js"></script>
    <script src="JS/ItemDB.js"></script>
    <!--AJAX-->
    <script>
        var intervalId = window.setInterval(function () {
            $.getJSON('PHP/CheckforUpdate.php', function (Needupdate) {
                if (Needupdate) {
                    document.getElementById('UpdateAlert').style.display = 'block';
                    if (Notification.permission !== 'denied') {    
                        Notification.requestPermission(function (permission) {        
                        if (permission === "granted") {        
                            var notification = new Notification("New Items ready!!");      
                        }});  
                    }
                }
            });
        }, 20000);
    </script>
</body>
</html>
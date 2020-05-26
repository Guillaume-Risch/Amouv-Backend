<?php
    if (isset($_SESSION['popup'])) {

        echo $_SESSION['popup']->display();
        unset($_SESSION['popup']);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Amouv | template guest</title>

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/b18ab37082.js" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/template.css">

    <?php foreach ($listStyles as $key => $value) { ?>
        <link rel="stylesheet" href="./Public/assets/css/<?=$value?>">
    <?php } ?>

    <!-- JS -->
    <script src="./Public/assets/js/templateUser.js"></script>

    <?php foreach ($listStyles as $key => $value) { ?>
        <script src="./Public/assets/js/<?= $value ?>" defer></script>

        <link rel="stylesheet" href="./Public/assets/css/template.css">
    <?php } ?>
</head>



<body id="body" class="preload">
    <div class="navbarOverlay" id="navbarOverlay">
    </div>
    
    <div class="sideBar" id="sideBar">
        <button id="closeSideBarB">
            <i class="fas fa-times"></i>
        </button>
        <div class="topSidebar">
            <p class="mainTitle">
                {Prenom} {Nom}
            </p>
            <p class="secondTitle userSecondTitle">
                {Email}
            </p>
    
            <button class="sideLink">
                <i class="far fa-user-circle"></i>
                <span>
                    Profil
                </span>
            </button>
            <button class="sideLink signOut">
                <i class="fas fa-sign-out-alt"></i>
                <span >
                    Se deconnecter
                </span>
            </button>
        </div>
    
        <nav class="nbSideBar">
            <div class="linkContainer">
                <p class="linktitle">
                    Trajet
                </p>
                <a class="sideLink">
                    <i class="fas fa-plus"></i>
                    <span>
                        Créer un trajet
                    </span>
                </a>
                <a class="sideLink">
                    <i class="fas fa-search"></i>
                    <span>
                        Rechercher un trajet
                    </span>
                </a>
            </div>
            <div class="linkContainer">
                <p class="linktitle">
                    Autres
                </p>
                <a class="sideLink">
                    <i class="far fa-copyright"></i>
                    <span>
                        Crédits
                    </span>
                </a>
            </div>
        </nav>
    </div>
    <header>
        <div class="headerContent">
    
            <img src="./Public/assets/images/amouvLogoBlack.svg" alt="AmouvLogo" class="logoHeader">
    
    
            <div class="headerTriggersContainer">
                <div class="signContainer">
                    <a class="userHeaderBtns">
                        <i class="fas fa-home"></i>
                    </a>
                    
                    <button class="userHeaderBtns" id="notificationButton">
                        <i class="fas fa-bell"></i>
                        <span class="notifActive"></span>
                    </button>
                    <div class="notificationsContainer">
    

                        <div class="notificationsList" id="notificationList">
                            <div class="l">

                                <a href="">
                                    <div class="notification notread">
                                        <p class="messageNotif">
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                                        </p>
                                        <p class="dateNotif">
                                            le xx/xx/xx
                                            à Xx:XX
                                        </p>
                                    </div>
                                    <div class="notification ">
                                        <p class="messageNotif">
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                                        </p>
                                        <p class="dateNotif">
                                            le xx/xx/xx
                                            à Xx:XX
                                        </p>
                                    </div>
                                    <div class="notification ">
                                        <p class="messageNotif">
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                                        </p>
                                        <p class="dateNotif">
                                            le xx/xx/xx
                                            à Xx:XX
                                        </p>
                                    </div>
                                    <div class="notification ">
                                        <p class="messageNotif">
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                                        </p>
                                        <p class="dateNotif">
                                            le xx/xx/xx
                                            à Xx:XX
                                        </p>
                                    </div>
                                    <div class="notification ">
                                        <p class="messageNotif">
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                                        </p>
                                        <p class="dateNotif">
                                            le xx/xx/xx
                                            à Xx:XX
                                        </p>
                                    </div>
                                    <div class="notification ">
                                        <p class="messageNotif">
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                                        </p>
                                        <p class="dateNotif">
                                            le xx/xx/xx
                                            à Xx:XX
                                        </p>
                                    </div>
                                    <div class="notification ">
                                        <p class="messageNotif">
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                                        </p>
                                        <p class="dateNotif">
                                            le xx/xx/xx
                                            à Xx:XX
                                        </p>
                                    </div>
                                    <div class="notification ">
                                        <p class="messageNotif">
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                                        </p>
                                        <p class="dateNotif">
                                            le xx/xx/xx
                                            à Xx:XX
                                        </p>
                                    </div>
                                    <div class="notification ">
                                        <p class="messageNotif">
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                                        </p>
                                        <p class="dateNotif">
                                            le xx/xx/xx
                                            à Xx:XX
                                        </p>
                                    </div>
                                    <div class="notification ">
                                        <p class="messageNotif">
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                                        </p>
                                        <p class="dateNotif">
                                            le xx/xx/xx
                                            à Xx:XX
                                        </p>
                                    </div>
                                </a>
    
                            </div>
                        </div>

                    </div>
                    <a class="userHeaderBtns" href="">
                        <i class="fas fa-user-circle"></i>
                    </a>
                    <a class="userHeaderBtns" href="">
                        <i class="fas fa-plus"></i>
                    </a>
                    <a class="userHeaderBtns" href="">
                        <i class="fas fa-search"></i>
                    </a>
                </div>
    
                <button class="menuTrigger" id="menuTrigger">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </header>


    <?= $content; ?>

    <footer>
        <img src="./Public/assets/images/amouvLogoWhite.svg" alt="AmouvLogo" class="footerLogo">
        <div class="snContainer">
            <a href="" class="socialNetwork">
                <i class="fab fa-twitter-square"></i>
            </a>
            <a href="" class="socialNetwork">
                <i class="fab fa-facebook-square"></i>
            </a>
            <a href="" class="socialNetwork">
                <i class="fab fa-instagram-square"></i>
            </a>
        </div>
    </footer>

</body>
</html>
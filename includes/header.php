<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="UTF-8">
        <title>Prototyp</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/main.css" type="text/css">
        <link rel="stylesheet" href="css/header.css" type="text/css">
        <link rel="stylesheet" href="css/footer.css" type="text/css">
        <link rel="stylesheet" href="css/chatbot.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </head>
    <body>
    <div class="overlay" id="overlay"></div>
    <header>
    <div class="search-mobile" id="search-mobile">
        <label for="search">Sök</label>
        <input type="text" id="search" placeholder="Skriv in ett sökord">
        <button><i class="fas fa-search headIcon" placeholder="Skriv in ett sökord"></i></button>
    </div>
    <div class="mobile-header">
        <button class="hamburger-menu" id="hamburger-menu">&#9776;</button>
        <img src="Preem_Primarlogotyp/Digital/PNG/Preem_logo_RGB.png" alt="logo" class="logo">
        <button class="search-btn" id="search-btn">&#8981;</button>
    </div>
    <div class="nav">
        <div class="top-nav">
            <nav class="top-left-nav">
                <a href="#one">Privat</a>
                <a href="#two">Företag</a>
                <a href="#three">Om Preem</a>
            </nav>
            <div class="top-right-nav">
                <a href="#" class="nav-item">
                    <i class="far fa-heart headIcon"></i>Hållbarhet
                </a>
                <a href="#" class="nav-item">
                    <i class="far fa-comment-alt headIcon"></i>Kontakta oss
                </a>
                <a href="#" class="nav-item">
                    <i class="fas fa-globe headIcon"></i>Language
                </a>
                <a href="#" class="nav-item">
                    <i class="far fa-user headIcon"></i>Logga in
                </a>
                <div class="search">
                    <label for="search">Sök</label>
                    <input type="text" id="search">
                    <button><i class="fas fa-search headIcon" placeholder="Skriv in ett sökord"></i></button>
                </div>
            </div>
        </div>
        <div class="bottom-nav">
            <nav class="bot-nav" id="bot-nav-one">
                <a href="#">Hitta station</a>
                <a href="#">Drivmedel</a>
                <a href="#">I butiken</a>
                <a href="#">Hyrsläp</a>
                <a href="#">Kort & förmåner</a>
                <a href="#">För bilen</a>
                <a href="#">Presentkort</a>
            </nav>
            <nav class="bot-nav" id="bot-nav-two">
                <a href="#">Produkter & Tjänster</a>
                <a href="#">Våra kort</a>
                <a href="#">Listpriser</a>
                <a href="#">Hitta station</a>
                <a href="#">Återförsäljare</a>
                <a href="#">Kund hos oss</a>
            </nav>
            <nav class="bot-nav" id="bot-nav-three">
                <a href="#">Om oss</a>
                <a href="#">Hållbarhet</a>
                <a href="#">Press & nyheter</a>
                <a href="#">Karriär</a>
                <a href="#">Finansiellt</a>
                <a href="#">Insikt & Kunskap</a>
                <a href="#">Personuppgifter</a>
            </nav>
        </div>
    </div>
    <!-- Mobile menu container -->
    <div class="mobile-menu" id="mobile-menu">
       <button class="hamburger-menu-close" id="hamburger-menu-close">&#128940;</button>
        <nav class="top-left-nav-mobile">
            <a href="#one">Privat</a>
            <a href="#two">Företag</a>
            <a href="#three">Om Preem</a>
        </nav>
        
        <!-- Bottom-nav -->
        <div class="ham-bottom-nav">
            <nav class="bot-nav-mobile" id="bot-nav-mobile-one">
                <a href="#">Hitta station</a>
                <a href="#">Drivmedel</a>
                <a href="#">I butiken</a>
                <a href="#">Hyrsläp</a>
                <a href="#">Kort & förmåner</a>
                <a href="#">För bilen</a>
                <a href="#">Presentkort</a>
            </nav>
            <nav class="bot-nav-mobile" id="bot-nav-mobile-two">
                <a href="#">Produkter & Tjänster</a>
                <a href="#">Våra kort</a>
                <a href="#">Listpriser</a>
                <a href="#">Hitta station</a>
                <a href="#">Återförsäljare</a>
                <a href="#">Kund hos oss</a>
            </nav>
            <nav class="bot-nav-mobile" id="bot-nav-mobile-three">
                <a href="#">Om oss</a>
                <a href="#">Hållbarhet</a>
                <a href="#">Press & nyheter</a>
                <a href="#">Karriär</a>
                <a href="#">Finansiellt</a>
                <a href="#">Insikt & Kunskap</a>
                <a href="#">Personuppgifter</a>
            </nav>
        </div>
        <div class="top-right-nav-mobile">
            <a href="#" class="nav-item">
                <i class="far fa-heart headIcon"></i>Hållbarhet
            </a>
            <a href="#" class="nav-item">
                <i class="far fa-comment-alt headIcon"></i>Kontakta oss
            </a>
            <a href="#" class="nav-item">
                <i class="fas fa-globe headIcon"></i>Language
            </a>
            <a href="#" class="nav-item">
                <i class="far fa-user headIcon"></i>Logga in
            </a>
        </div>
    </div> 
</header>
        <main>
            <?php include "includes/sidebar.php" ?>
            <div class="main"> 
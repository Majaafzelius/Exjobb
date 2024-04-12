<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="UTF-8">
        <title>Prototyp</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/main.css" type="text/css">
        <link rel="stylesheet" href="css/header.css" type="text/css">
        <link rel="stylesheet" href="css/footer.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </head>
    <body>
        <header> 
            <section>
                <img src="Preem.png" alt="logo" class="logo">
            </section>
            <section class="nav">
                <section class="top-nav">
                    <nav class="top-left-nav">
                        <a href="#one">Privat</a>
                        <a href="#two">Företag</a>
                        <a href="#three">Om Preem</a>
                    </nav>
                    <div class="top-right-nav">
                        <div class="nav-item">
                            <i class="far fa-heart icon"></i>
                            <a href="#">Hållbarhet</a>
                        </div>
                        <div class="nav-item">
                            <i class="far fa-comment-alt icon"></i>
                            <a href="#">Kontakta oss</a>
                        </div>
                        <div class="nav-item">
                            <i class="fas fa-globe icon"></i>
                            <a href="#">Language</a>
                        </div>
                        <div class="nav-item">
                            <i class="far fa-user icon"></i>
                            <a href="#">Logga in</a>
                        </div>
                        <div class="search">
                            <label for="search">Sök</label>
                            <input type="text">
                            <button><i class="fas fa-search icon"></i></button>
                        </div>
                    </div>


                </section>
                
                <section class="bottom-nav">
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
                        <a href="#">Om Oss</a>
                        <a href="#">Hållbarhet</a>
                        <a href="#">Press & nyheter</a>
                        <a href="#">Karriär</a>
                        <a href="#">Finansiellt</a>
                        <a href="#">insikt & Kunskap</a>
                        <a href="#">Personuppgifter</a>
                    </nav>
                </section>
            </section>
            
        </header>
        <main>
            <?php include "includes/sidebar.php" ?>
            <section class="main"> 
<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="UTF-8">
        <title>Prototyp</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/main.css" type="text/css">
        <link rel="stylesheet" href="css/header.css" type="text/css">
        
    </head>
    <body>
        <header> 
            <section>
                <img src="Preem.png" alt="logo" class="logo">
            </section>
            <section class="nav">
            <nav class="top-nav">
        <?php
        // Define an array of bot-nav URLs and their corresponding menu options
        $bot_nav_urls = array(
            '#one' => 'Privat',
            '#two' => 'Företag',
            '#three' => 'Om Preem'
        );

        // Get the current page URL
        $current_url = $_SERVER['REQUEST_URI'];

        // Extract the hash part of the current URL
        $current_hash = parse_url($current_url, PHP_URL_FRAGMENT);

        // Loop through each bot-nav URL and menu option
        foreach ($bot_nav_urls as $url => $option) {
            // Check if the hash part of the current URL matches the bot-nav URL
            if ($current_hash == substr($url, 1)) {
                // Add a class to mark the menu option as active
                echo '<a href="' . $url . '" class="active">' . $option . '</a>';
            } else {
                echo '<a href="' . $url . '">' . $option . '</a>';
            }
        }
        ?>
    </nav>
                <!-- <nav class="top-nav">
                    <a href="#one">Privat</a>
                    <a href="#two">Företag</a>
                    <a href="#three">Om Preem</a>
                </nav> -->
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
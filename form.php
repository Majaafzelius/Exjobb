<?php include "includes/header.php"?>
<h1>Kontaktformulär</h1>
<p>Här kan du mejla vår kundtjänst direkt.</p>
<form>
    <label for="type">Ärendetyp:</label><br>
    <select id="type" class="input">
        <option value="default" disabled selected>Vänligen välj ärendetyp</option>
        <option value="adressandring">Adressändring</option>
        <option value="appar">Appar</option>
        <option value="faktura">Faktura</option>
        <option value="foretagskort">Företagskort</option>
        <option value="kvitto">Kvitto</option>
        <option value="kundportalen">Kundportalen / Mitt preem</option>
        <option value="privatkort">Privatkort</option>
        <option value="produktfraga">Produktfråga</option>
        <option value="stationsfraga">Stationsfråga</option>
        <option value="statistik">Statistik / Miljörapport</option>
        <option value="ovrigt">Övrigt</option>
    </select><br>

    <label for="subject">Ämne:</label><br>
    <input type="text" class="input" name="subject" id="subject"><br>

    <label for="description">Beskriv ditt ärende:</label><br>
    <textarea name="description" class="input" id="description" cols="30" rows="5"></textarea><br>

    <label for="email">Email:</label><br>
    <input type="email" class="input" name="email" id="email"><br>

    <label for="name">Namn:</label><br>
    <input type="text" class="input" name="name" id="name"><br>

    <label for="phonenr">Telefonnummer eller mobil:</label><br>
    <input type="tel" class="input" name="phonenr" id="phonenr"><br>

    <label for="file">Bifoga fil</label><br>
    <input type="file" id="file" name="filename"><br>

    <p class="info"><i>Genom att lämna ditt samtycke nedan godkänner du att Preem AB som personuppgiftsansvarig behandlar dina personuppgifter med ändamålet att hantera ditt ärende. <br> <br>
    Personuppgifterna lämnas inte ut till extern part och kommer att raderas hos Preem AB efter 1 år. Personuppgifterna behandlas med stöd av samtycke som kan dras tillbaka av dig när som helst. Du har rätt att begära tillgång till de personuppgifter som behandlas. Du har även rätt att begära rättelse eller radering av vissa personuppgifter eller begära viss begränsning av behandlingen eller invända mot den. Du har också rätt att få vissa av dina uppgifter överförda till en tredje part i ett maskinläsbart format (s.k. dataportabilitet). Kontakt: ”Dataskyddsombud, Preem AB, 112 80 Stockholm”. E-post: ”dataskyddsombud@preem.se”. Du har rätt att inge klagomål till Integritetsskyddsmyndigheten avseende personuppgiftsbehandlingen.</i></p>
    
    <div class="consent">
        <input type="checkbox" id="consent">
        <label for="consent">Jag samtycker härmed till att Preem AB behandlar mina personuppgifter enligt ovan</label>
    </div>
    <div class="captcha-section">
        <label for="captcha">Vänligen lös CAPTCHA:n nedan:</label>
        <div id="captcha-container">
            <span id="captcha-question"></span>
            <button type="button" onclick="generateCaptcha()">Refresh captcha</button>
        </div>
        <input type="text" id="captcha" required>
    </div>

    <input type="submit" class="send">
</form>
<?php include "includes/footer.php"?>
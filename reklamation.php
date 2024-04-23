<?php include "includes/header.php"?>
<h1>Reklamation</h1>
<p style="font-size: larger;">
    Vi vill självklart att du alltid ska vara nöjd med oss och våra produkter. Men hur mycket vi än anstränger oss så händer det ibland att det blir fel.
</p>
<p>
    Tveka inte att höra av dig om du känner att du har fått fel bemötande, eller om du fått en produkt eller tjänst som inte uppfyller dina förväntningar. Vi lovar att göra allt vi kan för att du ska bli nöjd igen och att felet inte ska upprepas!
</p>
<p>
    Preem AB<br>
    Reklamationer<br>
    112 80 Stockholm<br><br>
    Eller sänd in din reklamation:<br>
    Fyll i dina personuppgifter och kundnummer och berätta kortfattat om vad du vill reklamera så kommer vi att ta kontakt med dig.
</p>
<h2>Reklamation</h2>
<p>
    Fält markerade med * är obligatoriska och måste fyllas i.
</p>
<form>
    <label for="kundnummer">Kundnummer</label><br>
    <input type="text" class="input" name="kundnummer" id="kundnummer"><br>

    <label for="Namn">Namn*</label><br>
    <input type="text" name="Namn" class="input" id="Namn"><br>

    <label for="Adress">Adress</label><br>
    <input type="text" class="input" name="Adress" id="Adress"><br>

    <label for="Postnummer">Postnummer</label><br>
    <input type="text" class="input" name="Postnummer" id="Postnummer"><br>

    <label for="Ort">Ort</label><br>
    <input type="text" class="input" name="Ort" id="Ort"><br>

    <label for="email">E-post*</label><br>
    <input type="text" class="input" name="email" id="email"><br>

    <label for="Mobil">Mobil</label><br>
    <input type="text" name="Mobil" class="input" id="Mobil"><br>

    <label for="date">Datum för händelsen (YYYYMMDD)*</label><br>
    <input type="text" class="input" name="date" id="date"><br>

    <label for="place">Plats för händelsen*</label><br>
    <input type="text" class="input" name="place" id="place"><br>

    <label for="description">Beskriv händelsen*</label><br>
    <textarea class="input" name="description" id="description"></textarea><br>

    <p class="info"><i>Genom att lämna ditt samtycke nedan godkänner du att Preem AB som personuppgiftsansvarig behandlar dina personuppgifter med ändamålet att hantera ditt ärende. <br> <br>
    Personuppgifterna lämnas inte ut till extern part och kommer att raderas hos Preem AB efter 1 år. Personuppgifterna behandlas med stöd av samtycke som kan dras tillbaka av dig när som helst. Du har rätt att begära tillgång till de personuppgifter som behandlas. Du har även rätt att begära rättelse eller radering av vissa personuppgifter eller begära viss begränsning av behandlingen eller invända mot den. Du har också rätt att få vissa av dina uppgifter överförda till en tredje part i ett maskinläsbart format (s.k. dataportabilitet). Kontakt: ”Dataskyddsombud, Preem AB, 112 80 Stockholm”. E-post: ”dataskyddsombud@preem.se”. Du har rätt att inge klagomål till Integritetsskyddsmyndigheten avseende personuppgiftsbehandlingen.</i></p>
    
    <div class="consent">
        <input type="checkbox" id="consent">
        <label for="consent">Jag samtycker härmed till att Preem AB behandlar mina personuppgifter enligt ovan</label>
    </div> <br>
    <input type="submit" class="send">
</form>
<?php include "includes/footer.php"?>
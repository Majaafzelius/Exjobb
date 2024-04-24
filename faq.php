<?php include "includes/header.php" ?>
    <h1>Vanliga frågor och svar</h1>
    <form method="get">
        <label for="search-input">Sök</label>
        <input type="text" id="search-input" placeholder="Sök efter frågor..." oninput="filterQuestions()">
    </form> 
    <h2 class="faq-category" data-category="category1">Företagskund</h2>
    <div class="faq-list" data-category="category1">
        <h3 class="faq"><span class="icon">&#128934;</span>Hur anmäler jag en adressändring?</h3>
        <p class="answer">För att göra en adressändring behöver du anmäla det till oss genom att fylla i det här formuläret. Obs: Gäller det personalkort behöver vi ditt kortnummer eller fakturanummer för att uppdatera din nya adress.</p>
        <h3 class="faq"><span class="icon">&#128934;</span>Varför fungerar inte mitt företagskort i parkeringsautomater?</h3>
        <p class="answer">Fler och fler parkeringsbolag tar bort möjligheten att betala med drivmedelskort i terminalerna, dels eftersom det är en specialhantering och dels för att det har förekommit omfattande bedrägerier. Fler och fler kunder väljer även andra alternativ för parkering än att betala med drivmedelskortet. Detta tillsammans gör att Preem inte har valt att få våra chipkort accepterade i parkeringsbolagens terminaler. Du som kund behöver därför välja andra betalningsalternativ.</p>
        <h3 class="faq"><span class="icon">&#128934;</span>Jag har fått ett kravbrev och betalat men korten går fortfarande inte att använda. Vad gör jag?</h3>
        <p class="answer">Är du Privatkund (Preem privatkort eller Preem Mastercard) kontaktar du Ikanos kundtjänst på telefon 0476-58 71 40 eller preem@ikano.se.
                            Är du Företagskund (Preem företagskort eller Såifakort) kontaktar du vår kreditavdelning på telefon 010-450 16 70 (vardagar 8.00-16.00) för att få en återöppning prövad av oss.
                            Kravavgiften om 130 kr och eventuellt dröjsmålsränta kommer att påföras nästkommande faktura.</p>
        <h3 class="faq"><span class="icon">&#128934;</span>Jag vill höja limiten på mitt konto.</h3>
        <p class="answer"><b>Privatkunder</b>Har du Preem Mastercard eller Preem privatkort kontakta IKANO BANK på telefonnummer 0476-58 71 40 eller mail PreemMastercard@ikano.se
                            <b>Företagskunder</b>
                            Hör av dig på mejl kredit@preem.se eller ring 010-450 16 70. Uppge ditt kundnummer/organisationsnummer för snabbare hantering.</p>
        <h3 class="faq"><span class="icon">&#128934;</span>Jag vill ansöka om Preem Truckkort (f.d. Såifa).</h3>
        <p class="answer">Gå till vår Preem Truck-sida och följ anvisningarna.</p>
        <h3 class="faq"><span class="icon">&#128934;</span>Jag vill ansöka om Preem Transport-kort</h3>
        <p class="answer">Gå till vår Preem Transport-sida och följ anvisningarna.</p>
        <h3 class="faq"><span class="icon">&#128934;</span>Jag vill ansöka om Företagskort.</h3>
        <p class="answer">Gå till våra Företagskort och följ anvisningarna.</p>
        <h3 class="faq"><span class="icon">&#128934;</span>Hur gör jag för att få PDF-faktura via mejl?</h3>
        <p class="answer">Har du idag en gemensam faktura för samtliga kort så behöver du meddela oss vilken mejladress du önskar få fakturan till.
                            Har du en faktura per kort måste alla kortinnehavare komma in med sin mejladress dit fakturan ska mejlas.
                            Detta anmäler du enkelt via det här formuläret.
                            För mer betalningsalternativ gå till digitala fakturaalternativ.
                            Har du Preem Privatkort eller Preem Mastercard, läs mer här.</p>
        <h3 class="faq"><span class="icon">&#128934;</span>Jag har råkat betala in min faktura två gånger (felaktigt inbetald faktura), hur gör jag för att få tillbaka pengarna?</h3>
        <p class="answer">Har du frågor gällande betalningar, vänligen ta kontakt med vår reskontra på: 010-450 16 81 (vardagar 9.00-11.30) eller mejla: reskontra@preem.se.</p>
        <h3 class="faq"><span class="icon">&#128934;</span>Jag vill ändra min Pinkod/ kan jag välja pin kod?</h3>
        <p class="answer">Det går inte att välja eller ändra pinkod, tyvärr. Den skapas slumpmässigt.</p>
        <h3 class="faq"><span class="icon">&#128934;</span>Jag behöver en ny pinkod</h3>
        <p class="answer">Kopia på koden går endast att skicka till kort som fått en slump mässig vald kod, har du ett kort med en egen vald kod så går det ej att beställa en kopia på koden utan då måste ett nytt kort med en ny kod beställas. Ta kontakt med oss här så hjälper vi dig.  </p>
        <h3 class="faq"><span class="icon">&#128934;</span>Jag måste spärra mitt kort.</h3>
        <p class="answer"><b>Preem MasterCard</b>
                            Telefon: 0476-58 71 40
                            Helgfria vardagar 08:00-17:00 (spärr av kort dygnet runt)
                            Du kan även chatta med oss på Mina Sidor
                            <br><b>Preem Privatkort</b>
                            Telefon: 0476-58 71 40
                            Helgfria vardagar 08:00-17:00
                            Övrig tid på Mina Sidor
                            <br><b>Företagskunder</b>
                            Gäller det Företagskort, Transportkort och Såifakort – Logga in på kundportalen så kan du spärra ett kort själv eller ring 020-450 450.</p>
    </div>
    <h2 class="faq-category" data-category="category2">Privatkund</h2>
    <div class="faq-list" data-category="category2">
        <h3 class="faq"><span class="icon">&#128934;</span>Varför får jag inte rabatt när jag blippar mobilen eller klockan?</h3>
        <p class="answer">Digitala plånböcker använder ett annat kortnummer än det som står på kortet vid köpet. Det betyder att även om ditt fysiska kort är anslutet så känner inte våra system igen ditt kort från telefonen. Du behöver använda ditt fysiska kort vid köp för att få din rabatt. Vi jobbar på en lösning där du kan ansluta din telefon och klocka till rabatterna, vi ber om överseende med detta tills problemet är löst.</p>
        <h3 class="faq"><span class="icon">&#128934;</span>Jag har inte fått min rabatt på mitt anslutna bankkort.</h3>
        <p class="answer">När du tankar med ditt anslutna bankkort syns inte rabatten på kvittot. Din rabatt betalas istället ut som en återbetalning på det konto som kortet är kopplat till 1-5 bankdagar efter köpet.</p>
        <h3 class="faq"><span class="icon">&#128934;</span>Jag fick inget kvitto när jag tankade, hur gör jag för att få tag på en kvittokopia?</h3>
        <p class="answer">Det löser du enklast genom att fylla i <a href="#">det här formuläret</a>. För att vi ska kunna hjälpa dig så smidigt som möjligt ber vi dig att du anger korrekta uppgifter så som:
                            <br><br>kortnummer (de 6 första sifforna &#128934; de 4 sista sifforna, ex 123456xxxxxx7891)
                            <br>transaktionsdatum
                            <br>belopp:
                            <br>exakt station.</p>
        <h3 class="faq"><span class="icon">&#128934;</span>Hur hyr jag ett släp?</h3>
        <p class="answer">Du kan boka släp via vår bokningssajt som du hittar här. Vill du komma i kontakt med en specifik station som hyr ut släp, gå till Hitta station.</p>
        <h3 class="faq"><span class="icon">&#128934;</span>Jag vill ansluta mitt bankkort.</h3>
        <p class="answer">Anslut ditt bankkort enkelt via det här <a href="#">formuläret.</a></p>
        <h3 class="faq"><span class="icon">&#128934;</span>Varför har det dragits 1 500-2 000 kronor när jag tankat för mindre?</h3>
        <p class="answer">De svenska bankerna har tillsammans med MasterCard och Visa infört nya krav för hantering av drivmedelsköp på obemannade stationer. Modellen är branschstandard och berör samtliga drivmedelsbolag och kortutgivare i Sverige och inom Europa.
                        <br>Syftet med det nya kravet är att undvika situationer där du som kund råkar tanka för mer än vad som finns på ditt konto och därmed drabbas av övertrassering.
                        <br>När du tankar på en obemmanad station via en kontoautomat skickas en kontroll i realtid till den kortutgivande banken för att se om det finns tillräckligt med pengar på kontot. Upp till ett maximalt belopp om 2 000 kronor. Kortutgivaren svarar sedan tillbaka med att antingen medge tankning upp till hela beloppet eller till ett lägre belopp, vilket sker om saldot på kontot understiger 2 000 kr. För köp med contactless är summan 1 500 kr.
                        <br>När du har tankat färdigt skickar pumpen information om det faktiska tankningsbeloppet till din kortutgivare som då ersätter reservationsbeloppet med det faktiska tankningsbeloppet.
                        <br><br><b>Exempel</b><br>Om du har <b>mer än 2 000 kronor på kontot</b>, men tankar för 700 kronor ska reservationen ändras från 2 000 kr till 700 kr och skillnaden på 1 300 kr bli tillgängligt på ditt konto igen. Du debiteras alltså för köpet i samband med att transaktionen registeras på kortet. Skulle reservationen kvarstå rekommenderar vi att du vänder dig till din kortutgivande bank.
                        <br><br>Om ditt <b>saldo är mindre än 2 000 kr</b> ska du ändå självklart kunna tanka. Då reserveras hela det beloppet och när du är klar med din tankning ska din bank ta bort reservationen och ersätta det med det faktiska belopp du har tankat för. Skulle reservationen kvarstå rekommenderar vi att du vänder dig till din kortutgivande bank.</p>
        <h3 class="faq"><span class="icon">&#128934;</span>Kan jag hyra släp och lämna på annan ort?</h3>
        <p class="answer">Du har möjlighet att hyra envägssläp på utvalda stationer. Du hyr enklast via vår samarbetspartner Brenderup.</p>
    </div>
    <h2 class="faq-category" data-category="category3">Privatappen</h2>
    <div class="faq-list" data-category="category3">
        <h3 class="faq"><span class="icon">&#128934;</span>Varför har min kupong försvunnit?</h3>
        <p class="answer">Alla kuponger har en giltighetstid från det att du hämtar kupongen. Efter detta datum försvinner kupongen automatiskt</p>
        <h3 class="faq"><span class="icon">&#128934;</span>Syns mina köpta kuponger via medlemssidorna i appen?</h3>
        <p class="answer">Ja, samma kupong visas både på medlemssidor och i appen.</p>
    </div>
    <h2 class="faq-category" data-category="category4">Företagsappen</h2>
    <div class="faq-list" data-category="category4">
        <h3 class="faq"><span class="icon">&#128934;</span>Var kan jag ladda ner den nya företagsappen?</h3>
        <p class="answer">Du laddar ner appen Preem Företag i AppStore för iOS eller Google Play för Android</p>
        <h3 class="faq"><span class="icon">&#128934;</span>Varför ser jag fler bolag när jag loggar in?</h3>
        <p class="answer">Om du är firmatecknare för fler bolag som också är kund hos Preem och om det finns ett mobilappkonto för dessa, kan du växla mellan dessa företag. Du behöver därför inte logga ut och logga in när du byter mellan konton</p>
        <h3 class="faq"><span class="icon">&#128934;</span>Hur lång tid tillbaka kan jag se mina fakturor?</h3>
        <p class="answer">Innevarande månad plus 12 månader.</p>
    </div>
    <h2 class="faq-category" data-category="category5">Utbyte till Företagskort med chip</h2>
    <div class="faq-list" data-category="category5">
        <h3 class="faq"><span class="icon">&#128934;</span>När börjar ni byta ut de gamla korten till kort med chip?</h3>
        <p class="answer">Utbytet av korten inleds i oktober 2022. Beroende på vilken giltighetstid ert/era kort har byts de sedan ut löpande under en 12-månadersperiod.</p>
        <h3 class="faq"><span class="icon">&#128934;</span>Kan jag byta PIN-kod?</h3>
        <p class="answer">Nej - I och med att vi byter till ett kort med chip, kommer du också att få en ny PIN-kod i separat försändelse.</p>
        <h3 class="faq"><span class="icon">&#128934;</span>Vilka kortbegränsningar kan jag välja?</h3>
        <p class="answer">Drivmedelskort eller Dieselkort. (Spolarvätska, AdBlue och smörjolja inkluderas som möjliga köp precis som idag)</p>
        <h3 class="faq"><span class="icon">&#128934;</span>Kan jag använda mitt nya kort för att betala parkering?</h3>
        <p class="answer">Nej.</p>
        <h3 class="faq"><span class="icon">&#128934;</span>Kan jag ladda min bil med Preem Företagskort?</h3>
        <p class="answer">Nej - inte idag, då detta kräver ett annat kort, eller tags. Det kommer ett alternativ för att kunna ladda bil.</p>
    </div>
    <h2 class="faq-category" data-category="category6">Övrigt</h2>
    <div class="faq-list" data-category="category6">
        <h3 class="faq"><span class="icon">&#128934;</span>Hur kommer jag i kontakt med en specifik station?</h3>
        <p class="answer">Gå till Hitta station för att få fram kontaktuppgifter.</p>
        <h3 class="faq"><span class="icon">&#128934;</span>Vad innehåller HVO och var kan jag tanka HVO?</h3>
        <p class="answer">HVO (Hydrerad Vegetabilisk Olja) kan tillverkas av olika typer av råvaror som vegetabiliska oljor och animaliska fetter, vilka i sin tur processas för att bli drivmedel för dieselmotorer, läs mer här.<br><br>Du hittar tankställen på Hitta station.</p>
    </div>
<?php include "includes/footer.php" ?>
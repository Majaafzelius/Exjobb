<?php include "includes/header.php" ?>

    <h1>Vanliga frågor och svar</h1>
    <form asp-action="Index" method="get">
        <p>
            <input type="text" name="searchString" id="search"/>
            <input type="submit" value="Sök" class="btn-secondary"/>
        </p>
    </form> 
    <h2 class="faq-category" data-category="category1">Företagskund</h2>
    <div class="faq-list" data-category="category1">
        <h3 class="faq">Hur anmäler jag en adressändring?</h3>
        <p class="answer">För att göra en adressändring behöver du anmäla det till oss genom att fylla i det här formuläret. Obs: Gäller det personalkort behöver vi ditt kortnummer eller fakturanummer för att uppdatera din nya adress.</p>
        <h3 class="faq">Varför fungerar inte mitt företagskort i parkeringsautomater?</h3>
        <p class="answer">Fler och fler parkeringsbolag tar bort möjligheten att betala med drivmedelskort i terminalerna, dels eftersom det är en specialhantering och dels för att det har förekommit omfattande bedrägerier. Fler och fler kunder väljer även andra alternativ för parkering än att betala med drivmedelskortet. Detta tillsammans gör att Preem inte har valt att få våra chipkort accepterade i parkeringsbolagens terminaler. Du som kund behöver därför välja andra betalningsalternativ.</p>
    </div>
    <h2 class="faq-category" data-category="category2">Privatkund</h2>
    <div class="faq-list" data-category="category2">
        <h3 class="faq">Varför får jag inte rabatt när jag blippar mobilen eller klockan?</h3>
        <p class="answer">Digitala plånböcker använder ett annat kortnummer än det som står på kortet vid köpet. Det betyder att även om ditt fysiska kort är anslutet så känner inte våra system igen ditt kort från telefonen. Du behöver använda ditt fysiska kort vid köp för att få din rabatt. Vi jobbar på en lösning där du kan ansluta din telefon och klocka till rabatterna, vi ber om överseende med detta tills problemet är löst.</p>
        <h3 class="faq">Jag har inte fått min rabatt på mitt anslutna bankkort.</h3>
        <p class="answer">När du tankar med ditt anslutna bankkort syns inte rabatten på kvittot. Din rabatt betalas istället ut som en återbetalning på det konto som kortet är kopplat till 1-5 bankdagar efter köpet.</p>
        <h3 class="faq">Jag fick inget kvitto när jag tankade, hur gör jag för att få tag på en kvittokopia?</h3>
        <p class="answer">Det löser du enklast genom att fylla i <a href="#">det här formuläret</a>. För att vi ska kunna hjälpa dig så smidigt som möjligt ber vi dig att du anger korrekta uppgifter så som:
                            <br><br>kortnummer (de 6 första sifforna + de 4 sista sifforna, ex 123456xxxxxx7891)
                            <br>transaktionsdatum
                            <br>belopp:
                            <br>exakt station.</p>
        <h3 class="faq">Hur hyr jag ett släp?</h3>
        <p class="answer">Du kan boka släp via vår bokningssajt som du hittar här. Vill du komma i kontakt med en specifik station som hyr ut släp, gå till Hitta station.</p>
        <h3 class="faq">Jag vill ansluta mitt bankkort.</h3>
        <p class="answer">Anslut ditt bankkort enkelt via det här <a href="#">formuläret.</a></p>
        <h3 class="faq">Varför har det dragits 1 500-2 000 kronor när jag tankat för mindre?</h3>
        <p class="answer">De svenska bankerna har tillsammans med MasterCard och Visa infört nya krav för hantering av drivmedelsköp på obemannade stationer. Modellen är branschstandard och berör samtliga drivmedelsbolag och kortutgivare i Sverige och inom Europa.
                        <br>Syftet med det nya kravet är att undvika situationer där du som kund råkar tanka för mer än vad som finns på ditt konto och därmed drabbas av övertrassering.
                        <br>När du tankar på en obemmanad station via en kontoautomat skickas en kontroll i realtid till den kortutgivande banken för att se om det finns tillräckligt med pengar på kontot. Upp till ett maximalt belopp om 2 000 kronor. Kortutgivaren svarar sedan tillbaka med att antingen medge tankning upp till hela beloppet eller till ett lägre belopp, vilket sker om saldot på kontot understiger 2 000 kr. För köp med contactless är summan 1 500 kr.
                        <br>När du har tankat färdigt skickar pumpen information om det faktiska tankningsbeloppet till din kortutgivare som då ersätter reservationsbeloppet med det faktiska tankningsbeloppet.
                        <br><br><b>Exempel</b><br>Om du har <b>mer än 2 000 kronor på kontot</b>, men tankar för 700 kronor ska reservationen ändras från 2 000 kr till 700 kr och skillnaden på 1 300 kr bli tillgängligt på ditt konto igen. Du debiteras alltså för köpet i samband med att transaktionen registeras på kortet. Skulle reservationen kvarstå rekommenderar vi att du vänder dig till din kortutgivande bank.
                        <br><br>Om ditt <b>saldo är mindre än 2 000 kr</b> ska du ändå självklart kunna tanka. Då reserveras hela det beloppet och när du är klar med din tankning ska din bank ta bort reservationen och ersätta det med det faktiska belopp du har tankat för. Skulle reservationen kvarstå rekommenderar vi att du vänder dig till din kortutgivande bank.</p>
        <h3 class="faq">Kan jag hyra släp och lämna på annan ort?</h3>
        <p class="answer">Du har möjlighet att hyra envägssläp på utvalda stationer. Du hyr enklast via vår samarbetspartner Brenderup.</p>

    </div>
    <h2 class="faq-category" data-category="category3">Privatappen</h2>
    <div class="faq-list" data-category="category3">
        <h3 class="faq">Question 1</h3>
        <p class="answer">Answer 1</p>
        <h3 class="faq">Question 2</h3>
        <p class="answer">Answer 2</p>
    </div>
    <h2 class="faq-category" data-category="category4">Företagsappen</h2>
    <div class="faq-list" data-category="category4">
        <h3 class="faq">Question 1</h3>
        <p class="answer">Answer 1</p>
        <h3 class="faq">Question 2</h3>
        <p class="answer">Answer 2</p>
    </div>
    <h2 class="faq-category" data-category="category5">Utbyte till Företagskort med chip</h2>
    <div class="faq-list" data-category="category5">
        <h3 class="faq">Question 1</h3>
        <p class="answer">Answer 1</p>
        <h3 class="faq">Question 2</h3>
        <p class="answer">Answer 2</p>
    </div>
    <h2 class="faq-category" data-category="category6">Övrigt</h2>
    <div class="faq-list" data-category="category6">
        <h3 class="faq">Hur kommer jag i kontakt med en specifik station?</h3>
        <p class="answer">Gå till Hitta station för att få fram kontaktuppgifter.</p>
        <h3 class="faq">Vad innehåller HVO och var kan jag tanka HVO?</h3>
        <p class="answer">HVO (Hydrerad Vegetabilisk Olja) kan tillverkas av olika typer av råvaror som vegetabiliska oljor och animaliska fetter, vilka i sin tur processas för att bli drivmedel för dieselmotorer, läs mer här.<br><br>Du hittar tankställen på Hitta station.</p>
    </div>

<?php include "includes/footer.php" ?>
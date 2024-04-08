<?php include "includes/header.php" ?>

<section class="main">
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
        <h3 class="faq">Question 1</h3>
        <p class="answer">Answer 1</p>
        <h3 class="faq">Question 2</h3>
        <p class="answer">Answer 2</p>
    </div>
    <h2 class="faq-category" data-category="category3">Appar</h2>
    <div class="faq-list" data-category="category3">
        <h3 class="faq">Question 1</h3>
        <p class="answer">Answer 1</p>
        <h3 class="faq">Question 2</h3>
        <p class="answer">Answer 2</p>
    </div>
    <h2 class="faq-category" data-category="category4">Utbyte till Företagskort med chip</h2>
    <div class="faq-list" data-category="category4">
        <h3 class="faq">Question 1</h3>
        <p class="answer">Answer 1</p>
        <h3 class="faq">Question 2</h3>
        <p class="answer">Answer 2</p>
    </div>
    <h2 class="faq-category" data-category="category5">Övrigt</h2>
    <div class="faq-list" data-category="category5">
        <h3 class="faq">Question 1</h3>
        <p class="answer">Answer 1</p>
        <h3 class="faq">Question 2</h3>
        <p class="answer">Answer 2</p>
    </div>
</section>

<?php include "includes/footer.php" ?>
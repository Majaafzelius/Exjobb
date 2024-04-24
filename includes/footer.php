</div>

<div id="chatbot-wrapper" class="chatbot-wrapper">
        <button id="toggle-chatbot" onclick="toggleChatbot()">Chatbot</button>
        <div id="chatbot-container" class="chatbot-container hidden">
            <h2>Chatbot</h2>
            <div id="chat-display" class="chat-display">
                <!-- Conversation history will be displayed here -->
            </div>
            <div class="input-container">
                <input type="text" id="chat-input" placeholder="Skriv ditt meddelande här..." onkeydown="handleKeyDown(event)">
                <button onclick="handleUserInput()">Skicka</button>
            </div>
        </div>
    </div>
    </main>
    <footer> 
      <div class="foot_cont">
        <div class="foot_item">
          <h4>Privat</h4>
          <a href="#">Hitta station</a>
          <a href="#">Drivmedel</a>
          <a href="#">I butiken</a>
          <a href="#">Hyrsläp</a>
          <a href="#">Kort & förmåner</a>
          <a href="#">För bilen</a>
          <a href="#">Presentkort</a>
        </div>
        <div class="foot_item">
          <h4>Företag</h4>
          <a href="#">Produkter & Tjänster</a>
          <a href="#">Våra kort</a>
          <a href="#">Listpriser</a>
          <a href="#">Hitta station</a>
          <a href="#">Återförsäljare</a>
          <a href="#">Kund hos oss</a>
        </div>
        <div class="foot_item">
          <h4>Om Preem</h4>
          <a href="#">Om oss</a>
          <a href="#">Hållbarhet</a>
          <a href="#">Press & nyheter</a>
          <a href="#">Karriär</a>
          <a href="#">Finansiellt</a>
          <a href="#">insikt & Kunskap</a>
          <a href="#">Personuppgifter</a>
        </div>
        <div class="foot_item">
          <h4>Kundservice & kontakt</h4>
          <div class="footer_cs_container">
            <div class="foot_item">
              Privatkort & MasterCard <br>
              Tel: 0476-58 71 40 <br>
              Mån-fre 08.00-17.00 <br>
              <a href="form.php">Kontakta oss</a> <br>
              Företag <br>
              Truck- Transport- & Företagskort <br>
              020-450 450<br>
              Mån-fre 08.30-16.00<br>
              <a href="form.php">Kontakta oss</a>
              <a href="faq.php">Frågor och svar</a><br>
              
              Bulkleverans & beställning (OBS Gäller ej kort) <br>
              010-450 19 99 <br>
              Måndag-fredag 07.00-16.00 <br><br>

              Felanmälan Station <br>
              Tel: 0771-380 000 <br>
              Dygnet runt <br>
              <a href="form.php">Kontakta oss</a><br>
            </div>
            <div>
              Presstelefon <br>
              Tel: 070-450 10 01 <br>
              (för press- och intervjufrågor)<br><br>
            </div>
            <div>
              Preem AB<br>
              112 80 Stockholm<br>
              Växel: 010-450 10 00<br>
              (inkl Preemraff)<br>
            </div>
          </div>  
          

          
        </div>
      </div>
      <p><b>Besöksadress <br> Warfvinges väg 45, Stockholm</b></p>
        <p id="copyright">Copyright &copy; Maja Afzelius 2023</p>
        
    </footer>
    <script src="prototyp.js"></script>
    <script src="chatbot.js"></script>
</body>
</html>

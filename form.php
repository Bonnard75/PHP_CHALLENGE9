<form action="thanks.php" method="post">
  <div>
    <label for="lname">Nom :</label>
    <input type="text" id="lname" name="user_lname" autofocus>
  </div> <br>
  <div>
    <label for="name">Prénom :</label>
    <input type="text" id="name" name="user_name" required>
  </div> <br>
  <div>
    <label for="email">Votre e-mail :</label>
    <input type="email" id="email" name="user_mail" required>
  </div> <br>
  <div>
    <label for="tel">Telephone :</label>
    <input type="tel" id="tel" name="user_tel" required>
  </div> <br>
  <label for="sujet">Sujet:</label>
    <select name="sujet" id="sujet" required>
        <option value="">--Merci de choisir un Sujet:--</option>
        <option value="Sujet 1">Sujet 1</option>
        <option value="Sujet 2">Sujet 2</option>
        <option value="Sujet 3">Sujet 3</option>
    </select> <br>
  <div>
    <label for="message">Message :</label>
    <textarea id="message" name="user_message" required></textarea>
  </div> <br>
  <div class="button">
    <button type="submit">Envoyer votre message</button>
  </div>
</form>
<!DOCTYPE html>
<html>
      <head>
            <title>Reserveren</title>
      </head>
      <body>
            <form action="BehandelReservatie.php" method="post">
                  <label for="name">Naam</label>
                  <input id="name" type="text" name="name" required pattern="[a-zA-Z]+"/>
                  <br/>
                  <label for="lastname">Familienaam</label>
                  <input id="lastname" type="text" name="lastname" required pattern="[a-zA-Z]+"/>
                  <br/>
                  <label for="balkon">Plaats</label>
                  <input id="balkon" type="text" name="balkon" required/>
                  <br/>
                  <label for="npers">Aantaal personen</label>
                  <input id="npers" type="number" name="npers" required/>
                  <br/>
                  <label for="birth">Gebortendatum</label>
                  <input id="birth" type="date" name="birth" required/>
                  <br/>
                  <label for="bankaccount">Rekeningnummer</label>
                  <input id="bankaccount" type="text" name="bankaccount" required pattern="[a-zA-Z]{2}[0-9]{2}[a-zA-Z0-9]{4}[0-9]{7}([a-zA-Z0-9]?){0,16}"/>
                  <br/>
                  <label for="name">Emailadres</label>
                  <input id="mail" type="email" name="mail" required/>
                  <br/>
                  <button type="submit">registeren</button>
            </form>
      </body>
</html>
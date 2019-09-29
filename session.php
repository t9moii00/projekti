<?php include "menu.php"; ?>
	<h2>Asiakastiedot</h2>
	<p>
    Omat tietosi.
		<form class="" action="show_session.php" method="session">
      <label for="en">Etunimi</label> <br>
      <input type="text" id="en" name="en" value="" placeholder="Etunimi"> <br>
      <label for="sn">Sukunimi</label> <br>
      <input type="text" id="sn" name="sn" value="" placeholder="Sukunimi"> <br>
      <label for="po">Postiosoite</label> <br>
      <input type="text" name="po" value="" placeholder="Postiosoite"> <br>
      <label for="pn">Postinumero</label> <br>
      <input type="text" name="pn" value="" placeholder="Postinumero"> <br>
      <label for="pu">Puhelinnumero</label> <br>
      <input type="text" name="pu" value="" placeholder="Puhelinnumero"> <br>

      <input type="submit" name="" value="Save">
    </form>

      </form>
	</p>
<?php include "footer.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription</title>
  <link href="inscription.css" rel="stylesheet" type="text/css">

  <script language="JavaScript">
    function verification() {
      if (document.getElementById("nom").value == "") {
        alert("Veuillez taper votre nom!");
        return false;
      }
      if (document.getElementById("prenom").value == "") {
        alert("Veuillez taper votre prenom!");
        return false;
      }

      if (document.getElementById("email").value == "") {
        alert("Veuillez entrer votre adresse e-mail!");
        return false;
      }
      if (document.getElementById("email").value.indexOf('@') == -1) {
        alert("Adresse e-mail incorrecte!");
        return false;
      }

      if (document.getElementById("password").value == "") {
        alert("Veuillez taper votre mot de passe!");
        return false;
      }

      if (document.getElementById("password").value == "") {
        alert("Veuillez taper votre mot de passe!");
        return false;
      }
      var v = 1;

      var taille = document.getElementById("password").value.length;
      for (i = 0; i < taille; i++) {
        if (document.getElementById("password").value.charAt(i) < "0" || document.getElementById("password").value.charAt(i) > "9" || taille != 8) v = -1;
      }
      if (v == -1) {
        alert("Votre mot de passe est incorrect!");
        return false;
      }

    }
  </script>

</head>

<body>
  <header class="head1">

    <div class="logo_premier">
      <img src="img/Logo.png" alt="logo de shop" class="logo1" height="90" width="90">
      <!--<span>Chique style</span>
          <h3 class="pp"> Everyone deserves to dress better </h3>-->
    </div>






    <nav class="nav11">

      <ul class="d1">
        <li><a href="frontPage.html">Home</a></li>
        <li><a href="produitswom.html">Women</a></li>
        <li><a href="produitsmen.html">Men</a></li>
        <li><a href="#">kids</a></li>
        <li><a href="beauty.html">Beauty</a></li>
        <li><a href="#">More</a></li>
      </ul>

      <div class="container">

        <form action="" class="searchengine">

          <input type="text" placeholder="Search" name="q">
        </form>
        <button class="button1">
          <img src="img/Magnifier free icons designed by Freepik.jpg">
        </button> <!-- the image here is the search icon -->
        <button class="button2">
          <img src="img/Account, user, interface, profile icon - Free download.jpg">
        </button> <!-- the image here is se connecte icon -->
        <button class="button3">
          <img src="img/Wicker Basket Vector Icon Symbol Picnic Isolated on White Background Stock Vector - Illustration of decoration, rural_ 160342561.jpg">
        </button> <!-- the image here is ajouter au panier icon -->
      </div>

    </nav>

    <nav class="nav22">

      <ul class="d2">
        <li><a href="produitswom.html">Dresses</a></li>
        <li><a href="produitswom.html">Jeans</a></li>
        <li><a href="produitswom.html">Tops</a></li>
        <li><a href="produitswom.html">Bottoms</a></li>
        <li><a href="produitswom.html">Shoes</a></li>
        <li><a href="beauty.html">Accessories</a></li>
        <li><a href="produitswom.html">Rompers</a></li>
        <li><a href="beauty.html">Beauty</a></li>
        <li><a href="beauty.html">Bags</a></li>
        <li><a href="produitsmen.html">Matching Sets</a></li>
        <li><a href="produitsmen.html">Hoodies </a></li>
        <li><a href="produitsmen.html"> Sweatshirts</a></li>
        <li><a href="produitsmen.html">Sleepwear</a></li>
        <li><a href="produitswom.html">Trending</a></li>

      </ul>

    </nav>
  </header>
  <div class="contenair">
    <div class=form-container>

      <form action="inscription.php" method="POST" onSubmit="verification()" class="ff">

        <h2>Inscription</h2>


        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>

        <label for="prenom">Prenom :</label>
        <input type="text" id="prenom" name="prenom" required>

        <label for="email">Adresse e-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" required>



        <button type="submit" class="butt5">S'inscrire</button>

      </form>
    </div>
  </div>

  <?php
  include 'connection.php';
  $bdd = connection();


  if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['email']) and isset($_POST['password'])) {
    if (!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['email']) and !empty($_POST['password'])) {

      $sql1 = "select * from client where email='" . $_POST['email'] . "'";
      $reponse = $bdd->query($sql1);
      $donnees = $reponse->fetch();

      if (empty($donnees)) {
        $sql2 = "INSERT INTO `client` (`nom`, `prenom`, `email`, `password`) VALUES ('" . $_POST['nom'] . "', '" . $_POST['prenom'] . "', '" . $_POST['email'] . "', '" . $_POST['password'] . "')";
        $bdd->exec($sql2);
        echo "<center>Utilisateur " . $_POST['nom'] . " est ajouté avec succés</center>";
      } else
        echo "<center>Utilisateur existe déja !!!</center>";
    }
  }
  ?>


  <footer class="site-footer">
    <div class="footer-container">
      <div class="footer-section">
        <h2>A propos de nous</h2>
        <div>Notre marque incarne l'équilibre parfait entre la modernité et l'élégance intemporelle.
          Chaque produit que nous proposons est soigneusement conçu pour refléter la sophistication
          et le raffinement, offrant à nos clients une expérience d'achat en ligne unique.</div>
      </div>

      <div class="footer-section">
        <h2>Liens rapides</h2>
        <ul>
          <li><a href="#">Accueil</a></li>
          <li><a href="#">Produits</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Panier</a></li>
        </ul>
      </div>

      <div class="footer-section">
        <h2>Contactez-nous</h2>
        <p>Email: elbaz.y.fst@uhp.ac.ma</p>
        <p>Téléphone: +212 077 08373 87</p>
      </div>
    </div>

    <div class="bottom-bar">
      <p>&copy; Chique Style. Tous droits réservés.</p>
    </div>
  </footer>

</body>

</html>
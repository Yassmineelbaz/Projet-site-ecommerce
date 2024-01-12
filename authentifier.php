<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">

  <title>Authentification</title>
  <link href="authentifier.css" rel="stylesheet" type="text/css">

</head>

<body>
  <header class="head1">

    <div class="logo_premier">
      <img src="img/Logo.png" alt="logo de shop" class="logo1" height="90" width="90">

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

        <form action="" class="barrecherche">
          <input type="text" placeholder="Search" name="q" width="500">
        </form>
        <button class="button1">
          <img src="img/Magnifier free icons designed by Freepik.jpg">
        </button> <!-- the image here is the search icon -->
        <button class="button2" onclick="goToPage1()">
          <img src="img/Account, user, interface, profile icon - Free download.jpg">
        </button> <!-- the image here is se connecte icon -->
        <button class="button3">
          <img src="img/Wicker Basket Vector Icon Symbol Picnic Isolated on White Background Stock Vector - Illustration of decoration, rural_ 160342561.jpg">
        </button> <!-- the image here is ajouter au panier icon -->
        <script>
          function goToPage1() {
            window.location.href = 'authentifier.php';
          }
        </script>
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
  <main>
    <form class="containerauthentifier" method="post" action="authentifier.php">
      <h1>Connexion/S’inscrire</h1>
      <label for="email"><strong> adresse e-mail: </strong> </label>
      <input type="text" id="email" name="email" required>

      <label for="password"><strong>Mot de de passe: </strong> </label>
      <input type="password" id="password" name="password" required>

      <button type="submit" class="buttconecter" onclick="goToPage1()">Se connecter</button>

      <p><strong>N'avez-vous pas de compte ? <a href="inscription.php">Inscrivez-vous</strong></a></p>

      <h4><strong>-------------------------------------OU-------------------------------------</strong></h4>

      <button class="buttconecter">
        Continuer avec facebook
      </button>
      <button class="buttconecter">
        Continuer avec google
      </button>

      <script>
        function goToPage1() {
          window.location.href = 'frontPage.html';
        }
      </script>

    </form>
  </main>


  <?php
  include 'connection.php';
  $bdd = connection();

  if (isset($_POST['email']) && isset($_POST['password'])) {
    $username = $_POST['email'];
    $password = $_POST['password'];

    // Requête pour récupérer les informations d'authentification depuis la base de données
    $query = $bdd->prepare("SELECT * FROM users WHERE email = ?");
    $query->execute([$username]);
    $user = $query->fetch();

    // Vérification des informations d'identification
    if ($user && password_verify($password, $user['password'])) {
      header("location: frontPage.html");
      exit;
    } else {
      echo "<center> Adresse e-mail ou mot de passe incorrect</center>";
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
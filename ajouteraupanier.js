let panier = [];


function ajouterAuPanier(nomProduit, prixProduit) {
  const produit = {
    nom: nomProduit,
    prix: prixProduit
  };

  panier.push(produit);


  afficherPanier();
}


function afficherPanier() {
  const listePanier = document.getElementById("liste-panier");
  listePanier.innerHTML = "";


  panier.forEach(produit => {
    const listItem = document.createElement("li");
    listItem.textContent = `${produit.nom} - $${produit.prix.toFixed(2)}`;
    listePanier.appendChild(listItem);
  });
}
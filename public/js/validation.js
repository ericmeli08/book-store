const form = document.getElementById('form');

const emailInput = document.getElementById('email');

emailInput.addEventListener('input', () => {
  const email = emailInput.value;

  if (email.includes('@gmail.com')) {
    emailInput.style.border = '1px solid green';
  } else {
    emailInput.style.border = '1px solid red';
  }
});



form.addEventListener('submit', (event) => {
  event.preventDefault();

  const email = document.getElementById('email').value;
  const nom = document.getElementById('nom').value;
  const motDePasse = document.getElementById('mot-de-passe').value;
  const loisirs = document.querySelectorAll('input[name="loisirs"]:checked');
  const quantite = document.getElementById('quantite').value;
  const listeSelection = document.getElementById('liste-selection').value;
  const ref = document.getElementById('ref').value;

 
  let emailValide = false;
  let nomValide = false;
  let motDePasseValide = false;
  let loisirsValides = false;
  let quantiteValide = false;
  let listeSelectionValide = false;
  let refValide = false;


  if (email.includes('@gmail.com')) {
    document.getElementById('email').style.border = '1px solid green';
    emailValide = true;
  } else {
    document.getElementById('email').style.border = '1px solid red';
  }


  if (nom.length > 0) {
    document.getElementById('nom').style.border = '1px solid green';
    nomValide = true;
  } else {
    document.getElementById('nom').style.border = '1px solid red';
  }


  if (motDePasse.length >= 6) {
    document.getElementById('mot-de-passe').style.border = '1px solid green';
    motDePasseValide = true;
  } else {
    document.getElementById('mot-de-passe').style.border = '1px solid red';
  }

  
  if (loisirs.length > 0) {
    loisirsValides = true;
  }

 
  if (quantite > 0) {
    document.getElementById('quantite').style.border = '1px solid green';
    quantiteValide = true;
  } else {
    document.getElementById('quantite').style.border = '1px solid red';
  }

  
  if (listeSelection != '') {
    document.getElementById('liste-selection').style.border = '1px solid green';
    listeSelectionValide = true;
  } else {
    document.getElementById('liste-selection').style.border = '1px solid red';
  }

  
  const regexRef = /^[A-Z]{2}[0-9]{4}$/;
  if (regexRef.test(ref)) {
    document.getElementById('ref').style.border = '1px solid green';
    refValide = true;
  } else {
    document.getElementById('ref').style.border = '1px solid red';
  }

  
  if (emailValide && nomValide && motDePasseValide && loisirsValides && quantiteValide && listeSelectionValide && refValide) {
    alert('Formulaire soumis avec succès !');
  } else {
    alert('Veuillez corriger les erreurs dans le formulaire.');
  }
});

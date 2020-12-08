const depart = document.getElementById('depart');
const arrivee = document.getElementById('arrivee');
const passagers = document.getElementById('passagers');
const date = document.getElementById('date');
const heure = document.getElementById('heure');
const nom = document.getElementById('nom');
const telephone = document.getElementById('telephone');
const email = document.getElementById('email');

const devisContent = document.getElementById('devisContent');

const errorElement = document.getElementById('error');

const formDevis = document.getElementById('formDevis');
const textDevis = document.getElementById('textDevis');

formDevis.addEventListener('submit', handleForm);

function fadeout() {
  errorElement.style.opacity = '0';
}

function handleForm(e) {
  e.preventDefault();

  if (passagers.value === '' || passagers.value == null || date.value === '' || date.value == null || heure.value === '' || heure.value == null || nom.value === '' || nom.value == null || telephone.value === '' || telephone.value == null || email.value === '' || email.value == null) {
    errorElement.style.display = "block";
    errorElement.innerText = "Veuillez remplir tous les champs.";
    setTimeout(fadeout, 5000);

  } else if (/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value) !== true) {
    errorElement.style.display = "block";
    errorElement.innerText = "Veuillez indiquer un email valide.";
    setTimeout(fadeout, 5000);
  } else {
    let formData = new FormData(formDevis);

    fetch('../form.php', {
      method: 'post',
      body: formData
    }).then((res) => {
      return res.text();
    }).then((text) => {
      console.log(text);
    }).catch((err) => {
      console.log(err);
    })

    formDevis.remove();
    textDevis.innerText = "Votre demande de devis a bien été prise en compte. Nous vous enverrons une réponse dans les plus brefs délais.";
    let driverForm = document.createElement('img');
    driverForm.src = "images/driver-form.jpg";
    driverForm.style.margin = "auto";
    driverForm.style.marginTop = "2rem";
    driverForm.style.border = "1px #617bb3 solid";
    driverForm.style.width = "360px";
    devisContent.appendChild(driverForm);
  }
}
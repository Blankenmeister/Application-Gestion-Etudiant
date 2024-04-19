
const sectValiderPres = document.getElementById('ValiderPres');
const sectSignEnCours = document.getElementById('SignEnCours');

sectSignEnCours.style.display = 'none';

sectValiderPres.addEventListener('click', () => {
    sectValiderPres.style.display = 'none';
    sectSignEnCours.style.display = 'block';
})

const homeTab = document.getElementById('homeTab');
const promotionTab = document.getElementById('promotionTab');



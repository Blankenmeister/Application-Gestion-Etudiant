const btnValiderPresence = document.getElementById('btnValiderPresence');

console.log(btnValiderPresence);

const sectValiderPresence = document.getElementById('sectValiderPresence');
const sectSignatureRecueillie = document.getElementById('sectSignatureRecueillie');


sectSignatureRecueillie.style.display = 'none';


btnValiderPresence.addEventListener(click, () => {
    sectValiderPresence.style.display = 'none';
    sectSignatureRecueillie.style.display = 'block';

})




const btnConnexion = document.getElementById("btnConnexion");

if (btnConnexion) {
  function AjaxConnexion(event) {
    event.preventDefault();

    // console.log('coucouJs');

    let mailConnexion = document.getElementById("mailConnexion").value;
    let mdpConnexion = document.getElementById("mdpConnexion").value;

    let reponseAccueil = document.getElementById("reponseAccueil");

    const url = "/";
    // const url = "/Etudiant"; si redirection vers la page cours etudiant
    const requete = new XMLHttpRequest();

    requete.open("POST", url, true);
    requete.setRequestHeader("content-Type", "application/json");

    requete.send(
      JSON.stringify({
        mailConnexion: mailConnexion,
        mdpConnexion: mdpConnexion,
      })
    );

    requete.onreadystatechange = function () {
      if (requete.readyState === 4 && requete.status === 200) {
        reponseAccueil.innerHTML = requete.responseText;

        let scripts = reponseAccueil.querySelectorAll("script");
        for (let i = 0; i < scripts.length; i++) {
          let script = document.createElement("script");

          script.src = scripts[i].src;

          reponseAccueil.removeChild(scripts[i]);
          reponseAccueil.appendChild(script);
        }
      }
    }
  }
}

// sonia.blanken@gmail.com
// ecole

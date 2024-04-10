function AjaxConnexion(event) {
    event.preventDefault();
    
      console.log('coucouJs');
    
    
    
        let mailConnexion = document.getElementById('mailConnexion').value;
        let mdpConnexion = document.getElementById('mdpConnexion').value;
        
     
        let message = document.getElementById('message');
        
    
        const requete = new XMLHttpRequest();
      
        requete.open('POST', HOME_URL, true);
        requete.setRequestHeader('content-Type', 'application/json'); 
      
        requete.send(JSON.stringify({
          mailConnexion: mailConnexion,
          mdpConnexion: mdpConnexion,
          }));
      
        requete.onreadystatechange = function() {
      
          if (requete.readyState === 4 && requete.status === 200) {
            message.innerHTML += JSON.parse(requete.responseText); 
            // window.location.href = 'index.php';
          }
          Header('location: ')
        }
      }
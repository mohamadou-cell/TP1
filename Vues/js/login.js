let connect = document.getElementById("connect");

connect.addEventListener("submit", function(e){

    let user = document.getElementById("user");
    if(user.value.trim() == ""){
        let erreur = document.getElementById("erreur");
        erreur.innerHTML = "Entrer un nom d'utilisateur";
        erreur.style.color = "red";
        e.preventDefault();
    }
    else{
        erreur.style.display = "none";
    }

    let pswd = document.getElementById("pswd");
    if(pswd.value.trim() == ""){
        let erreur1 = document.getElementById("erreur1");
        erreur1.innerHTML = "Entrer un mot de passe";
        erreur1.style.color = "red";
        e.preventDefault();
    }
    else{
        erreur1.style.display = "none";
    }
})
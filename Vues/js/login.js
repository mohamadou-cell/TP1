let connect = document.getElementById("connect");

connect.addEventListener("submit", function(e){

    let user = document.getElementById("user");
    let mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(user.value.trim() == ""){
        let erreur = document.getElementById("erreur");
        erreur.innerHTML = "Entrer un email";
        erreur.style.color = "red";
        e.preventDefault();
    }
    else if(user.value.match(mailformat)){
        erreur.innerHTML = "";
    }
    else{
        erreur.innerHTML = "Email invalide";
        erreur.style.color = "red";
    }

    let pswd = document.getElementById("pswd");
    if(pswd.value.trim() == ""){
        let erreur1 = document.getElementById("erreur1");
        erreur1.innerHTML = "Entrer un mot de passe";
        erreur1.style.color = "red";
        e.preventDefault();
    }
    else{
        erreur1.innerHTML = "";
    }
});
function mostramsg(msg) {
    document.getElementById("dMsg").innerHTML = msg; 
    setTimeout(() => {
       document.getElementById("dMsg").innerHTML = ""; 
    }, 3000);
}

function fValida() {
    const vnome=document.getElementById("iNome");
    const vemail=document.getElementById("iEmail");
    const vfone=document.getElementById("iFone");
    var valido = true; //variavel para controlar validação

    //Verificar Nome foi preenchido
    if (vnome.value == "") {
        mostramsg("Nome é Obrigatório");
        vnome.focus();
        valido = false;
    } else if (vemail.value == "") {
       
        mostramsg("e-mail é Obrigatório");
        vemail.focus();
        valido = false;
    } else if (vfone.value == "") {
        mostramsg("Fone é Obrigatório");
        vfone.focus();
        valido = false;
    }
    return(valido);
}
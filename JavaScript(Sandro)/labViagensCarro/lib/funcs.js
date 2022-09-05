function mostramsg (msg) 
{
    $("#msg").text(msg);
    setTimeout(() => {
        $("#msg").text("");
    }, 3000);
}

function fValidaPlaca (vplaca)
{
    var re = /^([a-zA-Z]{3}-\d{4})$/;
    return(re.test(vplaca));
}

function fValida()
{
    const vplaca=$("#placa").val();
    const vnome=$("#nome").val();
    const vorigem=$("#origem").val();
    const vdestino=$("#destino").val();
    const vkm=$("#km").val();
    const vlitros=$("#litros").val();
    const vvalor=$("#valor").val();

    let valido = true;

    if (!fValidaPlaca(vplaca))
    {
        mostramsg("Placa Inválida")
        $("#placa").focus();
        valido = false;
    }
    else if (vnome == "")
    {
        mostramsg("Nome é obrigatório")
        $("#nome").focus();
        valido = false;
    }
    else if (vorigem == "")
    {
        mostramsg("Origem é obrigatório")
        $("#origem").focus();
        valido = false;
    }
    else if (vdestino == "")
    {
        mostramsg("Destino é obrigatório")
        $("#destino").focus();
        valido = false;
    }
    else if (vkm == "")
    {
        mostramsg("Km é obrigatório")
        $("#km").focus();
        valido = false;
    }
    else if (vlitros == "")
    {
        mostramsg("Litros é obrigatório")
        $("#litros").focus();
        valido = false;
    }
    else if (vvalor == "")
    {
        mostramsg("Valor é obrigatório")
        $("#valor").focus();
        valido = false;
    }
    return(valido);
}

$(document).ready(function()
{
    $("#fViagem").submit(function()
    {
        return fValida();
    });
});
vIntervalo = null;

function f2d(valor)
{
    svalor = valor.toString();
    console.log(svalor.length);
    if (svalor.length == 1)
    {
        svalor = "0"+svalor
    }
    return(svalor)
}

function fStart()
{
    var data = new Date();
    console.log("Data:", data);

    document.getElementById("vData").innerHTML = data.getDate()+"/"+(data.getMonth()+1)+"/"+data.getFullYear();
    document.getElementById("vHora").innerHTML = data.getHours()+":"+data.getMinutes()+":"+data.getSeconds();
}

function fHora()
{
    var dat = new Date();
    return(data.getHours()+":"+data.getMinutes()+":" +data.getSeconds());
}

function fMostraHora(obj)
{
    if (vIntervalo != null)
    {
        fParaMostraHora ()
        document.getElementById("acao").value = "Iniciar";
    }
    else
    {
        vIntervalo = setInterval(() =>
        {
            obj.innerHTML = fHora();
        }, 1000);
        document.getElementById("acao").value = "Parar";
    }
}

function fParaMostraHora()
{
    clearInterval(vIntervalo);
    vIntervalo = hull;
}

function fJogaDado()
{
    var num = Math.floor((Math.random() * 6) +1);
    console.log(num);
    return (num);
}
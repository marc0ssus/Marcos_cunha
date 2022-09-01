
function Raiz ()
{
    var num = document.getElementById("num").value;
    num = parseInt(num);

    var raiz = Math.sqrt(num);
    raiz = parseFloat(raiz);
    window.alert(raiz);
}

function Cubo ()
{
    var num = document.getElementById("num").value;
    num = parseInt(num);

    var cubo = Math.pow(num, 3);
    cubo = parseFloat(cubo);
    window.alert(cubo);
}
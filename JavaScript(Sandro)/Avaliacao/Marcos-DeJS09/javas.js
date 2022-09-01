function validEmail ()
{
    var vemail = document.getElementById("iEmail").value;
    var re = /^[\w+.]+@\w+\.\w{2,}(?:\.\w{2})?$/;
    if (!re.test(vemail))
    {
       window.alert("E-mail: "+vemail+" inválido");   
    }
}

function validPhone ()
{
    var vphone = document.getElementById("iPhone").value;
    var rp = /(\(?\d{2}\)?\s)?(\d{4,5}\-\d{4})/;
    if (!rp.test(vphone))
    {
        window.alert("Telefone "+vphone+" inválido!");
    }
}

function validAll ()
{
    validEmail ();
    validPhone ();

    var n = document.forms["form"]["Nome"].value;
    if (n == "" || n == null)
    {
        window.alert("Nome deve ser informado")
    }
    var e = document.forms["form"]["Email"].value;
    if (e == "" || e == null)
    {
        window.alert("Email deve ser informado")
    }
    var t = document.forms["form"]["Phone"].value;
    if (t == "" || t == null)
    {
        window.alert("Telefone deve ser informado")
    }
    var tx = document.forms["form"]["Msg"].value;
    if (tx == "" || tx == null)
    {
        window.alert("Mensagem deve ser informado")
    }
}
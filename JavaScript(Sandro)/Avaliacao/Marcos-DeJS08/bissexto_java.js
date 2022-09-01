function isBissexto()
{
    var ano = document.getElementById("ano").value;

    if (ano % 400 == 0)
    {
        document.write(ano+" é um ano bissexto");
    }
    else if (ano % 4 == 0 && ano%100 != 0)
    {
        document.write(ano+" é um ano bissexto");
    }
    else
    {
        document.write(ano+" NÃO é um ano bissexto");
    }
}
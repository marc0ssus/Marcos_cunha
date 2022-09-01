function Calcular ()
{
    var string = document.getElementById("num").value;
    var input = string.split(' ');
    
    var maior = -99999999;
    var menor =  99999999;
    var parnum = 0;
    var imnum = 0;

    for (i = 0; i < input.length; i++)
    {
        if (input[i] > maior)
        {
            maior = input[i];
        }
        if (input[i] < menor)
        {
            menor = input[i];
        }
        if (input[i] % 2 == 0)
        {
            parnum ++;
        }
        else
        {
            imnum ++;
        }
    }

    document.write("Maior: "+maior);
    document.write("<br>");
    document.write("Menor: "+menor);
    document.write("<br>");
    document.write("Quantidade de pares: "+parnum);
    document.write("<br>");
    document.write("Quantidade de impares: "+imnum);
}
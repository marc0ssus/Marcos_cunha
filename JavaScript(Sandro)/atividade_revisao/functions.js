function verificaSalario()
{
    salario = document.getElementById("salario").value;

    if (salario < 0)
    {
        return false;
    }
}
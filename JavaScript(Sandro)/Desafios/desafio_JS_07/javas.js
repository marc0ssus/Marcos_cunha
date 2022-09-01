function getAge ()
{
    var birth = document.getElementById("iDate");
    const today = moment(new Date());
    birth = birth.value;
    birth = birth[6]+birth[7]+birth[8]+birth[9]+"-"+birth[3]+birth[4]+"-"+birth[0]+birth[1];
    const past = moment(birth);
    const duration = moment.duration(today.diff(past));
 
    const age = Math.floor(duration.asYears());
    window.alert("Idade:"+age);
}

function validEmail ()
{
    var vemail = document.getElementById("iEmail").value;
    var re = /^[\w+.]+@\w+\.\w{2,}(?:\.\w{2})?$/;
    if (!re.test(vemail))
    {
       window.alert("E-mail: "+vemail+" inválido");   
    } else
    {
        window.alert("E-mail: "+vemail+" válido");    
    }
}

function validPhone ()
{
    var vphone = document.getElementById("iPhone").value;
    var rp = /^(\()?\d{3}(\))?(-|\s)?\d{3}(-|\s)\d{4}$/;
    if (!rp.test(vphone))
    {
        window.alert("Telefone "+vphone+" inválido!")
    }
    else
    {
        window.alert("Telefone "+vphone+" válido!")
    }
}
class Aluno{
    constructor (nome, nota1, nota2, nota3){
        this.nome = nome;
        this.nota1 = parseInt(nota1);
        this.nota2 = parseInt(nota2);
        this.nota3 = parseInt(nota3);
    }
    media (){
        return (this.nota1 + this.nota2 + this.nota3) / 3;
    }
    set _setNome(nome){
        this.nome = nome;
    }
    set _setNota1(nota1){
        this.nota1 = nota1;
    }
    set _setNota2(nota2){
        this.nota2 = nota2;
    }
    set _setNota3(nota3){
        this.nota3 = nota3;
    }

    get _nome() {
        return this.nome;
    }
    get _nota1(){
        return this.nota1;
    }
    get _nota2(){
        return this.nota2;
    }
    get _nota3(){
        return this.nota3;
    }
}

var alunos = [];

function SalvarAlunos(nome, nota1, nota2, nota3){
    let valuno = new Aluno (nome, nota1, nota2, nota3);
    alunos.push(valuno);
    return valuno.media();
}

function ListarAlunos (divide = " : ", dividerRow = "; "){
    let retorno = "";
    alunos.forEach(function(valuno, i){
        retorno += '<strong ondblclick="ApagaAluno('+i+')">&nbsp;'+i+'&nbsp;</strong>'
        + divide + valuno._nome 
        + divide + valuno._nota1
        + divide + valuno._nota2 
        + divide + valuno._nota3 
        + divide + valuno.media()+dividerRow;
    });
    return retorno;
}

function LimparAlunos(){
    alunos = [];
}

function ApagaAluno(i){
    alunos.splice(i,1);   
}

function ContaAlunos(){
    return alunos.length;
}
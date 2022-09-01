
var tabuleiro = []; //tabuleiro
var jogador = "";
var ganhador = "";
var linha = "";
var coluna = "";
var diagonala = ""; 
var diagonalb = ""; 

function limpatabuleiro() {
    //reinicia
    jogador = "";
    ganhador = "";
    linha, coluna, diagonala, diagonalb = "";

    for (li=0; li<3; li++) {
        tabuleiro[li] = [];
    }    
    for (li=0; li<3; li++) {
        for (c=0; c<3; c++) {
            tabuleiro[li][c] = "";
            if (document.getElementById("c"+li+c) != null) {
                document.getElementById("c"+li+c).innerHTML = "&nbsp;";
            }
        }
    }   
}

function mudajogador() {
    jogador = ((jogador == "X")?"O":"X");
    document.getElementById("jogador").innerHTML="Jogador: "+jogador;
}

function reinicia() {
    limpatabuleiro();
    mudajogador();
    ganhador = "";
    document.getElementById("novojogo").style.visibility = "hidden";
}

//executa Limpa Tabuleiro ao iniciar o jogo
limpatabuleiro();
jogador = "X"; //Jogador que iniciará

function mostramsg(msg) {
    document.getElementById("msg").innerHTML = msg; 
    setTimeout(() => {
       document.getElementById("msg").innerHTML = ""; 
    }, 3000);
}

function jogar(casa) {
    //mostra log para conferência
    console.log(jogador," - ",casa.innerHTML," - ",casa.id," - ",casa.id[1]," - ",casa.id[2]);

    if (tabuleiro[casa.id[1]][casa.id[2]] == "") {
        tabuleiro[casa.id[1]][casa.id[2]] = jogador;
        casa.innerHTML = jogador;
        // testar ganhador 
        if (!temganhador()) {
           terminaramjogadas(); 
        }
        mudajogador();
    } else {
        // Casa já jogada
        mostramsg("OPS!! Casa já preenchida :( ");
    }   
}

function temganhador() {
    //Devemos testar o array para verificar se há ganhador.
    ix=0;
    
    //carrega valores diagonais
    diagonala = tabuleiro[0][0]+tabuleiro[1][1]+tabuleiro[2][2];
    console.log('diagonala:',diagonala);
    diagonalb = tabuleiro[2][0]+tabuleiro[1][1]+tabuleiro[0][2];
    console.log('diagonalb:',diagonalb);

    while (ix < 3 && ganhador == "") {
        //carrega valores linhas
        linha = tabuleiro[ix][0]+tabuleiro[ix][1]+tabuleiro[ix][2];
        console.log('linha:',linha);
        //carrega valores colunas
        coluna = tabuleiro[0][ix]+tabuleiro[1][ix]+tabuleiro[2][ix];
        console.log('coluna:',coluna);

        jogadavendedora = jogador+jogador+jogador;
        console.log("Jogada Vencedora:",jogadavendedora," jogador: ",jogador);

        //testa ganhador
        if (linha == jogadavendedora 
          ||coluna == jogadavendedora
          ||diagonala == jogadavendedora
          ||diagonalb == jogadavendedora) {
            ganhador = jogador;
            console.log("Ganhador: "+ganhador);
            mostramsg("GAME OVER !!! "+ganhador+" É CAMPEÃO");
            document.getElementById("novojogo").style.visibility = "visible";
        }
        ix++;
    }
    return(!ganhador == "");
}

function terminaramjogadas() {
    terminou = true;
    for (li=0; li<3; li++) {
        for (c=0; c<3; c++) {
            if (tabuleiro[li][c] == "") {
                terminou = false;
            };
        }
    }        
   if (terminou) {
       //reinicia
       mostramsg("GAME OVER - O JOGO EMPATOU ;-(");
       document.getElementById("novojogo").style.visibility = "visible";
   } 
}
    
